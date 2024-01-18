<?php
if (!defined('IN_KKFRAME')) exit();
@set_time_limit(60);
$date = date('Ymd', TIMESTAMP);
$count = DB::result_first("SELECT COUNT(*) FROM `sign_log` WHERE `date` = {$date} AND `status` <= 0");
if ($nowtime - $today < 1800) {
    cron_set_nextrun($today + 1800);
} elseif ($count) {
    echo ' 待签到 ' . $count . ' 个' . PHP_EOL;
    $endtime = TIMESTAMP + 55;
    if (getSetting('next_cron') < TIMESTAMP - 3600) cron_set_nextrun(TIMESTAMP - 1);
    $random_sign = getSetting('random_sign');
    while ($endtime > time()) {
        if ($count <= 0) break;
        $offset = $random_sign ? rand(1, $count) - 1 : 0;
        $res = DB::fetch_first("SELECT uid, tid, `status` FROM sign_log WHERE `date` = {$date} AND `status` <= 0 ORDER BY uid LIMIT {$offset},1");
        if (empty($res['tid'])) continue;
        $tieba = DB::fetch_first("SELECT * FROM my_tieba WHERE tid = {$res['tid']}");
        if (!empty($tieba['skiped'])) {
            DB::query("UPDATE sign_log SET `status` = 5, lastErr = '用户手动忽略' WHERE tid = {$res['tid']} AND `date` = {$date}");
            continue;
        }
        list($status, $result, $exp) = client_sign($tieba['uid'], $tieba);
        //echo '[' . date('Y-n-j G:i:s') . '] [Info] [' . CRON_ID . "] UID：{$tieba['uid']} / Tid：{$res['tid']} / 状态：{$status} / 经验：{$exp} / {$result}" . PHP_EOL;

        switch ($status) {
            case 3:  // 账号被封，签到无经验
            case 4:  // 账号被系统封禁，签到无经验
            case 10:  // Cookie 为空
            case 11:  // 找不到 BDUSS
            case 12:  // BDUSS 无效
                DB::query("UPDATE sign_log SET `status` = {$status}, lastErr = '{$result}' WHERE uid = {$res['uid']} AND `date` = {$date}");
                $success = false;
                break;

            case 13:  // 贴吧不开放
                DB::query("UPDATE sign_log SET `status` = {$status}, lastErr = '{$result}' WHERE tid = {$res['tid']} AND `date` = {$date}");
                $success = false;
                break;

            case 1: // 签到成功
                DB::query("UPDATE sign_log SET `status` = 1, exp = {$exp}, lastErr = '' WHERE tid = {$res['tid']} AND `date` = {$date}");
                $success = true;
                break;

            case 2:  // 重复签到
                DB::query("UPDATE sign_log SET `status` = {$status}, lastErr = '' WHERE tid = {$res['tid']} AND `date` = {$date}");
                $success = true;
                break;

            case 6:  // 账号被吧务封禁，无法签到
                DB::query("UPDATE sign_log SET `status` = {$status}, lastErr = '{$result}' WHERE tid = {$res['tid']} AND `date` = {$date}");
                $success = true;
                break;

            default:  // 其它错误，待重试
                DB::query("UPDATE sign_log SET `status` = {$status}, retry = retry + 1, lastErr = '{$result}' WHERE tid = {$res['tid']} AND `date` = {$date}");
                $retry = DB::result_first("SELECT retry FROM sign_log WHERE tid = {$tieba['tid']} AND `date` = {$date} AND `status` < 0");
                if ($retry >= 5) DB::query("UPDATE sign_log SET `status` = 127 WHERE tid = {$res['tid']} AND `date` = {$date}");
                $success = false;
        }

        if ($success) $count--;
    }
} else {
    cron_set_nextrun($nowtime + 1800);
}
