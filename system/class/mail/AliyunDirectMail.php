<?php
if (!defined('IN_KKFRAME')) exit('Access Denied');

class aliyunDirectMail extends mailer
{
    var $id = 'DirectMail';
    var $name = 'DirectMail';
    var $description = '通过阿里云邮件推送，无需 SMTP 支持 - Vrsion: v0.0.1';
    var $config = array(
        array('Access Key', 'accessKey', '', 'yourAccessKey', ''),
        array('Access Secret', 'accessSecret', '', 'yourAccessSecret', ''),
        array('发信地址', 'accountName', '', 'system@hydd.cc', 'email'),
        array('发件人昵称', 'alias', '', '学园云签到', '')
    );

    function isAvailable()
    {
        return function_exists('curl_init');
    }

    function post($data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://dm.aliyuncs.com/');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);

        if ($result === false) {
            echo curl_error($ch);
        }

        curl_close($ch);
        return $result;
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

    function prepareValue($value)
    {
        if (is_bool($value)) {
            if ($value) {
                return "true";
            } else {
                return "false";
            }
        } else {
            return $value;
        }
    }

    function send($mail)
    {
        $AccessKeyId=$this->_get_setting('accessKey');
        $accessSecret=$this->_get_setting('accessSecret');
        $AccountName=$this->_get_setting('accountName');
        $ToAddress= $mail->address;
        $FromAlias= $this->_get_setting('alias');
        $Subject= $mail->subject;
        $HtmlBody= $mail->message;
        $apiParams = array();
        foreach ($apiParams as $key => $value) {
            $apiParams[$key] = $this->prepareValue($value);
        }
        $apiParams["Format"] = 'json';
        $apiParams["Version"] = '2015-11-23';
        $apiParams["AccessKeyId"] = $AccessKeyId;
        $apiParams["SignatureMethod"] = 'HMAC-SHA1';
        $apiParams["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
        $apiParams["SignatureVersion"] = '1.0';
        $apiParams["SignatureNonce"] = md5(uniqid(mt_rand(), true));
        $apiParams["Action"] = 'SingleSendMail';
        $apiParams["AccountName"] = $AccountName;
        $apiParams["ReplyToAddress"] = 'true';
        $apiParams["AddressType"] = 1;
        $apiParams["ToAddress"] =$ToAddress;
        $apiParams["FromAlias"] =$FromAlias ;
        $apiParams["Subject"] =  $Subject;
        $apiParams["HtmlBody"] = $HtmlBody;
        $apiParams["Signature"] = $this->computeSignature($apiParams, $accessSecret);
        $sendresult = json_decode($this -> post($apiParams), true);
        if ($sendresult['err_no']==0) return true;
        return false;
    }
}

?>