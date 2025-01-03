<?php
if (!defined('IN_KKFRAME')) exit();

function readCookies($str) {
    preg_match("/set\-cookie:([^\r\n]*)/i", $str, $m1);
    if (!empty($m1)) {
        preg_match_all("/(.*?)=(.*?);/", $m1[1], $m2, PREG_SET_ORDER);
        $r = array();
        foreach ($m2 as $value) {
            $r1 = trim($value[1]);
            if ($r1 != 'expires' && $r1 != 'max-age' && $r1 != 'path' && $r1 != 'domain') {
                $r = $r1 . '=' . trim($value[2]) . '; ';
            }
        }
        return $r;
    }
}

function _get_redirect_data($url, $cookie = '') {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if (!empty($cookie)) curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    $data = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    if ($info['http_code'] == 200) {
        $body = substr($data, $info['header_size']);
        return $body;
    } elseif ($info['http_code'] == 301 || $info['http_code'] == 302) {
        $header = substr($data, 0, $info['header_size']);
        $cookie .= readCookies($header);
        $url =  $info['redirect_url'];
        return _get_redirect_data($url, $cookie);
    }
}

function is_admin($uid) {
    return in_array($uid, explode(',', getSetting('admin_uid')));
}
function is_email($string) {
    return preg_match('/^[A-z0-9._-]+@[A-z0-9._-]+\.[A-z0-9._-]+$/', $string);
}
function dsetcookie($name, $value = '', $exp = 2592000) {
    $exp = $value ? TIMESTAMP + $exp : '1';
    setcookie($name, $value, $exp, '/');
}
function daddslashes($string, $force = 0, $strip = FALSE) {
    if (!defined('MAGIC_QUOTES_GPC')) {
        define('MAGIC_QUOTES_GPC', function_exists('get_magic_quotes_gpc') ? get_magic_quotes_gpc() : FALSE);
    }
    if (!MAGIC_QUOTES_GPC || $force) {
        if (is_array($string)) {
            foreach ($string as $key => $val) {
                $string[$key] = daddslashes($val, $force, $strip);
            }
        } else {
            $string = addslashes($strip ? stripslashes($string) : $string);
        }
    }
    return $string;
}
function template($file) {
    global $template_loaded;
    $template_loaded = false;
    HOOK::run(str_replace('/', '_', "template_load_{$file}"));
    $template_name = defined('IN_ADMINCP') ? 'default' : getSetting('template');
    if (IN_MOBILE) {
        $mobilefile = ROOT . "./template/{$template_name}/mobile/{$file}.php";
        if (file_exists($mobilefile)) return $mobilefile;
        $mobilefile_default = ROOT . "./template/default/mobile/{$file}.php";
        if (file_exists($mobilefile_default)) return $mobilefile_default;
    }
    $path = ROOT . "./template/{$template_name}/{$file}.php";
    if (file_exists($path)) return $path;
    $path = ROOT . "./template/default/{$file}.php";
    if (file_exists($path)) return $path;
    error::system_error("Missing template '{$file}'.");
}
function dgmdate($timestamp, $d_format = 'Y-m-d H:i') {
    $timestamp += 8 * 3600;
    $todaytimestamp = TIMESTAMP - (TIMESTAMP + 8 * 3600) % 86400 + 8 * 3600;
    $s = gmdate($d_format, $timestamp);
    $time = TIMESTAMP + 8 * 3600 - $timestamp;
    if ($timestamp >= $todaytimestamp) {
        if ($time > 3600) {
            return '<span title="' . $s . '">' . intval($time / 3600) . '&nbsp;小时前</span>';
        } elseif ($time > 1800) {
            return '<span title="' . $s . '">半小时前</span>';
        } elseif ($time > 60) {
            return '<span title="' . $s . '">' . intval($time / 60) . '&nbsp;分钟前</span>';
        } elseif ($time > 0) {
            return '<span title="' . $s . '">' . $time . '&nbsp;秒前</span>';
        } elseif ($time == 0) {
            return '<span title="' . $s . '">刚刚</span>';
        } else {
            return $s;
        }
    } elseif (($days = intval(($todaytimestamp - $timestamp) / 86400)) >= 0 && $days < 7) {
        if ($days == 0) {
            return '<span title="' . $s . '">昨天&nbsp;' . gmdate('H:i', $timestamp) . '</span>';
        } elseif ($days == 1) {
            return '<span title="' . $s . '">前天&nbsp;' . gmdate('H:i', $timestamp) . '</span>';
        } else {
            return '<span title="' . $s . '">' . ($days + 1) . '&nbsp;天前</span>';
        }
    } else {
        return $s;
    }
}
function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
    $ckey_length = 4;
    $key = md5($key ? $key : ENCRYPT_KEY);
    $keya = md5(substr($key, 0, 16));
    $keyb = md5(substr($key, 16, 16));
    $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';
    $cryptkey = $keya . md5($keya . $keyc);
    $key_length = strlen($cryptkey);
    $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;
    $string_length = strlen($string);
    $result = '';
    $box = range(0, 255);
    $rndkey = array();
    for ($i = 0; $i <= 255; $i++) {
        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
    }
    for ($j = $i = 0; $i < 256; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    for ($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }
    if ($operation == 'DECODE') {
        if ((substr($result, 0, 10) == 0 || floatval(substr($result, 0, 10)) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {
            return substr($result, 26);
        } else {
            return '';
        }
    } else {
        return $keyc . str_replace('=', '', base64_encode($result));
    }
}
function showmessage($msg = '', $redirect = '', $delay = 3) {
    if ($_GET['format'] == 'json') {
        $result = array('msg' => $msg, 'redirect' => $redirect, 'delay' => $delay);
        echo json_encode($result);
        exit();
    } else {
        $delay = $delay * 1000;
        $redirect = ($redirect == '-1') ? 'history.back()' : "window.location.href = '{$redirect}'";
        $redirect = "javascript:{$redirect}";
    }
    include template('message');
    exit();
}
function random($length, $numeric = 0) {
    $seed = base_convert(md5(microtime() . $_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
    $seed = $numeric ? (str_replace('0', '', $seed) . '012340567890') : ($seed . 'zZ' . strtoupper($seed));
    $hash = '';
    $max = strlen($seed) - 1;
    for ($i = 0; $i < $length; $i++) {
        $hash .= $seed[mt_rand(0, $max)];
    }
    return $hash;
}
function dreferer() {
    return $_SERVER['HTTP_REFERER'] && !strexists($_SERVER['HTTP_REFERER'], 'member') ? $_SERVER['HTTP_REFERER'] : './';
}
function strexists($string, $find) {
    return !(strpos($string, $find) === FALSE);
}
function cutstr($string, $length, $dot = ' ...') {
    if (strlen($string) <= $length) return $string;
    $pre = chr(1);
    $end = chr(1);
    $string = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array($pre . '&' . $end, $pre . '"' . $end, $pre . '<' . $end, $pre . '>' . $end), $string);
    $strcut = '';
    $n = $tn = $noc = 0;
    while ($n < strlen($string)) {
        $t = ord($string[$n]);
        if ($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
            $tn = 1;
            $n++;
            $noc++;
        } elseif (194 <= $t && $t <= 223) {
            $tn = 2;
            $n += 2;
            $noc += 2;
        } elseif (224 <= $t && $t <= 239) {
            $tn = 3;
            $n += 3;
            $noc += 2;
        } elseif (240 <= $t && $t <= 247) {
            $tn = 4;
            $n += 4;
            $noc += 2;
        } elseif (248 <= $t && $t <= 251) {
            $tn = 5;
            $n += 5;
            $noc += 2;
        } elseif ($t == 252 || $t == 253) {
            $tn = 6;
            $n += 6;
            $noc += 2;
        } else {
            $n++;
        }
        if ($noc >= $length) break;
    }
    if ($noc > $length) $n -= $tn;
    $strcut = substr($string, 0, $n);
    $strcut = str_replace(array($pre . '&' . $end, $pre . '"' . $end, $pre . '<' . $end, $pre . '>' . $end), array('&amp;', '&quot;', '&lt;', '&gt;'), $strcut);
    $pos = strrpos($strcut, chr(1));
    if ($pos !== false) $strcut = substr($strcut, 0, $pos);
    return $strcut . $dot;
}
function wrap_text($str) {
    $str = trim($str);
    $str = str_replace("\t", '', $str);
    $str = str_replace("\r", '', $str);
    $str = str_replace("\n", '', $str);
    $str = str_replace(' ', '', $str);
    return trim($str);
}
function get_cookie($uid) {
    static $cookie = array();
    if ($cookie[$uid]) return $cookie[$uid];
    $cookie[$uid] = DB::result_first("SELECT cookie FROM member_setting WHERE uid='{$uid}'");
    $cookie[$uid] = strrev(str_rot13(pack('H*', $cookie[$uid])));
    if (substr(trim($cookie[$uid]), -1) != ';') $cookie[$uid] .= ';';
    return $cookie[$uid];
}
function save_cookie($uid, $cookie) {
    if (substr(trim($cookie), -1) != ';') $cookie += ';';
    $cookie = bin2hex(str_rot13(strrev(addslashes($cookie))));
    DB::query("UPDATE member_setting SET cookie='{$cookie}' WHERE uid='{$uid}'");
}
function get_username($uid) {
    static $username = array();
    if ($username[$uid]) return $username[$uid];
    $username = CACHE::get('username');
    return $username[$uid];
}
function get_setting($uid) {
    static $user_setting = array();
    if (!empty($user_setting[$uid])) return $user_setting[$uid];
    $cached_result = CACHE::get('user_setting_' . $uid);
    if (empty($cached_result)) {
        $cached_result = DB::fetch_first("SELECT * FROM member_setting WHERE uid='{$uid}'");
        unset($cached_result['cookie']);
        CACHE::save('user_setting_' . $uid, $cached_result);
    }
    return $user_setting[$uid] = $cached_result;
}
function getSetting($k, $force = false) {
    if ($force) return $setting[$k] = DB::result_first("SELECT v FROM setting WHERE k='{$k}'");
    $cache = CACHE::get('setting');
    return $cache[$k];
}
function saveSetting($k, $v) {
    if (!defined('IN_XAE') && $k == 'version') return saveVersion($v);
    static $cache_cleaned = false;
    $v = addslashes($v);
    DB::query("REPLACE INTO setting SET v='{$v}', k='{$k}'");
    if ($cache_cleaned) return;
    CACHE::clean('setting');
    $cache_cleaned = true;
}
function runquery($sql) {
    $sql = str_replace("\r", "\n", $sql);
    foreach (explode(";\n", trim($sql)) as $query) {
        $query = trim($query);
        if ($query) DB::query($query);
    }
}
function jquery_path() {
    $path = defined('IN_ADMINCP') ? 'builtin' : getSetting('jquery_mode');
    switch ($path) {
        case 'google':
            return '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js?version=' . VERSION;
        case 'microsoft':
            return '//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js?version=' . VERSION;
        case 'cloudflare':
            return '//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js?version=' . VERSION;
        case 'jsdelivr':
            return '//cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js?version=' . VERSION;
        case 'lug-ustc':
            return '//ajax.proxy.ustclug.org/ajax/libs/jquery/1.12.4/jquery.min.js?version=' . VERSION;
        case 'builtin':
        default:
            return 'system/js/jquery.min.js?version=' . VERSION;
    }
}
function kk_fetch_url($url, $post = '', $cookie = '', $timeout = 15) {
    if (function_exists('curl_init') && function_exists('curl_exec')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, False);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, False);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, True);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);

        if (!empty($post)) {
            if (is_array($post)) {
                $post = http_build_query($post);
            }
            curl_setopt($ch, CURLOPT_POST, True);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }

        if (!empty($cookie)) {
            curl_setopt($ch, CURLOPT_COOKIE, $cookie);
        }

        $data = curl_exec($ch);
        $status = curl_getinfo($ch);
        $errno = curl_errno($ch);
        curl_close($ch);

        if ($errno || $status['http_code'] != 200) {
            return;
        } else {
            return $data;
        }
    } else {
        throw new Exception('服务器不支持Curl！');
    }
}
function xml2array(&$xml, $isnormal = FALSE) {
    $xml_parser = new XMLparse($isnormal);
    $data = $xml_parser->parse($xml);
    $xml_parser->destruct();
    return $data;
}
function array2xml($arr, $htmlon = TRUE, $isnormal = FALSE, $level = 1) {
    $s = $level == 1 ? "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<root>\r\n" : '';
    $space = str_repeat("\t", $level);
    foreach ($arr as $k => $v) {
        if (!is_array($v)) {
            $s .= $space . "<item id=\"$k\">" . ($htmlon ? '<![CDATA[' : '') . $v . ($htmlon ? ']]>' : '') . "</item>\r\n";
        } else {
            $s .= $space . "<item id=\"$k\">\r\n" . array2xml($v, $htmlon, $isnormal, $level + 1) . $space . "</item>\r\n";
        }
    }
    $s = preg_replace("/([\x01-\x08\x0b-\x0c\x0e-\x1f])+/", ' ', $s);
    return $level == 1 ? $s . "</root>" : $s;
}
function save_config_file() {
    global $_config;
    if (!$_config) return;
    $content = '<?php' . PHP_EOL . '/* Auto-generated config file */' . PHP_EOL . '$_config = ';
    $content .= var_export($_config, true) . ';' . PHP_EOL . '?>';
    if (!is_writable(SYSTEM_ROOT . './config.inc.php')) throw new Exception('Config file is not writable!');
    file_put_contents(SYSTEM_ROOT . './config.inc.php', $content);
}
function saveVersion($version) {
    global $_config;
    if (!$_config) return;
    $_config['version'] = $version;
    save_config_file();
}
function mklink($sourceFile, $targetFile) {
    return @file_put_contents($targetFile, '<?php @include ' . var_export($sourceFile, true) . '; ?>');
}
function cron_set_nextrun($timestamp) {
    if (!defined('CRON_ID')) throw new Exception('Unknown cron id');
    $timestamp = intval($timestamp);
    DB::query("UPDATE cron SET nextrun='{$timestamp}' WHERE id='" . addslashes(CRON_ID) . "'");
    $nextrun = DB::fetch_first("SELECT nextrun FROM cron ORDER BY nextrun ASC LIMIT 0,1");
    saveSetting('next_cron', $nextrun ? $nextrun['nextrun'] : TIMESTAMP + 1200);
}
// Function link
function get_tbs($uid) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _get_tbs($uid);
}
function verify_cookie($cookie) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _verify_cookie($cookie);
}
function get_baidu_userinfo($uid) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _get_baidu_userinfo($uid);
}
function client_sign($uid, $tieba) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _client_sign($uid, $tieba);
}
function zhidao_sign($uid) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _zhidao_sign($uid);
}
function wenku_sign($uid) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _wenku_sign($uid);
}
function update_liked_tieba($uid, $ignore_error = false, $allow_deletion = true) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _update_liked_tieba($uid, $ignore_error, $allow_deletion);
}
function get_liked_tieba($cookie, $ignore_error = false) {
    require_once SYSTEM_ROOT . './function/sign.php';
    return _get_liked_tieba($cookie, $ignore_error);
}
function do_login($uid) {
    require_once SYSTEM_ROOT . './function/member.php';
    _do_login($uid);
}
function do_register($username, $password, $email) {
    require_once SYSTEM_ROOT . './function/member.php';
    return _do_register($username, $password, $email);
}
function delete_user($uid) {
    require_once SYSTEM_ROOT . './function/member.php';
    _delete_user($uid);
}
