<?php
if (!defined('IN_KKFRAME')) exit('Access Denied');

class smtp extends mailer {
    var $id = 'smtp';
    var $name = 'SMTP - Socket';
    var $description = '通过 Socket 连接 SMTP 服务器发邮件 - Vrsion: v2.0';
    var $config = array(
        array('SMTP 服务器地址', 'server', '', ''),
        array('SMTP 服务器端口', 'port', '', '465', 'number'),
        array('SMTP 用户名', 'name', '', ''),
        array('SMTP 密码', 'pass', '', '', 'password'),
        array('发送者名称', 'fromname', '', '贴吧签到助手'),
        array('发送者邮箱', 'address', '一般与用户名一致', '', 'email'),
        array('DKIM 标识符', 'selector', 'DMKI 公钥子域', '', '')
    );

    function isAvailable() {
        return !isset($_SERVER['HTTP_APPVERSION']) && $_SERVER['USER'] != 'bae';
    }

    function send($mail) {
        $smtp = new _smtp($this);
        $smtp->to($mail->address);
        $smtp->subject($mail->subject);
        $smtp->message($mail->message);
        return $smtp->send();
    }
}

class _smtp {
    // connection
    protected $connection;
    protected $localhost = 'localhost';
    protected $timeout = 30;
    protected $debug_mode = FALSE;
    // auth
    protected $smtpServer;
    protected $smtpPort;
    protected $secure; // null, 'ssl', or 'tls'
    protected $auth; // 如果需要验证，改为 True
    protected $smtpName;
    protected $smtpPass;
    // email
    protected $to = []; // 收信人
    protected $cc = []; // 抄送人
    protected $bcc = []; // 密送人
    protected $fromname; // 发送人名称
    protected $address; // 发送人地址
    protected $from; // 发送人
    protected $message; // 内容
    protected $subject; // 标题
    protected $dkimSelector; // DKIM 公钥子域
    protected $domain; // 邮件域名
    // misc
    protected $charset = 'UTF-8';
    protected $newline = "\r\n";
    protected $encoding = '7bit';

    public function __construct($obj) {
        $this->smtpServer = $obj->_get_setting('server');
        $this->smtpPort = $obj->_get_setting('port');
        $this->secure = ($this->smtpPort == 465) ? 'ssl' : '';
        $this->auth = TRUE;
        $this->smtpName = $obj->_get_setting('name');
        $this->smtpPass = $obj->_get_setting('pass');
        $this->fromname = $obj->_get_setting('fromname');
        $this->address = $obj->_get_setting('address');
        $this->dkimSelector = $obj->_get_setting('selector');
        $this->domain = end(explode('@', $this->address));
        $this->from();
    }

    public function from() {
        $this->from = array(
            'email' => $this->address,
            'name' => $this->fromname
        );
    }

    public function to($email, $name = null) {
        $this->to[] = array(
            'email' => $email,
            'name' => $name
        );
    }

    public function cc($email, $name = null) {
        $this->cc[] = array(
            'email' => $email,
            'name' => $name
        );
    }

    public function bcc($email, $name = null) {
        $this->bcc[] = array(
            'email' => $email,
            'name' => $name
        );
    }

    public function subject($subject) {
        $this->subject = $subject;
    }

    public function message($html) {
        $this->message = $html;
    }

