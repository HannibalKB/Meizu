<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<link href="/mz/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c">
    <form class="Huiform" method="post" action="<?php echo U('admin/admin/addadmin');?>" id="mainForm">
      <input type="text" placeholder="帐户名" autocomplete="off"  class="input-text" style=" width:150px" name="username" id="username">
      <input type="password" placeholder="密码" autocomplete="off" name="password" id="password" class="input-text" style="width:150px;">
      <input type="password" placeholder="确认密码" name="confirmpassword" id="confirmpassword" autocomplete="off"  class="input-text" style="width:150px;">
      <span class="select-box" style="width:150px;">
      <select class="select" name="group_id" size="1">
        <?php
 foreach ($roleres as $key => $value) { ?>
              <option value="<?php echo $value['id'] ?>" name=""><?php echo $value['title']; ?></option>
            <?php
 } ?>
      </select>
      </span>
      <button type="button" class="btn btn-success" id="sumbtn" ><i class="icon-plus"></i> 添加管理员</button>
    </form>
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20">  <span class="r">共有数据：<strong><?php echo $count ?></strong>条</span> </div>
  <table class="table table-border table-bordered table-bg">
    <thead>
      
      <tr class="text-c">
        <th width="40">ID</th>
        <th width="150">登录名</th>
        <th>角色</th>
        <th width="130">用户注册时间</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach ($adminlistRes as $key => $value) { ?>  
            <tr class="text-c">
              <td><?php echo $value['uid'] ?></td>
               <td><u style="cursor:pointer" class="text-primary" onclick="user_show(<?php echo $value['uid'] ?>,'500','700','<?php echo $value['username'] ?>','<?php echo U('admin/user/usershow',array('userid'=>$value['uid']));?>')"><?php echo $value['username'] ?></u></td>
              <td><?php echo $value['title'] ?></td>
              <td><?php echo date("Y-m-d H:i:s",$value['reg_time']) ?></td>
              <td class="f-14 admin-manage"><a title="编辑" href="<?php echo U('admin/admin/editadmin',array('uid'=>$value['uid']));?>"  class="ml-5" style="text-decoration:none"><i class="icon-edit"></i></a> <a title="删除" onclick="if(confirm('确定要删除吗?')){this.href='<?php echo U('admin/admin/deleteadmin',array('uid'=>$value['uid']));?>'} " id="admindelete" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
            </tr>
          <?php
 } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/Validform_v5.3.2.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script> 
<script type="text/javascript">
  $(document).ready(function() {
    $('#sumbtn').click(function(event) {
      if($('#username').val() == ''){
        layer.msg('管理员名不能为空',1);
        return false;
      }
      if($('#password').val() == ''){
        layer.msg('登录密码不能为空',1);
        return false;
      }
     if($('#confirmpassword').val() == ''){
        layer.msg('确认密码不能为空',1);
        return false;
      }
      if($('#password').val() != $('#confirmpassword').val()){
        layer.msg('两次密码不一致',1);
        return false;
      }
      var addInfo = {
        username : $('#username').val(),
        password : $('#confirmpassword').val(),
      }
      var layerobj = layer;
      $.ajax({
        url: '<?php echo U("admin/admin/isexitusername");?>',
        type: 'POST',
        dataType: 'json',
        data: {data: addInfo},
        success:function(data){
          if(data.error == 1){
            layerobj.msg('帐户名已经存在',1);
          }else if(data.error == 0){
            $('#mainForm').submit();
          }
        },
        error:function(){

        },
      })
      
    });

    

  });


</script>
</body>
</html>