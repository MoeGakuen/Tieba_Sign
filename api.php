<?php
define('DISABLE_PLUGIN', true);
require_once './system/common.inc.php';

if (!$uid) {
    header('Location: member.php');
    exit();
}

if (empty($_GET['action'])) throw new Exception('缺少参数');
if ($_GET['action'] == 'baidu_login_qrcode') {
    $parms = array($formhash);
    $parm_string = serialize($parms);
    $parm_string = authcode($parm_string, 'ENCODE', cloud::key());
    $parm_string = bin2hex($parm_string);
    header('Location: ' . cloud::get_api_path() . 'login.php?sid=' . cloud::id() . '&parm=' . $parm_string);
} elseif ($_GET['action'] == 'register_cloud') {
    cloud::do_register();
} elseif ($_GET['action'] == 'receive_cookie') {
    $_cookie = !empty($_POST['cookie']) ? trim($_POST['cookie']) : (!empty($_GET['cookie']) ? trim($_GET['cookie']) : '');
    if (!$_cookie) throw new Exception('空响应');
    if (empty($_GET['formhash']) || $_GET['formhash'] != $formhash) throw new Exception('非法请求');
    if (!empty($_GET['local'])) {
        $cookie = $_cookie;
    } else {
        $cookie = authcode(pack('H*', $_cookie), 'DECODE', cloud::key());
    }

    $cookie = preg_replace_callback('/\b(\w+)=/', function ($matches) {
        return strtoupper($matches[1]) . '=';
    }, $cookie);

    if (empty($cookie)) showmessage('非法调用！', './#baidu_bind', 1);
    if (!verify_cookie($cookie)) showmessage('无法登陆百度贴吧，请尝试重新绑定', '-1');
    save_cookie($uid, $cookie);
    showmessage('绑定百度账号成功！<br>正在同步喜欢的贴吧...<script type="text/javascript" src="index.php?action=refresh_liked_tieba&formhash=' . $formhash . '"></script><script type="text/javascript">try{ opener.$("#guide_page_2").hide(); opener.$("#guide_page_manual").hide(); opener.$("#guide_page_3").show(); window.close(); }catch(e){}</script>', './#baidu_bind', 3);
}
