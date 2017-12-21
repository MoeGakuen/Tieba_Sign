<?php
function xm_update_liked_tieba($uid, $ignore_error = false, $allow_deletion = true){
	$date = date('Ymd', TIMESTAMP + 900);
	$cookie = get_cookie($uid);
	if(!$cookie){
		if($ignore_error) return;
		showmessage('请先填写 Cookie 信息再更新', './#baidu_bind');
	}
	$liked_tieba = get_liked_tieba($cookie);
	$insert = $deleted = 0;
	if(!$liked_tieba){
		if($ignore_error) return;
		showmessage('无法获取喜欢的贴吧，请更新 Cookie 信息');
	}
	$my_tieba = array();
	$query = DB::query("SELECT `name`, `fid`, `tid` FROM `my_tieba` WHERE `uid`='{$uid}'");
	while($r = DB::fetch($query)) {
		$my_tieba[$r['name']] = $r;
	}
	foreach($liked_tieba as $tieba){
		if($my_tieba[$tieba['name']]){
			unset($my_tieba[$tieba['name']]);
			if(!$my_tieba[$tieba['name']]['fid']) DB::update('my_tieba', array(
					'fid' => $tieba['fid'],
			), array(
					'uid' => $uid,
					'name' => $tieba['name'],
			), true);
			continue;
		}else{
			DB::insert('my_tieba', array(
			'uid' => $uid,
			'fid' => $tieba['fid'],
			'name' => $tieba['name'],
			'unicode_name' => $tieba['uname'],
			), false, true, true);
			$insert++;
		}
	}
	DB::query("INSERT IGNORE INTO sign_log (tid, uid) SELECT `tid`, `uid` FROM `my_tieba`");
	if($my_tieba && $allow_deletion){
		$tieba_ids = array();
		foreach($my_tieba as $tieba){
			$tieba_ids[] = $tieba['tid'];
		}
		$str = "'".implode("', '", $tieba_ids)."'";
		$deleted = count($my_tieba);
		DB::query("DELETE FROM `my_tieba` WHERE `uid`='{$uid}' AND `tid` IN ({$str})");
		DB::query("DELETE FROM `sign_log` WHERE `uid`='{$uid}' AND `tid` IN ({$str})");
	}
	return array($insert, $deleted);
}