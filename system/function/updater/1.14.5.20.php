<?php
if(!defined('IN_KKFRAME')) exit('Access Denied');
DB::query('DROP TABLE update_source');
saveSetting('version', '1.14.5.27');
showmessage('成功更新到 1.14.5.27！', './');
?>