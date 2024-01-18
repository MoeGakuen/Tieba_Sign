<?php
if (!defined('IN_KKFRAME')) exit('Access Denied');
DB::query("DELETE FROM `setting` WHERE `k` = 'channel';");
saveSetting('version', '1.14.6.8');
showmessage('成功更新到 1.14.6.8！', './');
