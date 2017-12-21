<?php
if (!defined('IN_KKFRAME')) exit('Access Denied');

class sendcloud extends mailer {
	var $id = 'sendcloud';
	var $name = 'SendCloud';
	var $description = '通过 <a href="https://www.sendcloud.net" target="_blank">SendCloud</a> 代发邮件，无需 SMTP 支持 - Vrsion: v1.0.0';
	var $config = array(
		array('API_USER', 'api_user', '', ''),
		array('API_KEY', 'api_key', '', '', ''),
		array('发件人邮箱', 'mail', '', 'system@hydd.cc', 'email'),
		array('发件人昵称', 'user', '', '学园云签到', '')
	);

	function isAvailable() {
		return function_exists('curl_init');
	}

	function post($data) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://api.sendcloud.net/apiv2/mail/send');
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		$result = curl_exec($ch);
		
		if($result === false) {
            echo curl_error($ch);
        }
		
		curl_close($ch);
		return $result;
	}

	function send($mail) {
		$data = array(
			'apiUser' => $this->_get_setting('api_user'),
			'apiKey' => $this->_get_setting('api_key'),
			'from' => $this->_get_setting('mail'),
			'fromName' => $this->_get_setting('user'),
			'to' => $mail->address,
			'subject' => $mail->subject,
			'html' => $mail->message
		);
		$sendresult = json_decode($this -> post($data), true);
		if ($sendresult['err_no']==0) return true;
		return false;
	}
}

?>