    public function send() {
        if ($this->smtp_connect()) {
            if ($this->smtp_deliver()) {
                $result = true;
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }
        $this->smtp_disconnect();
        return $result;
    }

    protected function smtp_connect() {
        if ($this->secure === 'ssl') $this->smtpServer = 'ssl://' . $this->smtpServer;
        $this->connection = fsockopen($this->smtpServer, $this->smtpPort, $errno, $errstr, $this->timeout);
        if ($this->code() !== 220) return false;
        $this->request(($this->auth ? 'EHLO' : 'HELO') . ' ' . $this->localhost . $this->newline);
        $this->response();
        if ($this->secure === 'tls') {
            $this->request('STARTTLS' . $this->newline);
            if ($this->code() !== 220) return false;
            stream_socket_enable_crypto($this->connection, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
            $this->request(($this->auth ? 'EHLO' : 'HELO') . ' ' . $this->localhost . $this->newline);
            if ($this->code() !== 250) return false;
        }
        if ($this->auth) {
            $this->request('AUTH LOGIN' . $this->newline);
            if ($this->code() !== 334) return false;
            $this->request(base64_encode($this->smtpName) . $this->newline);
            if ($this->code() !== 334) return false;
            $this->request(base64_encode($this->smtpPass) . $this->newline);
            if ($this->code() !== 235) return false;
        }
        return true;
    }

    protected function smtp_deliver() {
        $this->request('MAIL FROM: <' . $this->from['email'] . '>' . $this->newline);
        $this->response();
        $recipients = array_merge($this->to, $this->cc, $this->bcc);
        foreach ($recipients as $r) {
            $this->request('RCPT TO: <' . $r['email'] . '>' . $this->newline);
            $this->response();
        }
        $this->request('DATA' . $this->newline);
        $this->response();
        $this->request($this->smtp_construct());
        if ($this->code() === 250) {
            return true;
        } else {
            return false;
        }
    }

    protected function smtp_construct() {
        $boundary = md5(uniqid(time()));
        $headers[] = 'From: ' . $this->format($this->from);
        $headers[] = 'Subject: ' . $this->subject;
        $headers[] = 'Date: ' . date('r');

        $msgId = random(8) . '-' . random(4) . '-' . random(4) . '-' . random(4) . '-' . random(12);
        $headers[] = "Message-ID: <{$msgId}@{$this->domain}>";

        if (!empty($this->dkimSelector)) {
            $headers[] = "DKIM-Signature: v=1; a=rsa-sha256; d={$this->domain}; s={$this->dkimSelector}; c=relaxed/simple; q=dns/txt; t=" . time() . "; h=From : Subject : Date : Message-ID : MIME-Version : To : CC : Content-Type : Content-Transfer-Encoding; bh=" . base64_encode(hash('sha256', $this->message, true)) . "; b=";
        }

        if (!empty($this->to)) {
            $string = '';
            foreach ($this->to as $r) $string .= $this->format($r) . ', ';
            $string = substr($string, 0, -2);
            $headers[] = 'To: ' . $string;
        }

        if (!empty($this->cc)) {
            $string = '';
            foreach ($this->cc as $r) $string .= $this->format($r) . ', ';
            $string = substr($string, 0, -2);
            $headers[] = 'CC: ' . $string;
        }

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-Type: multipart/mixed; boundary="' . $boundary . '"';
        $headers[] = '';
        $headers[] = 'This is a multi-part message in MIME format.';
        $headers[] = '--' . $boundary;

        $headers[] = 'Content-Type: text/html; charset="' . $this->charset . '"';
        $headers[] = 'Content-Transfer-Encoding: ' . $this->encoding;
        $headers[] = '';
        $headers[] = $this->message;
        $headers[] = '--' . $boundary;

        $headers[sizeof($headers) - 1] .= '--';
        $headers[] = '.';

        $email = '';
        foreach ($headers as $header) {
            $email .= $header . $this->newline;
        }
        return $email;
    }

    protected function smtp_disconnect() {
        $this->request('QUIT' . $this->newline);
        $this->response();
        fclose($this->connection);
    }

    protected function code() {
        return (int)substr($this->response(), 0, 3);
    }

    protected function request($string) {
        if ($this->debug_mode) echo '<code><strong>' . $string . '</strong></code><br/>';
        fputs($this->connection, $string);
    }

    protected function response() {
        $response = '';
        while ($str = fgets($this->connection, 4096)) {
            $response .= $str;
            if (substr($str, 3, 1) === ' ') break;
        }
        if ($this->debug_mode) echo '<code>' . $response . '</code><br/>';
        return $response;
    }

    protected function format($recipient) {
        // 格式 "name <email>"
        if ($recipient['name']) {
            return $recipient['name'] . ' <' . $recipient['email'] . '>';
        } else {
            return '<' . $recipient['email'] . '>';
        }
    }

    public function __destruct() {
        if (is_resource($this->connection)) smtp_disconnect();
    }
}
