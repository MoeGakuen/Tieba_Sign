<?php
if (!defined('IN_KKFRAME')) exit();

function _get_tbs($uid, $cookie = '') {
    static $tbs = array();
    if ($tbs[$uid]) return $tbs[$uid];

    $cookie = empty($cookie) ? get_cookie($uid) : $cookie;

    $tbs_url = 'http://tieba.baidu.com/dc/common/tbs';
    $ch = curl_init($tbs_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Mozilla/5.0 (Linux; U; Android 4.1.2; zh-cn; MB526 Build/JZO54K) AppleWebKit/530.17 (KHTML, like Gecko) FlyFlow/2.4 Version/4.0 Mobile Safari/530.17 baidubrowser/042_1.8.4.2_diordna_458_084/alorotoM_61_2.1.4_625BM/1200a/39668C8F77034455D4DED02169F3F7C7%7C132773740707453/1', 'Referer: http://tieba.baidu.com/'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    $tbs_json = curl_exec($ch);
    curl_close($ch);
    $tbs = json_decode($tbs_json, 1);
    return $tbs[$uid] = $tbs['tbs'];
}

function _verify_cookie($cookie) {
    $tbs_url = 'http://tieba.baidu.com/dc/common/tbs';
    $ch = curl_init($tbs_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Mozilla/5.0 (Linux; U; Android 4.1.2; zh-cn; MB526 Build/JZO54K) AppleWebKit/530.17 (KHTML, like Gecko) FlyFlow/2.4 Version/4.0 Mobile Safari/530.17 baidubrowser/042_1.8.4.2_diordna_458_084/alorotoM_61_2.1.4_625BM/1200a/39668C8F77034455D4DED02169F3F7C7%7C132773740707453/1', 'Referer: http://tieba.baidu.com/'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    $tbs_json = curl_exec($ch);
    curl_close($ch);
    $tbs = json_decode($tbs_json, 1);
    return $tbs['is_login'];
}

function _get_baidu_userinfo($uid) {
    $cookie = get_cookie($uid);
    if (!empty($cookie)) {
        if (stripos($cookie, 'PTOKEN') === FALSE) return array('no' => 4);
        $data = _get_redirect_data('http://tieba.baidu.com/f/user/json_userinfo', $cookie);
        $json = mb_convert_encoding($data, "utf8", "gbk");
        return json_decode($json, true);
    } else {
        return array('no' => -1);
    }
}

function _get_liked_tieba($cookie, $ignore_error = false) {
    if (stripos($cookie, 'PTOKEN') === FALSE) {
        if ($ignore_error) return;
        showmessage('缺少 PTOKEN 无法获取账号信息，请通过 API 重新绑定！', './#guide');
    }
    $pn = 0;
    $kw_name = array();
    $retry = 0;
    while (true) {
        $pn++;
        $mylikeurl = "http://tieba.baidu.com/f/like/mylike?&pn={$pn}";
        $result = _get_redirect_data($mylikeurl, $cookie);
        $result = wrap_text($result);
        $pre_reg = '/<tr><td>.*?<ahref="\/f\?kw=.*?"title="(.*?)"/i';
        preg_match_all($pre_reg, $result, $matches);
        preg_match_all('/balvid="([0-9]+)"/i', $result, $fid);
        $count = 0;
        foreach ($matches[1] as $key => $value) {
            $uname = urlencode($value);
            $_uname = preg_quote($value);
            $kw_name[] = array(
                'name' => mb_convert_encoding($value, 'utf-8', 'gbk'),
                'uname' => $uname,
                'fid' => $fid[1][$count]
            );
            $count++;
        }
        if ($pn >= 100) break;
        if ($count == 0) {
            if ($retry >= 2) break;
            $retry++;
            $pn--;
            continue;
        }
        $retry = 0;
    }
    return $kw_name;
}

function _update_liked_tieba($uid, $ignore_error = false, $allow_deletion = true) {
    $date = date('Ymd', TIMESTAMP + 900);
    $cookie = get_cookie($uid);
    if (!$cookie) {
        if ($ignore_error) return;
        showmessage('请先填写 Cookie 信息再更新', './#baidu_bind');
    }
    $liked_tieba = get_liked_tieba($cookie, $ignore_error);
    $insert = $deleted = 0;
    if (!$liked_tieba) {
        if ($ignore_error) return;
        showmessage('无法获取喜欢的贴吧，请更新 Cookie 信息', './#baidu_bind');
    }
    if ($limit = getSetting('max_tieba')) {
        $count = count($liked_tieba);
        if ($limit < $count) {
            if ($ignore_error) return;
            showmessage("<p>您共计关注了 {$count} 个贴吧，</p><p>管理员限制了每位用户最多关注 {$limit} 个贴吧</p>", './#liked_tieba');
        }
    }
    $my_tieba = array();
    $query = DB::query("SELECT name, fid, tid FROM my_tieba WHERE uid='{$uid}'");
    while ($r = DB::fetch($query)) {
        $my_tieba[$r['name']] = $r;
    }
    foreach ($liked_tieba as $tieba) {
        if ($my_tieba[$tieba['name']]) {
            unset($my_tieba[$tieba['name']]);
            if (!$my_tieba[$tieba['name']]['fid']) DB::update('my_tieba', array(
                'fid' => $tieba['fid'],
            ), array(
                'uid' => $uid,
                'name' => $tieba['name'],
            ), true);
            continue;
        } else {
            DB::insert('my_tieba', array(
                'uid' => $uid,
                'fid' => $tieba['fid'],
                'name' => $tieba['name'],
                'unicode_name' => $tieba['uname'],
            ), false, true, true);
            $insert++;
        }
    }
    DB::query("INSERT IGNORE INTO sign_log (tid, uid, `date`) SELECT tid, uid, '{$date}' FROM my_tieba");
    if ($my_tieba && $allow_deletion) {
        $tieba_ids = array();
        foreach ($my_tieba as $tieba) {
            $tieba_ids[] = $tieba['tid'];
        }
        $str = "'" . implode("', '", $tieba_ids) . "'";
        $deleted = count($my_tieba);
        DB::query("DELETE FROM my_tieba WHERE uid='{$uid}' AND tid IN ({$str})");
        DB::query("DELETE FROM sign_log WHERE uid='{$uid}' AND tid IN ({$str})");
    }
    return array($insert, $deleted);
}

function _client_sign($uid, $tieba) {
    $cookie = get_cookie($uid);
    if (empty($cookie)) return array(10, '请更新 Cookie 信息', 0);

    preg_match('/BDUSS=([^ ;]+);/i', $cookie, $matches);
    if (empty($matches[1])) return array(11, '找不到 BDUSS，请更新 Cookie 信息', 0);

    $ch = curl_init('http://c.tieba.baidu.com/c/c/forum/sign');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', 'User-Agent: bdtb for Android 9.5.8.0'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);

    $array = array(
        'BDUSS' => trim($matches[1]),
        '_client_id' => 'wappc_152' . random(10, true) . '_41',
        '_client_type' => 2,
        '_client_version' => '9.5.8.0',
        'fid' => $tieba['fid'],
        'kw' => $tieba['name'],
        'tbs' => get_tbs($uid, $cookie)
    );

    $sign = '';
    foreach ($array as $key => $value) {
        $sign .= $key . '=' . $value;
    }
    $array['sign'] = strtoupper(md5($sign . 'tiebaclient!!!'));

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array));
    $data = curl_exec($ch);
    curl_close($ch);

    $res = !empty($data) ? json_decode($data, true) : '';
    if (empty($res)) return array(-1, 'JSON 解析错误', 0);
    if (!empty($res['user_info'])) {
        $exp = $res['user_info']['sign_bonus_point'];
        return array(1, "签到成功，经验值上升 {$exp}", $exp);
    } else {
        switch ($res['error_code']) {
            case '1': // 未登录
                return array(12, "BDUSS 无效或过期，请更新 Cookie 信息", 0);

            case '160002': // 已经签过
                return array(2, "重复签过", 0);

            case '199901': // 账号被封，签到无经验
                return array(3, "{$res['error_msg']}", 0);

            case '340006': // 贴吧被封
                return array(13, "该吧暂不开放", 0);

            case '340011': // 签到太快
                return array(-2, "签到太快", 0);

            case '3250001': // 账号被系统封禁
                return array(4, "账号被系统封禁，签到无经验", 0);

            case '3250004': // 被吧务封禁
                return array(6, "账号被吧务封禁，无法签到", 0);

            default:
                return array(-128, "[{$res['error_code']}]: {$res['error_msg']}", 0);
        }
    }
}

function _zhidao_sign($uid) {
    $cookie = get_cookie($uid);
    $ua = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36';
    $header = array(
        'User-Agent: ' . $ua,
        'Referer: https://zhidao.baidu.com/'
    );
    $ch = curl_init('https://zhidao.baidu.com/api/loginInfo?t=' . TIMESTAMP . '000');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    $stoken = !empty($json['stoken']) ? $json['stoken'] : '';

    if ($stoken != '') {
        $header = array(
            'User-Agent: ' . $ua,
            'X-ik-token: ' . $stoken,
            'X-ik-ssl: 1',
            'Referer: https://zhidao.baidu.com/'
        );
        $ch = curl_init('https://zhidao.baidu.com/submit/user');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
        curl_setopt($ch, CURLOPT_POST, true);
        $post_data = array(
            'cm' => 100509,
            'stoken' => $stoken
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $result = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($result, true);
    }

    return $json;
}

function _wenku_sign($uid) {
    $header = array(
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36',
        'Referer: https://wenku.baidu.com/task/browse/daily'
    );
    $ch = curl_init('https://wenku.baidu.com/task/submit/signin');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_COOKIE, get_cookie($uid));
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
}
