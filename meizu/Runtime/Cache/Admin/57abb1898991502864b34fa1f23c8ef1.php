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
<link rel="stylesheet" href="/mz/Public/Admin/css/page.css" type="text/css">
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
<![endif]--><title>操作记录</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 日志中心 <span class="c-gray en">&gt;</span> 操作记录 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<form action="<?php echo U('admin/operation/mutipledelete');?>" id="mainForm" method="POST">
<div class="pd-20">
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l"><a href="javascript:;"  class="btn btn-danger radius" id="multipledelete"><i class="icon-trash"></i> 批量删除</a></span>
    <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="80">id</th>
        <th width="80">管理员id</th>
        <th width="130">操作者</th>
        <th width="130">管理员身份</th>
        <th width="160">操作地点IP</th>
        <th width="160">操作时间</th>
        <th>操作名称</th>
        <th width="60">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach ($res as $key => $value) { ?>
          <tr class="text-c">
            <td><input type="checkbox" name="log_id[]" value="<?php echo $value['log_id']; ?>" name="log_id"></td>
            <td><?php echo $value['log_id']; ?></td>
            <td><?php echo $value['uid']; ?></th>
            <td><u style="cursor:pointer" class="text-primary" onclick="user_show(<?php echo $value['uid'] ?>,'500','700','<?php echo $value['username'] ?>','<?php echo U('admin/user/usershow',array('userid'=>$value['uid']));?>')"><?php echo $value['username'] ?></u></td>
            <td>管理员</td>
            <td><?php echo $value['operation_ip'] ?></td>
            <td><?php echo date("Y-m-d H:i:s",$value['operation_time']); ?></td>
            <td ><?php echo $value['operation_name']; ?></td>
            <td class="f-14"><a title="删除" href="javascript:;" onclick="log_dels(this,<?php echo $value['log_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
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
</div>
</form>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script>  
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script>
<script type="text/javascript">
  $('#multipledelete').click(function(event) {
    layer.confirm('确认要删除吗？',function(index){
       $('#mainForm').submit();
       layer.msg('已删除!',1);
    });
  });

  /*用户-删除*/
  function log_dels(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var logid = id;
      $.ajax({
        url: '<?php echo U("admin/Operation/singledelete");?>',
        type: 'POST',
        dataType: 'json',
        data: {log_id: logid},
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
</script>
</body>
</html>