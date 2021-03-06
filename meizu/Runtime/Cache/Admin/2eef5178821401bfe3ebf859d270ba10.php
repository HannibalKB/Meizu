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
<link href="/mz/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>分类管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 产品分类管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20 text-c">
  <form class="Huiform" action="<?php echo U('admin/shopcate/addshopcate');?>" method="post">

    
    所属商品类型： <span class="select-box" style="width:220px">
    <select class="select" id="type_id" name="type_id" style="width:212px;text-align:center;">
      <?php
 foreach ($ShopTyperes as $key => $value) { ?>
            <option style="width:205px;text-align:center;" value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
          <?php
 } ?>
    </select>
    </span>


    上级栏目： <span class="select-box" style="width:220px">
    <select class="select" id="pid" name="pid" style="width:212px;">
      <option style="width:205px;" value="0">无上级栏目</option>
      <?php
 foreach ($ShopCateres as $key => $value) { ?>
            <option style="width:205px;" value="<?php echo $value['cid'] ?>">|- <?php echo $value['cname']; ?></option>
          <?php
 } ?>
    </select>
    </span>
    <input class="input-text" style="width:180px" type="text" value="" placeholder="输入分类名称" id="cname" name="cname">
     <input class="input-text" style="width:180px" type="text" value="" placeholder="输入排序号 默认为0" id="sort" name="sort">
    <button type="submit" class="btn btn-success"><i class="icon-plus"></i> 添加</button>
  </form>
  <div class="article-class-list cl mt-20">
    <table class="table table-border table-bordered table-hover table-bg">
      <thead>
        <tr class="text-c">
          <th width="100">ID</th>
          <th width="250">所属商品类型</th>
          <!-- <th width="150" class="text-l" style="padding-left:80px;">分类名称</th> -->
          <th width="100">排序</th>
          <th width="350">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php  foreach ($ShopCateres as $key => $value) { ?>
              <tr class="text-c">
                <td><?php echo $value['cid'] ?></td>
                <td><?php echo $value['type_name']; ?></td>
                <!-- <td class="text-l" style="padding-left:50px;">|-<?php echo $value['cname'] ?></td> -->
                <td><?php echo $value['sort'] ?></td>
                <td class="f-14"><a title="编辑" href="<?php echo U('admin/shopcate/editshopcate',array('cid'=>$value['cid']));?>"  style="text-decoration:none"><i class="icon-edit"></i></a> <a title="删除" href="javascript:;" onclick="shopcate_del(this,<?php echo $value['cid'] ?>)" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
              </tr>
            <?php
 } ?>
      </tbody>
    </table>
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
    
/*商品分类-删除*/
function shopcate_del(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    var layerobj  = layer;
    var currentobj = $(obj);
    var cid = id;
    $.ajax({
      url: '<?php echo U("admin/shopcate/deleteshopcate");?>',
      type: 'POST',
      dataType: 'json',
      data: {cid: cid},
      success:function(data){
        if(data.error == 1){
          layerobj.msg(data.msg,1);
        }else{
          layerobj.msg('删除成功',1);
          currentobj.parents("tr").remove();
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