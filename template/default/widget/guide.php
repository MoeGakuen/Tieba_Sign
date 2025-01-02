<?php
if (!defined('IN_KKFRAME')) exit();
?>
<h2>贴吧签到助手 配置向导</h2>
<div id="guide_pages">
    <div id="guide_page_1"><br>
        <p>Hello，欢迎使用 贴吧签到助手~</p><br>
        <p><b>这是一款免费软件，作者 kookxiang</b></p>
        <p>如果有人向您兜售本程序，麻烦您给个差评。</p><br>
        <p>配置签到助手之后，我们会在每天的 0:30 左右开始为您自动签到。</p>
        <p>签到过程不需要人工干预。</p><br>
        <p>准备好了吗？点击下面的“下一步”按钮开始配置吧</p>
        <p class="btns"><button class="btn submit" onclick="$('#guide_page_1').hide();$('#guide_page_2').show();">下一步 &raquo;</button></p>
    </div>
    <div id="guide_page_2" class="hidden"><br>
        <p>首先，你需要绑定你的百度账号。</p><br>
        <p>为了确保账号安全，我们只储存你的百度 Cookie，不会保存你的账号密码信息。</p>
        <p>你可以通过修改密码的方式来让这些 Cookie 失效。</p><br>
        <p>温馨提示：一个用户只能绑定一个百度帐号！</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;绑定新的百度帐号将掩盖原来的帐号信息！</p><br>
        <style>
            .bind_mode .extension_info {
                padding: 10px 15px;
                margin: 0 5px 10px 20px;
                background: #f5f5f555;
                border: 1px solid #ddd;
            }
        </style>
        <div class="bind_mode">
            <p><label><input type="radio" name="bind_mode" value="auto" checked> 通过 API 扫码获取 Cookie 绑定</label></p>
            <form method="post" class="extension_info" action="api.php?action=baidu_login_qrcode" target="_blank">
                <p><input type="submit" class="btn" value="前往绑定" />
            </form>
        </div>
        <div class="bind_mode">
            <p><label><input type="radio" name="bind_mode" value="manual"> 手动填写 Cookie 绑定</label></p>
            <form method="post" class="extension_info hidden" action="api.php?action=receive_cookie&local=1&formhash=<?php echo $formhash; ?>">
                <p>请填写完整的 Cookie 信息，格式如: BDUSS=xxx...; PTOKEN=xxx...</p>
                <p><input id="cookie" name="cookie" type="text" placeholder="Cookie 信息">
                    <input type="submit" value="确定">
                </p>
            </form>
        </div>
    </div>
    <div id="guide_page_manual" class="hidden"></div>
    <div id="guide_page_3" class="hidden">
        <p>一切准备就绪~</p><br>
        <p>我们已经成功接收到你百度账号信息，自动签到已经准备就绪。</p>
        <p>您可以点击 <a href="#setting">高级设置</a> 更改邮件设定，或更改其他附加设定。</p>
        <p>建议您<b>30</b>天后来更新您的百度账号<b>Cookie</b></p>
        <br>
        <p>感谢您的使用！</p><br>
        <p>程序作者：kookxiang</p>
        <p>更新优化：Gakuen (<a href="http://gakuen.me" target="_blank">http://gakuen.me</a>)</p>
    </div>
</div>
