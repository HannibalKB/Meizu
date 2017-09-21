<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/mz/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户管理</title>
<style type="text/css">
  /*分页样式*/
.text-centerpage{
    text-align: center;
}

.pagination{
    display: inline-block;
    padding-left: 0;
    margin: 21px 0;
    border-radius: 3px;
    text-align: center;
    position: relative;
    width: 100%;
}
.pagaBox{
  height: 50px;
  margin: 0 auto;
  position: absolute;
  left: 50%;
}
.text-center a:hover{
    text-decoration: none;
}
.num{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}

.current{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
    z-index: 2;
    color: #fff;
    background-color: #009a61;
    border-color: #009a61;
    cursor: default;
}

.prev{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}

.next{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}
/*下拉框的样式*/
.drodownlistclass{
  display:inline-block;
  /*border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  box-sizing: border-box;*/
  cursor: pointer;
  line-height: normal;
  font-weight: normal;
  width: 150px;
  font-size: 14px;
  border-width: 1px;
  border-style: solid;
  border-color: rgb(221, 221, 221);
  height: 31px;
  text-align: center;
}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  

  <form action="<?php echo U('admin/user/mutipledelete');?>" method="POST" id="mainform" >  
    <div class="cl pd-5 bg-1 bk-gray mt-20"> 
      <span class="l">
        <a href="javascript:;" id="multipledelete" class="btn btn-danger radius">
          <i class="icon-trash"></i> 批量删除
        </a> 
        <!-- <a href="javascript:;" onclick="user_add('550','','添加用户','user-add.html')" class="btn btn-primary radius">
          <i class="icon-plus"></i> 添加用户
        </a> -->
        <!-- <a href="<?php echo U('admin/user/adduser');?>"  class="btn btn-secondary radius">
          <i class="icon-key"></i> 添加用户
        </a> -->
      </span> 
      <span class="r">共有数据：<strong><?php echo $count ?></strong> 条</span> 
    </div>
    <table class="table table-border table-bordered table-hover table-bg table-sort">
      <thead>
        <tr class="text-c">
          <th width="25"><input type="checkbox" name="" value=""></th>
          <th width="80">ID</th>
          <th width="100">用户名</th>
          <th width="40">性别</th>
          <th width="150">手机</th>
          <th width="150">邮箱</th>
          <th width="80">注册时间</th>
          <th width="130">最后登录时间</th>
          <th width="70">状态</th>
          <th width="100">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php  foreach ($res as $key => $value) { ?>
              <tr class="text-c">
                <td><input type="checkbox" value="<?php echo $value['uid']; ?>" name="uid[]"></td>
                <td><?php echo $value['uid']; ?></td>
                <td><u style="cursor:pointer" class="text-primary" onclick="user_show(<?php echo $value['uid'] ?>,'500','700','<?php echo $value['username'] ?>','<?php echo U('admin/user/usershow',array('userid'=>$value['uid']));?>')"><?php echo $value['username'] ?></u></td>
                <td>
                <?php
 switch ($value['sex']) { case '0': echo '保密'; break; case '1': echo '男'; break; case '2': echo '女'; break; default: echo '保密'; break; } ?>
                 </td>
                <td>
                  <?php
 if($value['phone'] == ''){ echo '<span style="color:red">该用户还没有绑定手机</span>'; }else{ echo $value['phone']; } ?>

                </td>
                <td>
                  <?php
 if($value['email'] == ''){ echo '<span style="color:red">该用户还没有绑定邮箱</span>'; }else{ echo $value['email']; } ?>
                </td>
                <td class="text-l"><?php echo date("Y-m-d H:i:s",$value['reg_time']); ?></td>
                <td><?php echo date("Y-m-d H:i:s",$value['login_time']); ?></td>
                <?php
 if($value['status'] == 1){ ?>
                      <td class="user-status"><span class="label label-success radius">已启用</span></td>
                    <?php
 }elseif($value['status'] == -1){ ?>
                       <td class="user-status"><span class="label radius">已停用</span></td>
                    <?php
 } ?>
               
                <td class="f-14 user-manage">
                  <?php  if($value['status'] == 1){ ?>
                        <a style="text-decoration:none" onClick="user_stops(this,<?php echo $value['uid']; ?>)" href="javascript:;" title="停用">
                          <i class="icon-hand-down"></i>
                        </a> 
                      <?php
 }elseif($value['status'] == -1){ ?>
                        <a style="text-decoration:none" onClick="user_starts(this,<?php echo $value['uid']; ?>)" href="javascript:;" title="启用">
                          <i class="icon-hand-up"></i>
                        </a>
                      <?php
 } ?>

                  </a> 
                  <a title="删除" href="javascript:;" onclick="user_dels(this,<?php echo $value['uid']; ?>)" class="ml-5" style="text-decoration:none">
                    <i class="icon-trash"></i>
                  </a>
                </td>
              </tr>
            <?php
 } ?>
          
      </tbody>
    </table>
    <div class="pagination">
      <div class="pagaBox">
        <?php echo $page ?>
      </div>
    </div>
  </form>
  
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script>
<!-- 引入笑脸的js文件 -->
<script type="text/javascript" src="/mz/Public/layer/layer.js"></script> 

