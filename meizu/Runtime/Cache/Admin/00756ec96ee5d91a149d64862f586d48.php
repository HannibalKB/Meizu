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
<link href="/mz/Public/Admin/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加用户</title>
</head>
<body>
<div class="pd-20">
  <form action="<?php echo U('admin/shopcate/editshopcate');?>" method="post" class="form form-horizontal" id="form-user-add">
  <input type="hidden" name="cid" value="<?php echo $_GET['cid'] ?>">

    <div class="row cl">
      <label class="form-label col-3">所属商品类型：</label>
      <div class="formControls col-5"> <span class="select-box">
         <select class="select" name="type_id" size="1" id="type_id">
          <?php  foreach ($ShopTyperes as $key => $value) { ?>
                 <option 
                    <?php  if($res[0]['type_id'] == $value['type_id']) echo 'selected'; ?>
                  value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name']; ?></option>
              <?php
 } ?>
        </select>
        </span> </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3">上级栏目：</label>
      <div class="formControls col-5"> <span class="select-box">
         <select class="select" name="pid" size="1" id="pid">
          <option value="0" <?php if($res[0]['pid'] == 0) echo 'selected' ?>>无上级分类</option>
          <?php  foreach ($ShopCateres as $key => $value) { ?>
                 <option 
                    <?php  if($res[0]['pid'] == $value['cid']) echo 'selected'; ?>
                  value="<?php echo $value['cid'] ?>">|-<?php echo $value['cname']; ?></option>
              <?php
 } ?>
        </select>
        </span> </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>分类名称：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $res[0]['cname'] ?>" placeholder="分类名称" id="cname" name="cname" >
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>排序序号：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $res[0]['sort'] ?>" placeholder="排序,默认是0" name="sort" id="sort">
      </div>
      <div class="col-4"> </div>
    </div>
    
   
    <div class="row cl">
      <div class="col-9 col-offset-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>

  </form>
</div>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/Validform_v5.3.2.js"></script>
<!-- 关闭窗口需要这2个文件 -->
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script>  
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script>
<!-- 关闭窗口需要这2个文件 -->
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script> 
<script type="text/javascript">

</script> 
</body>
</html>