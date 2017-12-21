<?php
if (!defined('IN_KKFRAME')) exit('Access Denied!');
class plugin_x_multi {
    var $description = '支持单用户绑定多个ID';
    var $modules = array (
            array (
                    'id' => 'index',
                    'type' => 'page',
                    'title' => '绑定多个百度ID',
                    'file' => 'index.inc.php' 
            ) 
    );
    var $version = '0.2.4';
    public static function page_footer_js() {
        echo '<script src="plugins/x_multi/main.js"></script>';
    }
    public static function on_install() {
        DB::query ( "CREATE TABLE IF NOT EXISTS x_multi(xmid int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,xuid int(10) unsigned NOT NULL,uid int(10) unsigned NOT NULL,name varchar(32) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8" );
        saveSetting ('x_multi','0.2.4-2016-01-20');
        showmessage ("安装成功！");
    }
    public static function on_uninstall() {
        DB::query ( "DROP TABLE x_multi" );
        DB::query ( "DELETE FROM setting WHERE k='x_multi'" );
        DB::query ( "DELETE FROM setting WHERE k='x_m_max_bind'" );
        CACHE::update('plugins');
        showmessage ( "数据库删除成功。" );
    }
    public static function on_config() {
        if ($_POST) {
            $max_bind = $_POST ['x_m_max_bind'];
            if (! $max_bind)
                showmessage ( "请输入数据" );
            saveSetting ( 'x_m_max_bind', $max_bind );
            showmessage ( "设置保存成功" );
        } else {
            $max_bind = getSetting ( 'x_m_max_bind' );
            return '<p>请输入单个账号绑定百度ID的上限</p><input type="text" name="x_m_max_bind" id="x_m_max_bind" value="' . $max_bind . '">';
        }
    }
    function on_upgrade($from_version){
        switch ($from_version){
            case '0':
            case '0.1.0':
            case '0.2.0':
            case '0.2.1':
            case '0.2.2':
            case '0.2.3':
                saveSetting ('x_multi','0.2.4-2016-01-20');
                return '0.2.4';
        }
    }
}