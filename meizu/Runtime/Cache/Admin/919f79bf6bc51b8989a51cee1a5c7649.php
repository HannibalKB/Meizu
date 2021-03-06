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
<link href="/mz/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]--><title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 产品类型管理 <span class="c-gray en">&gt;</span> 商品类型列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c">
    <form class="Huiform" method="post" action="<?php echo U('admin/shoptype/addtype');?>" >
      <input type="text" placeholder="产品类型名称" autocomplete="off" id="type_name" name="type_name" class="input-text" style="width:150px">  
      <button type="submit" class="btn btn-success" id="btnadd" ><i class="icon-plus"></i>添加产品类型</button>
    </form>
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20">
   
    <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th scope="col" colspan="7">商品类型类表</th>
      </tr>
      <tr class="text-c">
        <th width="40">ID</th>
        <th width="200">类型名称</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
 foreach ($res as $key => $value) { ?>
             <tr class="text-c">
              <td><?php echo $value['type_id']; ?></td>
              <td><?php echo $value['type_name']; ?></td>
              <td class="f-14"><a title="编辑" href="<?php echo U('admin/shoptype/edittype',array('type_id'=>$value['type_id']));?>"  class="ml-5" style="text-decoration:none"><i class="icon-edit"></i></a> <a title="删除" href="javascript:;" onclick="type_dels(this,<?php echo $value['type_id'] ?>)" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
            </tr>
          <?php
 } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script>
<script type="text/javascript">
 //单个分类删除
  function type_dels(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var thisid = id;
      $.ajax({
        url: '<?php echo U("admin/shoptype/deletetype");?>',
        type: 'POST',
        dataType: 'json',
        data: {type_id: thisid},
        success:function(data){
          if(data.error == 0){
            currentobj.parents("tr").remove();
            layerobj.msg('已删除!',1);
          }else if(data.error == 1){
            layerobj.msg(data.msg,1);
          }
          
        },
        error:function(){
          layerobj.msg('通信错误!',1);
        },
      })
    });
  }

 $('#btnadd').click(function(event) {
   if($('#type_name').val() == ''){
     layer.msg('商品类型不为空!',1);
     return false;
   }
 });
</script> 
</body>
</html>