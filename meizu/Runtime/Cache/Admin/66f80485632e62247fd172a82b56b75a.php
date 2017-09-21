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
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/mz/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>产品类别属性列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 产品类别属性管理 <span class="c-gray en">&gt;</span> 产品类别属性列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
 <form action="<?php echo U('admin/shoptypeattr/multipledelete');?>" method="post" id="mainForm">
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" id="subtn"  class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
  
   <a href="<?php echo U('admin/shoptypeattr/addattr');?>"  class="btn btn-secondary radius">
          <i class="icon-plus"></i> 添加类别属性
    </a>
  </span> <span class="r">共有数据：<strong><?php echo $count ?></strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th scope="col" colspan="7">商品类别属性列表</th>
      </tr>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="100">属性ID</th>
        <th width="160">所属商品类别</th>
        <th width="160">类别属性名称</th>
        <th>对应类别属性值</th>
        <th width="80">是否前台显示</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
 foreach ($res as $key => $value) { ?>
            <tr class="text-c">
              <td><input type="checkbox" value="<?php echo $value['attr_id'] ?>" name="attr_id[]"></td>
              <td><?php echo $value['attr_id'] ?></td>
              <td><?php echo $value['type_name'] ?></td>
              <td><?php echo $value['attr_name'] ?></td>
              <td><?php echo $value['attr_value'] ?></td>
              <?php  if ($value['isbeselected'] == 1) { ?>
                    <td><span style="color:blue">是</span></td>
                  <?php
 }elseif($value['isbeselected'] == 0){ ?>
                    <td><span style="color:red">否</span></td>
                  <?php
 } ?>
              
              <td class="f-14 admin-manage"> <a title="编辑" href="<?php echo U('admin/shoptypeattr/editattr',array('attr_id'=>$value['attr_id']));?>"  class="ml-5" style="text-decoration:none"><i class="icon-edit"></i></a> <a title="删除" href="javascript:;" onclick="attr_del(this,<?php echo $value['attr_id'] ?>)" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
            </tr>
          <?php
 } ?>
        
    </tbody>
  </table>
 </form>
 <div class="pagination">
      <div class="pagaBox">
        <?php echo $page ?>
      </div>
  </div>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/Validform_v5.3.2.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script> 
<script type="text/javascript">
  $('#subtn').click(function(event) {
    layer.confirm('确认要删除吗？',function(index){
      $('#mainForm').submit();
    });
  });

   /*用户-删除*/
  function attr_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var attr_id = id;
      $.ajax({
        url: '<?php echo U("admin/shoptypeattr/singdelete");?>',
        type: 'POST',
        dataType: 'json',
        data: {attr_id: attr_id},
        success:function(data){
          if(data.error == 1){
            layerobj.msg('删除出错!',1);
          }else{
            currentobj.parents("tr").remove();
            layerobj.msg('已删除!',1);
          }
          
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