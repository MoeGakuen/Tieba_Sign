$("#menu_x_multi-index").click(function (){load_xm_ids();x_m_load_stat();});
$("#x_m_add_id").click(function(){
    createWindow().setTitle("添加百度ID").setContent('<form method="get" action="plugins/x_multi/ajax.php?v=add_id" id="x_m_add_id_form" onsubmit="return x_m_post_win(this.action, this.id)"><p>请输入百度ID:</p><input type="text" id="xm_bdid" name="xm_bdid" style="width:100%"/><p>请输入密码:</p><input type="password" id="xm_bds" name="xm_bds" style="width:100%"/></form>').addButton("确定", function(){ $('#x_m_add_id_form').submit(); }).addCloseButton("取消").append();
    });

function load_xm_ids(){
    showloading();
    $.getJSON("plugins/x_multi/ajax.php?v=load_xm_ids", function(result){
        show_xm_ids(result);
    }).fail(function() { createWindow().setTitle('系统错误').setContent('发生未知错误: 无法获取设置').addButton('确定', function(){ location.reload(); }).append(); }).always(function(){ hideloading(); });
}
function show_xm_ids(result){
    $('#x_m_ids').html('');
    if(!result.count) return;
    $.each(result.xmids, function(i, field){
        $("#x_m_ids").append("<tr><td>"+(i+1)+"</td><td><a href=\"http://tieba.baidu.com/home/main?un="+field.name+"\" target=\"_blank\">"+field.name+"</a></td><td><a href=\"javascript:;\" onclick=\"return xm_updatetieba('"+field.xuid+"')\">刷新喜欢的贴吧</a> <a href=\"javascript:;\" onclick=\"return del_xm_id('"+field.xmid+"')\">删除</a></td></tr>");
    });
}

function x_m_load_stat(){
    showloading();
    $.getJSON("plugins/x_multi/ajax.php?v=load_xm_logs", function(result){
        $('#x_m_log').html('');
        if(result.msgx==1) return;
        $.each(result.log, function(i,field){
            if(parseInt(field.unsupport) > 0) field.unsupport += ' (<a href="admin.php?action=reset_failure&uid='+field.uid+'&formhash='+formhash+'" onclick="return msg_win_action(this.href)">重置</a>)';
            $("#x_m_log").append("<tr><td>"+field.username+"</td><td>"+field.succeed+"</td><td>"+field.skiped+"</td><td>"+field.waiting+"</td><td>"+field.retry+"</td><td>"+field.unsupport+"</td></tr>");
        });
    }).fail(function() { createWindow().setTitle('系统错误').setContent('发生未知错误: 无法获取多ID统计数据').addCloseButton('确定').append(); }).always(function(){ hideloading(); });
}

function xm_updatetieba(xuid){
    msg_win_action("plugins/x_multi/ajax.php?v=updatetieba&xuid="+xuid);
}
function del_xm_id(xmid){
    createWindow().setTitle('删除绑定的ID').setContent('确认要删除这个ID吗').addButton('确定', function(){ xm_msg_win_action("plugins/x_multi/ajax.php?v=del_xm_id&xmid="+xmid); }).addCloseButton('取消').append();
}


function x_m_post_win(link, formid){
    showloading();
    $.ajax({
        url: link,
        type: 'POST',
        dataType: 'json',
        data: $('#'+formid).serialize(),
        complete: function(){hideloading();},
        error: function(){createWindow().setTitle('系统错误').setContent('发生未知错误: 无法解析返回结果').addButton('确定', function(){ location.reload();}).append();},
        success: function(data){
            if (data.msgx == 1) {
                if (typeof(data.url) == 'string' && data.url != '') {
                    window.location.href = data.url;
                } else {
                    createWindow().setTitle('错误').setContent('返回参数错误，请重试').addCloseButton('确定').append();
                }
            }
        }
    });
    return false;
}
function xm_msg_win_action(link){
    link += link.indexOf('?') < 0 ? '?' : '&';
    link += "format=json";
    showloading();
    $.getJSON(link, function(result){
        createWindow().setTitle('系统消息').setContent(result.msg).addButton('确定', function(){ load_xm_ids(); x_m_load_stat();}).append();
    }).fail(function() { createWindow().setTitle('系统错误').setContent('发生未知错误: 无法解析返回结果').addButton('确定', function(){ location.reload(); }).append(); }).always(function(){ hideloading(); });
    return false;
}

