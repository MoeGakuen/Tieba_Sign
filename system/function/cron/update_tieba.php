<?php
if (!defined('IN_KKFRAME')) exit();
if (getSetting('autoupdate')) {
    $_uid = getSetting('autoupdate_uid') ? getSetting('autoupdate_uid') : 1;
    while ($__uid = $_uid) {
        $_uid = DB::result_first("SELECT uid FROM member WHERE uid>'{$_uid}' ORDER BY uid ASC LIMIT 0,1");
        update_liked_tieba($__uid, true, false);
        saveSetting('autoupdate_uid', $_uid);
    }
    saveSetting('autoupdate_uid', 0);
}
cron_set_nextrun($tomorrow);
