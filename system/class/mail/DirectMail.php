<?php
if (!defined('IN_KKFRAME')) exit('Access Denied');

class DirectMail extends mailer
{
    var $id = 'DirectMail';
    var $name = 'DirectMail';
    var $description = '通过阿里云邮件推送，无需 SMTP 支持 - Vrsion: v1.1.0';
    var $config = array(
        array('Access Key', 'accessKey', '', 'yourAccessKey', ''),
        array('Access Secret', 'accessSecret', '', 'yourAccessSecret', ''),
        array('发信地址', 'accountName', '', 'system@hydd.cc', 'email'),
        array('发件人昵称', 'alias', '', '学园云签到', '')
    );

    function isAvailable()
    {
        return true;
    }

    function send($mail)
    {
        $data = [
            'Format' => 'json',
            'Version' => '2015-11-23',
            'AccessKeyId' => $this->_get_setting('accessKey'),
            'SignatureMethod' => 'HMAC-SHA1',
            'Timestamp' => gmdate('Y-m-d\TH:i:s\Z'),
            'SignatureVersion' => '1.0',
            'SignatureNonce' => md5(uniqid(mt_rand(), true)),
            'Action' => 'SingleSendMail',
            'AccountName' => $this->_get_setting('accountName'),
            'ReplyToAddress' => 'true',
            'AddressType' => 1,
            'ToAddress' => $mail->address,
            'FromAlias' => $this->_get_setting('alias'),
            'Subject' => $mail->subject,
            'HtmlBody' => $mail->message,
        ];
        $data["Signature"] = $this->computeSignature($data, $this->_get_setting('accessSecret'));
        $content = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query(array_merge($data))
            ]
        ]);
        return file_get_contents('http://dm.aliyuncs.com/', null, $content);
    }

    function computeSignature($parameters, $accessKeySecret)
    {
        ksort($parameters);
        $canonicalizedQueryString = '';
        foreach ($parameters as $key => $value) {
            $canonicalizedQueryString .= '&' . $this->percentEncode($key) . '=' . $this->percentEncode($value);
        }
        $stringToSign = 'POST' . '&%2F&' . $this->percentEncode(substr($canonicalizedQueryString, 1));
        $signature = base64_encode(hash_hmac('sha1', $stringToSign, $accessKeySecret . '&', true));

        return $signature;
    }

    function percentEncode($str)
    {
        $res = urlencode($str);
        $res = preg_replace('/\+/', '%20', $res);
        $res = preg_replace('/\*/', '%2A', $res);
        $res = preg_replace('/%7E/', '~', $res);
        return $res;
    }
}

?>
