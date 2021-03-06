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
<![endif]-->
<title>轮播列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 轮播库 <span class="c-gray en">&gt;</span> 轮播列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c"> 
  <!-- 日期范围： -->
   <!--  <input type="text" id="logmin" class="input-text Wdate" style="width:120px;">
    -
    <input type="text" id="logmax" class="input-text Wdate" style="width:120px;">
    <input type="text" name="" id="" placeholder=" 图片名称" style="width:250px" class="input-text">
    <button name="" id="" class="btn btn-success" type="submit"><i class="icon-search"></i> 搜图片</button> -->
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius"  href="<?php echo U('admin/banner/banneradd');?>"><i class="icon-plus"></i> 添加轮播图</a></span> <span class="r">共有数据：<strong><?php echo $count ?></strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <!-- <th width="40"><input name="" type="checkbox" value=""></th> -->
        <th width="80">ID</th>
        <th width="80">商品ID</th>
        <th>图片名称</th>
        <th width="60">显示状态</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach ($res as $key => $value) { ?>
            <tr class="text-c">
              <!-- <td><input name="" type="checkbox" value=""></td> -->
              <td><?php echo $value['banner_id'] ?></td>
              <td><?php echo $value['good_id'] ?></td>
              <td><a class="maincolor" ><img src="/mz/<?php echo $value['img_url'] ?>" width="700px" height="140px" id="bannerimg"></a></td>
              <td class="picture-status">
              <?php  if($value['status'] == 1){ ?>
                    <span class="label label-success">已显示</span>
                  <?php
 }else{ ?>
                    <span class="label ">未显示</span>
                  <?php
 } ?>

              </td>
              <td class="f-14 picture-manage">

              <?php
 if($value['status'] == 1){ ?>
                      <a style="text-decoration:none" onClick="banner_down(this,<?php echo $value['banner_id'] ?>)" href="javascript:;" title="不显示">
                        <i class="icon-hand-down"></i>
                      </a>
                    <?php
 }elseif($value['status'] == 0){ ?>
                       <a style="text-decoration:none" onClick="banner_up(this,<?php echo $value['banner_id'] ?>)" href="javascript:;" title="显示">
                        <i class="icon-hand-up"></i>
                      </a>
                    <?php
 } ?> 

              <a style="text-decoration:none" class="ml-5"  href="<?php echo U('admin/banner/editbanner',array('banner_id'=>$value['banner_id']));?>" title="编辑"><i class="icon-edit"></i></a> <a style="text-decoration:none" class="ml-5" onClick="banner_dels(this,<?php echo $value['banner_id'] ?>)" href="javascript:;" title="删除"><i class="icon-trash"></i></a></td>
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
  /*商品-删除*/
  function banner_dels(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var bannerid = id;
      $.ajax({
        url: '<?php echo U("admin/banner/delbanner");?>',
        type: 'POST',
        dataType: 'json',
        data: {bannerid: bannerid},
        success:function(data){
          if(data.error == 0){
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

  /*banner-下架*/
function banner_down(obj,id){
  var thisobj = $(obj);
  var bannerid = id;
  $.ajax({
    url: '<?php echo U("admin/banner/bannerdown");?>',
    type: 'POST',
    dataType: 'json',
    data: {bannerid: bannerid},
    success:function(data){
      if(data.error == 0){
        thisobj.parents("tr").find(".picture-manage").prepend('<a style="text-decoration:none" onClick="shop_up(this,'+bannerid+')" href="javascript:;" title="显示"><i class="icon-hand-up"></i></a>');
        thisobj.parents("tr").find(".picture-status").html('<span class="label radius">不显示</span>');
        thisobj.remove();
      }else{
        alert('失败了');
      }
     
    },
  })
  
 
}
/*banner-发布*/
function banner_up(obj,id){
  var thisobj = $(obj);
  var bannerid = id;
  $.ajax({
    url: '<?php echo U("admin/banner/bannerup");?>',
    type: 'POST',
    dataType: 'json',
    data: {bannerid: bannerid},
    success:function(data){
      if(data.error == 0){
        thisobj.parents("tr").find(".picture-manage").prepend('<a style="text-decoration:none" onClick="shop_down(this,'+bannerid+')" href="javascript:;" title="不显示"><i class="icon-hand-down"></i></a>');
        thisobj.parents("tr").find(".picture-status").html('<span class="label label-success radius">已显示</span>');
        thisobj.remove();
      }else{
        alert('修改失败了。');
      }
      
    },
    error:function(){
      alert('通信错误。');
    }
  })
  
}

</script>
</body>
</html>