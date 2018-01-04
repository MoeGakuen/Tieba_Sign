<?php
if(!defined('IN_KKFRAME')) exit('Access Denied');

class phpmail extends mailer{
	var $id = 'phpmail';
	var $name = 'PHP Mail()';
	var $description = '通过 PHP 的 Mail() 函数发送邮件';
	var $config = array(
		array('发件人地址', 'from', '', 'system@domain.com'),
	);
	
	}
	function send($mail){
		
	}
}

?>