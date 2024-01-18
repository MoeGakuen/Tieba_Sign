<?php
set_time_limit(55);
@chdir(dirname(__FILE__));
require_once './system/common.inc.php';
$pass = !empty($_GET['pw']) ? trim($_GET['pw']) : '';
$word = getSetting('cron_pass');
if ($pass != $word) {
    echo '[' . date('Y-n-j G:i:s') . '] [Error]' . PHP_EOL;
    exit();
} else {
    define('SIGN_LOOP', true);
    define('ENABLE_CRON', true);
    echo '[' . date('Y-n-j G:i:s') . '] [Info] ';
}
