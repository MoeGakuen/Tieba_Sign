<?php
if (!defined('IN_KKFRAME')) exit('Access Denied!');
$version = getSetting ('x_multi',true);
$version1 = substr ($version, 0, 5);
$version2 = substr ($version, 6, 10);
echo '<h2>绑定多个百度ID</h2><p style="color:#757575;font-size:12px">当前插件版本：' . $version1 . ' | 更新日期：' . $version2 . ' | Designed By <a href="http://xxsky.me" target="_blank">@星弦雪</a> | Optimized by <a href="http://gakuen.me" target="_blank">@学园</a></p>';
?>
<br>
<p>添加百度ID：</p>
<table>
	<thead>
		<tr>
			<td style="width: 40px">序号</td>
			<td>ID</td>
			<td style="width: 20%">操作</td>
		</tr>
	</thead>
	<tbody id="x_m_ids"></tbody>
</table>
<p>
	<a class="btn" href="javascript:;" id="x_m_add_id">添加账户</a> <a class="btn" href="javascript:;" onclick="window.location.href = 'plugins/x_multi/ajax.php?v=add_id_m'">手动获取</a>
</p>
<br>
<p>多ID签到记录:</p>
<table>
	<thead>
		<tr>
			<td>用户名</td>
			<td>已成功</td>
			<td>已跳过</td>
			<td>待签到</td>
			<td>待重试</td>
			<td>不支持</td>
		</tr>
	</thead>
	<tbody id="x_m_log"></tbody>
</table>