<?php
if(!defined('IN_KKFRAME')) exit('Access Denied');
DB::query("DROP TABLE IF EXISTS `process`;");
saveSetting('version', '1.14.6.7');
showmessage('成功更新到 1.14.6.7！', './');