<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script> 

<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script>  
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script>
<script type="text/javascript">
// $('.table-sort').dataTable({
// 	"lengthMenu":false,//显示数量选择 
// 	"bFilter": false,//过滤功能
// 	"bPaginate": false,//翻页信息
// 	"bInfo": false,//数量信息
// 	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
// 	"bStateSave": true,//状态保存
// 	"aoColumnDefs": [
// 	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
// 	  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
// 	]
// });

  //异步更改状态信息
  /*用户-停用*/
  function user_stops(obj,id){
    layer.confirm('确认要停用吗？',function(index){
      var thisobj = $(obj);
      var layerobj = layer;
      $.ajax({
        url: '<?php echo U("admin/user/userstop");?>',
        type: 'POST',
        dataType: 'json',
        data: {userid: id},
        success:function(data){
          thisobj.parents("tr").find(".user-manage").prepend('<a style="text-decoration:none" onClick="user_starts(this,'+id+')" href="javascript:;" title="启用"><i class="icon-hand-up"></i></a>');
          thisobj.parents("tr").find(".user-status").html('<span class="label radius">已停用</span>');
          thisobj.remove();
          // layer.msg('已停用',{icon:6,time:1000});
          layer.msg('已启用!',1);
        },
        error:function(){
          // layer.msg('通信错误',{icon:5,time:1000});
          layer.msg('通信错误!',1);
        }
      })
      // layer.msg(errorInfo,1);
    });
  }


  /*用户-启用*/
  function user_starts(obj,id){
    layer.confirm('确认要启用吗？',function(index){
      var thisobj = $(obj);
      var layerobj = layer;
      $.ajax({
        url: '<?php echo U("admin/user/userstart");?>',
        type: 'POST',
        dataType: 'json',
        data: {userid: id},
        success:function(data){
          thisobj.parents("tr").find(".user-manage").prepend('<a style="text-decoration:none" onClick="user_stops(this,'+id+')" href="javascript:;" title="停用"><i class="icon-hand-down"></i></a>');
          thisobj.parents("tr").find(".user-status").html('<span class="label label-success radius">已启用</span>');
          thisobj.remove();
           // layer.msg('已启用',{icon:6,time:1000});
           layer.msg('已启用!',1);
        },
        error:function(){
          // layer.msg('通信错误',{icon:5,time:1000});
          layer.msg('通信错误!',1);
        }
      })
      
    });
  }
  /*用户-删除*/
  function user_dels(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var usid = id;
      $.ajax({
        url: '<?php echo U("admin/user/userdelete");?>',
        type: 'POST',
        dataType: 'json',
        data: {userid: usid},
        success:function(data){
          currentobj.parents("tr").remove();
          layerobj.msg('已删除!',1);
        },
        error:function(){
          layerobj.msg('通信错误!',1);
        },
      })
    });
  }

  $('#multipledelete').click(function(event) {
    layer.confirm('确认要删除吗？',function(index){
       $('#mainform').submit();
       layer.msg('已删除!',1);
    });
  });

</script> 
</body>
</html>