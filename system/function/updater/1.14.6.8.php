<?php
if (!defined('IN_KKFRAME')) exit('Access Denied');
DB::query("DELETE FROM `setting` WHERE `k` = 'multi_thread';");
saveSetting('version', '1.14.6.9');
showmessage('成功更新到 1.14.6.9！', './');
