<?php
if (!defined('IN_KKFRAME')) exit();
?>
<p class="copyright"><span class="mobile_hidden">贴吧签到助手(<?php echo VERSION; ?>) - Designed</span> by <a href="http://www.ikk.me" target="_blank">kookxiang</a>. 2014-<?php echo date('Y', time()); ?> &copy; <a href="http://gakuen.me" target="_blank">Gakuen</a> &amp; <a href="http://www.kookxiang.com" target="_blank">KK's Laboratory</a> - <a href="http://go.ikk.me/donate" target="_blank">赞助开发</a><?php if (getSetting('beian_no')) echo ' | <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">' . getSetting('beian_no') . '</a>'; ?></p>
<script src="<?php echo jquery_path(); ?>"></script>
</div>
<script src="<?php echo jquery_path(); ?>"></script>
<script type="text/javascript">
    var formhash = '<?php echo $formhash; ?>';
    var version = '<?php echo VERSION; ?>';
</script>
<script src="./template/default/js/kk_dropdown.js?version=<?php echo VERSION; ?>"></script>
<?php
if (defined('IN_ADMINCP')) {
    echo '<script src="./template/default/js/admin.js?version=' . VERSION . '"></script>';
} else {
    echo '<script src="./template/default/js/main.js?version=' . VERSION . '"></script>';
}
?>
<script src="./template/red/js/fwin.js?version=<?php echo VERSION; ?>"></script>
<?php
HOOK::run('page_footer_js');
//if(defined('NEW_VERSION')) echo '<script type="text/javascript">new_version = true</script>';
//if(defined('CLOUD_NOT_INITED')) echo '<div class="hidden"><img src="api.php?action=register_cloud" /></div>';
//if(defined('CRON_ERROR')) echo '<script type="text/javascript">createWindow().setTitle("警告").setContent("计划任务可能出现故障，请检查配置！").addButton("查看执行情况", function(){ location.href="admin.php#cron"; }).addCloseButton("忽略").append();</script>';
?>
