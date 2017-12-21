<?php
require_once '../../system/common.inc.php';
require_once './core.php';
if (empty($uid) || empty($_GET['v'])) exit('拒绝访问');
$data = array ();
$data['msgx'] = 0;
switch ($_GET['v']) {
    case 'updatetieba':
        $xuid = !empty($_GET['xuid']) ? $_GET['xuid'] : die('缺少参数');
        $data['msg'] = $xuid;
        list($insert, $deleted) = xm_update_liked_tieba($xuid);
        $data['msg'] = "喜欢的贴吧列表已经更新,新增{$insert}个贴吧, 删除{$deleted}个贴吧";
        break;
    case 'load_xm_logs':
        $date = date('Ymd');
        $countx = DB::result_first("select count(*) from `x_multi` where `uid` = {$uid}");
        if($countx <= 0){
            $data ['msgx'] = 1;
            break;
        }
        $query = DB::query("select * from `x_multi` where `uid` = {$uid}");
        $xuids = "";
        while($result = DB::fetch($query)){
            $xuid = $result['xuid'];
            $xuids .= $result['xuid'].",";
            $data['log'][$xuid]['username'] = $result['name'];
            $data['log'][$xuid]['succeed'] = 0;
            $data['log'][$xuid]['skiped'] = 0;
            $data['log'][$xuid]['waiting'] = 0;
            $data['log'][$xuid]['retry'] = 0;
            $data['log'][$xuid]['unsupport'] = 0;
        }
        $xuids = substr($xuids, 0,-1);
        $query = DB::query("SELECT `uid`, COUNT(*) FROM `sign_log` WHERE `date`='{$date}' AND `status`='2' and `uid` in ({$xuids}) GROUP BY `uid`");
        while($result = DB::fetch($query)){
            $_uid = $result['uid'];
            $data['log'][$_uid]['succeed'] = $result['COUNT(*)'];
        }
        $query = DB::query("SELECT `uid`, COUNT(*) FROM `sign_log` WHERE `date`='{$date}' AND `status`='0' and `uid` in ({$xuids}) GROUP BY `uid`");
        while($result = DB::fetch($query)){
            $_uid = $result['uid'];
            $data['log'][$_uid]['waiting'] = $result['COUNT(*)'];
        }
        $query = DB::query("SELECT `uid`, COUNT(*) FROM `sign_log` WHERE `date`='{$date}' AND `status`='1' and `uid` in ({$xuids}) GROUP BY `uid`");
        while($result = DB::fetch($query)){
            $_uid = $result['uid'];
            $data['log'][$_uid]['retry'] = $result['COUNT(*)'];
        }
        $query = DB::query("SELECT `uid`, COUNT(*) FROM `sign_log` WHERE `date`='{$date}' AND `status`='-1' and `uid` in ({$xuids}) GROUP BY `uid`");
        while($result = DB::fetch($query)){
            $_uid = $result['uid'];
            $data['log'][$_uid]['unsupport'] = $result['COUNT(*)'];
        }
        $query = DB::query("SELECT `uid`, COUNT(*) FROM `sign_log` WHERE `date`='{$date}' AND `status`='-2' and `uid` in ({$xuids}) GROUP BY `uid`");
        while($result = DB::fetch($query)){
            $_uid = $result['uid'];
            $data['log'][$_uid]['skiped'] = $result['COUNT(*)'];
        }
        break;
    case 'del_xm_id':
        $xm_id = intval($_GET['xmid']);
        $extuser = DB::fetch_first ( "select * from `x_multi` where `xmid`='{$xm_id}'" );
        DB::query ( "DELETE FROM `x_multi` WHERE `xmid`='{$xm_id}'" );
        DB::query ( "DELETE FROM `member` WHERE `uid`='{$extuser['xuid']}'" );
        DB::query ( "DELETE FROM `member_setting` WHERE `uid`='{$extuser['xuid']}'" );
        DB::query ( "DELETE FROM `my_tieba` WHERE `uid`='{$extuser['xuid']}'" );
        DB::query ( "DELETE FROM `sign_log` WHERE `uid`='{$extuser['xuid']}'" );
        $data ['msg'] = "删除成功";
        break;
    case 'load_xm_ids':
        $query = DB::query ( "SELECT * FROM `x_multi` WHERE `uid` = '{$uid}'" );
        while ($result = DB::fetch($query)) {
            $data['xmids'][] = $result;
        }
        $data ['count'] = count ( $data ['xmids'] );
        break;
    case 'add_id':
        if(empty($_POST['xm_bdid']) || empty($_POST['xm_bds'])) {
            $data ['msg'] = '缺少参数！';
            $data ['msgx'] = -1;
        } else {
            $bdid = trim($_POST['xm_bdid']);
            $bds = trim($_POST['xm_bds']);
            $parms = array($bdid, $bds, $formhash);
            $parm_string = serialize($parms);
            $parm_string = authcode($parm_string, 'ENCODE', cloud::key());
            $parm_string = bin2hex($parm_string);
            $data ['msg'] = '跳转API';
            $data ['msgx'] = 1;
            $data ['url'] = cloud::get_api_path() . "login.php?sid=" . cloud::id() . "&parm={$parm_string}&callback=plugins%2fx_multi%2fajax.php%3fv%3dcallback";
        }
        break;
    case 'add_id_m':
        header("Location: " . cloud::get_api_path() . "manual_bind.php?sid=" . cloud::id() . "&formhash={$formhash}&callback=plugins%2fx_multi%2fajax.php%3fv%3dcallback"); 
        die;
        break;
    case 'callback':
        $_cookie = !empty($_POST['cookie']) ? $_POST['cookie'] : (!empty($_GET['cookie']) ? $_GET['cookie'] : '');
        if(!$_cookie) throw new Exception('空响应');
        if(empty($_GET['formhash']) || $_GET['formhash'] != $formhash) throw new Exception('非法请求');
        if (!empty($_GET['local'])) {
            $cookie = $_cookie;
        } else {
            $cookie = authcode(pack('H*', $_cookie), 'DECODE', cloud::key());
        }
        if(empty($cookie)) showmessage('非法调用！', stristr($siteurl,'plugins',true) . '#baidu_bind', 1);
        if (!verify_cookie($cookie)) showmessage('无法登陆百度贴吧，请尝试重新绑定',stristr($siteurl,'plugins',true) . '#x_multi-index',5);

        function textMiddle($text, $left, $right) {
            $loc1 = stripos($text, $left);
            if (is_bool($loc1)) return '';
            $loc1 += strlen($left);
            $loc2 = stripos($text, $right, $loc1);
            if (is_bool($loc2)) return '';
            return substr($text, $loc1, $loc2 - $loc1);
        }

        $ch = curl_init('https://m.baidu.com/usrprofile');
        curl_setopt($ch,CURLOPT_COOKIE, $cookie);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        $res = curl_exec($ch);
        curl_close($ch);
        $bname = textMiddle($res,'class="user-name">','</div>');
        if (empty($bname)) showmessage('获取百度昵称失败，请重试',stristr($siteurl,'plugins',true) . '#x_multi-index',5);

        $countx = DB::result_first("select count(*) from `x_multi` where `name` = '{$bname}'");
        if($countx > 0){
            showmessage('该ID已被绑定！',stristr($siteurl,'plugins',true) . '#x_multi-index',5);
        }

        $newuser = DB::fetch_first("select * from `member` where `uid`='{$uid}'");
        $xuid = DB::insert('member', array(
            'username' => $newuser['username'],
            'password' => $newuser['password'],
            'email' => $newuser['email']
        ));
        DB::insert('x_multi', array(
            'xuid' => $xuid,
            'uid' => $uid,
            'name' => $bname
        ));
        $cookie = bin2hex(str_rot13(strrev(addslashes($cookie))));
        DB::insert('member_setting', array(
            'uid' => $xuid,
            'cookie' => $cookie
        ));
        CACHE::update('username');
        xm_update_liked_tieba($xuid);
        showmessage('添加成功！',stristr($siteurl,'plugins',true) . '#x_multi-index',5);
        break;
}
echo json_encode($data);
?>