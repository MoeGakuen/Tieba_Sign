<?php
@chdir(dirname(__FILE__));
require_once './system/common.inc.php';
$pass = !empty($_GET['pw']) ? trim($_GET['pw']) : '';
if (defined('SAE_ACCESSKEY')) {
    $word = 'password'; //SAE用户请在此改动密码并在config.yaml中改写第七行pw的设置保证和此处一样
} else {
    $word = getSetting('cron_pass');
}
if ($pass != $word) {
    echo '[' . date('Y-n-j G:i:s') . '] [Error]';
    exit();
} else {
    define('SIGN_LOOP', true);
    define('ENABLE_CRON', true);
    echo '[' . date('Y-n-j G:i:s') . '] [Info] ';
}
