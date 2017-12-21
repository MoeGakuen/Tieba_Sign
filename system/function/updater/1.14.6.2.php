<?php
if(!defined('IN_KKFRAME')) exit('Access Denied');

DB::query("ALTER TABLE `member` MODIFY `password` VARCHAR(255)");
DB::query("UPDATE `setting` SET `k`='jquery_mode', `v`='builtin' WHERE (`k`='jquery_mode')");

saveSetting('version', '1.14.6.3');
showmessage('成功更新到 1.14.6.3！', './');
