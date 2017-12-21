<?php
if(!defined('IN_KKFRAME')) exit();
?>
<h2>贴吧签到助手 配置向导</h2>
<div id="guide_pages">
<div id="guide_page_1"><br>
<p>Hello，欢迎使用 贴吧签到助手~</p><br>
<p><b>这是一款免费软件，作者 <a href="http://www.ikk.me" target="_blank">kookxiang</a>，你可以从 www.kookxiang.com 上下载到这个项目的最新版本。</b></p>
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
<p>温馨提示：只能使用百度账号绑定邮箱登陆！</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一个用户只能绑定一个百度帐号！绑定新的百度帐号将掩盖原来的帐号信息！</p><br>
<style>
.bind_mode .extension_info { padding: 10px 15px; margin: 0 5px 10px 20px; background: #f5f5f555; border: 1px solid #ddd; }
</style>
<div class="bind_mode">
<p><label><input type="radio" name="bind_mode" value="auto" checked> 通过 API 一键获取 Cookie 绑定</label></p>
<form method="post" class="extension_info" action="api.php?action=baidu_login" target="_blank">
<p>百度通行证：<input type="text" name="username" placeholder="手机/邮箱/用户名" required /></p>
<p>通行证密码：<input type="password" name="password" placeholder="百度通行证密码" required /></p>
<p><input type="submit" class="btn" value="绑定百度账号" />
</form>
</div>
<div class="bind_mode">
<p><label><input type="radio" name="bind_mode" value="manual"> 手动填写 Cookie 绑定</label></p>
<form method="post" class="extension_info hidden" action="api.php?action=receive_cookie&local=1&formhash=<?php echo $formhash; ?>">
<p>请填写完整的 Cookie 信息，格式如: BDUSS=xxxxxxxxxxxxx; BAIDUID=...</p>
<p><input id="cookie" name="cookie" type="text" placeholder="Cookie 信息" required />
<input type="submit" value="确定" />
</p>
</form>
</div>
</div>
<div id="guide_page_manual" class="hidden"></div>
<div id="guide_page_3" class="hidden">
<p>一切准备就绪~</p><br>
<p>我们已经成功接收到你百度账号信息，自动签到已经准备就绪。</p>
<p>您可以点击 <a href="#setting">高级设置</a> 更改邮件设定，或更改其他附加设定。</p><br>
<p>感谢您的使用！</p><br>
<p>程序作者：kookxiang (<a href="http://www.ikk.me" target="_blank">http://www.ikk.me</a>)</p>
<p>更新优化：Gakuen (<a href="http://gakuen.me" target="_blank">http://gakuen.me</a>)</p>
<p>赞助开发：<a href="http://go.ikk.me/donate" target="_blank">http://go.ikk.me/donate</a> (你的支持就是我的动力)</p>
<p>建议您30天后来更新您的百度账号cookie
<script type="text/javascript">
var __qqClockShare = {
   content: "您的贴吧签到助手 http://<?php echo $_SERVER["HTTP_HOST"];?>/ 百度账号cookie有失效风险，请重新登陆绑定！",
   time: "<?php echo date('Y-m-d H:m',time()+30*24*3600); ?>",
   advance: 5,
   url: "http://<?php echo $_SERVER["HTTP_HOST"];?>/",
   icon: "2_1"
};
document.write('<a href="//qzs.qq.com/snsapp/app/bee/widget/open.htm#content=' + encodeURIComponent(__qqClockShare.content) +'&time=' + encodeURIComponent(__qqClockShare.time) +'&advance=' + __qqClockShare.advance +'&url=' + encodeURIComponent(__qqClockShare.url) + '" target="_blank"><img src="//i.gtimg.cn/snsapp/app/bee/widget/img/' + __qqClockShare.icon + '.png" style="border:0px;"/></a>');
</script></p>
</div>
</div>
