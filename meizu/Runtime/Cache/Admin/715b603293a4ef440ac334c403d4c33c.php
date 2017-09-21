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
<link href="/mz/Public/Admin/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 商品 <span class="c-gray en">&gt;</span> 商品列表 <span class="c-gray en">&gt;</span> sku列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius" href=""><i class="icon-plus"></i> 为此商品添加sku</a><br><br>SKU详情</span> <span class="r">共有数据：<strong><?php echo count($res);?></strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="40"><input name="" type="checkbox" value=""></th>
        <th width="80">SKU-ID</th>
        <th width="100">所属商品名称</th>
        <th width="150">sku详情</th>
        <th width="150">价格</th>
        <th width="150">库存</th>
        <th width="150">商品图片</th>
        <th width="120">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
 foreach ($res as $key => $value) { ?>
              <tr class="text-c">
                <td><input name="shop_id" type="checkbox" value="<?php echo $value['good_id'] ?>"></td>
                <td><?php echo $value['good_listid'] ?></td>
                <td><?php echo $value['good_name'] ?></td>
                <td><?php echo $value['sku_detail'] ?></td>
                <td class="text"><?php echo $value['good_price'] ?></td>
                <td class="text-c"><?php echo $value['good_stock'] ?></td>

                <?php  if(empty($value['good_imgs']) || is_null($value['good_imgs'])){ ?>
                      <td><span style="color:red">该条sku还没有图片</span></td>
                    <?php
 }else{ ?>
                      <td><a  onclick="admin_edit('10','1000','750','<?php echo $value['sku_detail'] ?>','<?php echo U('admin/shop/showimgs',array('good_listid'=>$value['good_listid']));?>')" href="javascript:void()" style="color:blue" >查看</a></td>
                    <?php
 } ?>

                <td class="f-14 picture-manage">

                <?php
 if(empty($value['good_imgs']) || is_null($value['good_imgs'])){ ?>
                      <a style="text-decoration:none" class="ml-5" href="<?php echo U('admin/shop/shopskuimg',array('listid'=>$value['good_listid'],'good_id'=>$value['good_id'],'type_id'=>$type_id));?>" title="为该条sku添加多图">
                        <i class="Hui-iconfont">&#xe642;</i>
                      </a>
                    <?php
 }else{ ?>
                      <a style="text-decoration:none" class="ml-5" href="javascript:void()" onclick="if(confirm('确定要更改该SKU图片吗?')){ this.href='<?php echo U('admin/shop/deleteSkuImg',array('listid'=>$value['good_listid'],'good_id'=>$value['good_id'],'type_id'=>$type_id));?>' }" id="deleteimg" title="已有图片,删除原有的图片,重新添加" >
                        <i class="Hui-iconfont">&#xe641;</i>
                      </a>
                    <?php
 } ?>
                  
                  <a style="text-decoration:none" class="ml-5"  href="<?php echo U('admin/shop/editsku',array('listid'=>$value['good_listid'],'good_id'=>$value['good_id'],'type_id'=>$type_id));?>" title="编辑SKU的价格和库存">
                    <i class="icon-edit"></i>
                  </a>
                  
                  <a style="text-decoration:none" class="ml-5" onClick="sku_del(this,<?php echo $value['good_listid'] ?>)" href="javascript:;" title="删除该条sku"><i class="icon-trash"></i>
                  </a>
                </td>
              </tr>
            <?php
 } ?>
    </tbody>
  </table>
  <div id="pageNav" class="pageNav"></div>
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

 /*sku-删除*/
  function sku_del(obj,id){
    layer.confirm('确认要更改该SKU吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var listid = id;
      $.ajax({
        url: '<?php echo U("admin/shop/deletesku");?>',
        type: 'POST',
        dataType: 'json',
        data: {good_listid: listid},
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