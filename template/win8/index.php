<?php
if (!defined('IN_KKFRAME')) exit();
$extra_title = getSetting('extra_title');
$title = $extra_title ? "贴吧签到助手 - {$extra_title}" : '贴吧签到助手';
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title><?php echo $title; ?></title>
    <?php include template('widget/meta'); ?>
</head>

<body>
    <div class="wrapper" id="page_index">
        <div id="append_parent">
            <div class="cover hidden"></div>
            <div class="loading-icon"><img src="./template/default/style/loading.gif" /> 载入中...</div>
        </div>
        <div class="main-box clearfix">
            <?php include template('widget/header'); ?>

            <div class="main-wrapper">
                <div class="sidebar">
                    <?php include template('widget/sidebar'); ?>
                </div>
                <div class="main-content">
                    <div id="content-loader">
                        <h2>正在加载 jQuery 组件...</h2>
                        <p>首次加载需要较长时间，请您耐心等待.</p>
                        <p>jQuery 加载完成前，您暂时无法操作本页面.</p>
                        <br />
                        <p>如果您长时间停留在此页面，请手动刷新网页.</p>
                    </div>
                    <div id="content-guide" class="hidden">
                        <?php include template('widget/guide'); ?>
                    </div>
                    <div id="content-liked_tieba" class="hidden">
                        <?php include template('widget/liked_tieba'); ?>
                    </div>
                    <div id="content-sign_log">
                        <?php include template('widget/sign_log'); ?>
                    </div>
                    <div id="content-setting" class="hidden">
                        <?php include template('widget/setting'); ?>
                    </div>
                    <div id="content-baidu_bind" class="hidden">
                        <?php include template('widget/bind_status'); ?>
                    </div>
                    <?php HOOK::page_contents(); ?>
                </div>
            </div>
        </div>
        <?php include template('widget/footer'); ?>
</body>

</html>
