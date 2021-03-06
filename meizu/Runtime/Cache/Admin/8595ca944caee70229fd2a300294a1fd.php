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
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 商品库 <span class="c-gray en">&gt;</span> 商品列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a> <a class="btn btn-primary radius" href="<?php echo U('admin/shop/publishshop');?>"><i class="icon-plus"></i>添加商品</a></span> <span class="r">共有数据：<strong><?php echo $count ?></strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="40"><input name="" type="checkbox" value=""></th>
        <th width="80">ID</th>
        <form id="form1" action="<?php echo U('admin/shop/index');?>" method="get">
          <th width="100">
            <select class="select" id="cid" name="cid" style="width:150px;">
              <option style="width:150px;" value="0">产品分类</option>
                <?php  foreach ($ShopCateres as $key => $value) { ?>
                     <option style="width:150px;" <?php if($_GET['cid'] == $value['cid']) echo 'selected' ?>  value="<?php echo $value['cid'] ?>"><?php echo $value['cname'] ?></option>
                    <?php
 } ?>
            </select>
          </th>
        </form>
        <th width="150">图片</th>
        <th width="150">商品名称</th>
        <th width="150" style="color:red">商品sku</th>
        <!-- <th width="150">发布时间</th> -->
        <!-- <th width="60">是否新品</th> -->
        <th width="60">上架状态</th>
        <th width="120">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
 foreach ($goodRes as $key => $value) { ?>
              <tr class="text-c">
                <td><input name="shop_id" type="checkbox" value="<?php echo $value['good_id'] ?>"></td>
                <td><?php echo $value['good_id'] ?></td>
                <td><?php echo $value['cname'] ?></td>
                <td><a href="<?php echo U('admin/shop/shopdetail',array('good_id'=>$value['good_id']));?>"><img width="80px" height="80px" class="picture-thumb" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/mz/<?php echo $value['good_pic'] ?>" title="<?php echo $value['good_name'] ?>"></a></td>
                <td class="text"><a class="maincolor" href="<?php echo U('admin/shop/shopdetail',array('good_id'=>$value['good_id']));?>" title="查看详情"><?php echo $value['good_name'] ?></a></td>
                <td class="text-c"><?php echo $value['count'] ?></td>
                <!-- <td><?php echo date('Y-m-d H:i:s',$value['create_time']) ?></td> -->
               <!--  <td>
                  <?php  if($value['isnew'] == 1){ echo '<span style="color:blue">是</span>'; }else{ echo '<span style="color:red">否</span>'; } ?>                  
                </td> -->
                <td class="picture-status">
                  <?php  if($value['ispublish'] == 1){ ?>
                        <span class="label label-success">已上架</span>
                      <?php
 }elseif($value['ispublish'] == 0){ ?>
                        <span class="label">未上架</span>
                      <?php
 } ?>
                    
                </td>
                <td class="f-14 picture-manage">
                  

                <?php
 if($value['ispublish'] == 1){ ?>
                      <a style="text-decoration:none" onClick="shop_down(this,<?php echo $value['good_id'] ?>)" href="javascript:;" title="下架">
                        <i class="icon-hand-down"></i>
                      </a>
                    <?php
 }elseif($value['ispublish'] == 0){ ?>
                       <a style="text-decoration:none" onClick="shop_up(this,<?php echo $value['good_id'] ?>)" href="javascript:;" title="上架">
                        <i class="icon-hand-up"></i>
                      </a>
                    <?php
 } ?>
                
                <?php  if($value['count'] <= 0){ ?>
                  <a style="text-decoration:none" class="ml-5" href="<?php echo U('admin/shop/shopsku',array('good_id'=>$value['good_id'],'type_id'=>$value['type_id']));?>" title="为产品添加sku">
                    <i class="Hui-iconfont">&#xe61f;</i>
                  </a>
                    <?php
 } ?>
                  <a style="text-decoration:none" class="ml-5"  href="<?php echo U('admin/shop/shopskulist',array('good_id'=>$value['good_id'],'type_id'=>$value['type_id']));?>" title="查看商品sku列表">
                    <i class="Hui-iconfont">&#xe667;</i>
                  </a>
                  <a style="text-decoration:none" class="ml-5" href="<?php echo U('admin/shop/shopedit',array('good_id'=>$value['good_id']));?>" title="编辑">
                    <i class="icon-edit"></i>
                  </a>
                  <a style="text-decoration:none" class="ml-5" onClick="shop_dels(this,<?php echo $value['good_id'] ?>)" href="javascript:;" title="删除"><i class="icon-trash"></i>
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
  function shop_dels(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var layerobj  = layer;
      var currentobj = $(obj);
      var goodid = id;
      $.ajax({
        url: '<?php echo U("admin/shop/deleteshop");?>',
        type: 'POST',
        dataType: 'json',
        data: {good_id: goodid},
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

  /*商品-下架*/
function shop_down(obj,id){
  var thisobj = $(obj);
  var shopid = id;
  $.ajax({
    url: '<?php echo U("admin/shop/shopdown");?>',
    type: 'POST',
    dataType: 'json',
    data: {shopid: shopid},
    success:function(data){
      if(data.error == 0){
        thisobj.parents("tr").find(".picture-manage").prepend('<a style="text-decoration:none" onClick="shop_up(this,'+shopid+')" href="javascript:;" title="发布"><i class="icon-hand-up"></i></a>');
        thisobj.parents("tr").find(".picture-status").html('<span class="label radius">已下架</span>');
        thisobj.remove();
      }else{
        alert('失败了');
      }
     
    },
  })
  
 
}
/*图片库-发布*/
function shop_up(obj,id){
  var thisobj = $(obj);
  var shopid = id;
  $.ajax({
    url: '<?php echo U("admin/shop/shopup");?>',
    type: 'POST',
    dataType: 'json',
    data: {shopid: shopid},
    success:function(data){
      if(data.error == 0){
        thisobj.parents("tr").find(".picture-manage").prepend('<a style="text-decoration:none" onClick="shop_down(this,'+shopid+')" href="javascript:;" title="下架"><i class="icon-hand-down"></i></a>');
        thisobj.parents("tr").find(".picture-status").html('<span class="label label-success radius">已发布</span>');
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

$(document).ready(function() {
  $(document).on('change', '#cid', function(event) {
    $("#form1").submit();
  });
});

</script>
</body>
</html>