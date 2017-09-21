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
<title>商品详情</title>
</head>
<body>
<div class="pd-20">
  <form  enctype="multipart/form-data" method="post" class="form form-horizontal" id="mainform">
  
    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>所属商品类型：</label>
      <div class="formControls col-5">
       <span class="select-box" style="width:200px;">
        <select class="select" name="type_id" size="1" >
            <option value="<?php echo $good_res[0]['type_id'] ?>"><?php echo $good_res[0]['type_name'] ?></option>
        </select>
      </span>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>已选择的商品分类：</label>
      <div class="formControls col-5">
       <span class="select-box" style="width:200px;">
        <select class="select" name="cate_id" size="1" >
            <option value="<?php echo $good_res[0]['cid'] ?>"><?php echo $good_res[0]['cname'] ?></option>
        </select>
      </span>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>商品名称：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <?php echo $good_res[0]['good_name'] ?>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>市场价格：</label>
       <div class="formControls col-5" style="padding-top:4px;">
        <?php echo $good_res[0]['good_marketprice'] ?>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>是否上架：</label>
      <div class="formControls col-5" style="padding-top:4px;">
       
        <?php  if($good_res[0]['ispublish'] == 1){ ?>
              <span class="label label-success">已上架</span>
            <?php
 }elseif($good_res[0]['ispublish'] == 0){ ?>
              <span class="label">未上架</span>
            <?php
 } ?>
      
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>商品编号：</label>
      <div class="formControls col-5" style="padding-top:4px;">
         <?php echo $good_res[0]['good_number'] ?>
      </div>
      <div class="col-4"> </div>
    </div>


    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>商品单位：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <!-- <?php echo $good_res[0]['good_unit'] ?> -->台
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>商品描述：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <?php echo $good_res[0]['good_desc'] ?>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>发布时间：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <?php echo $good_res[0]['create_time'] ?>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>规格参数：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <span style="color:red">以下是该项产品的所有的参数</span>
      </div>
      <div class="col-4"> </div>
    </div>
    
    <!-- 规格参数 -->
    <?php
 foreach ($normsTmpArr as $key => $value) { ?>
            <div class="row cl">
              <label class="form-label col-4"><span class="c-red">*</span><?php echo $value['norms_name'] ?>：</label>
              <div class="formControls col-5" style="padding-top:4px;">
               <?php echo $value['norms_value'] ?>
              </div>
              <div class="col-4"> </div>
            </div> 
          <?php
 } ?>

    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>产品的主图：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <img  class="picture-thumb" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/mz/<?php echo $good_res[0]['good_pic'] ?>" title="<?php echo $good_res[0]['good_name'] ?>">
      </div>
      <div class="col-4"> </div>
    </div>
    
    <div class="row cl">
      <label class="form-label col-4"><span class="c-red">*</span>产品的详情：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <span style="color:red">以下是该项产品的详情信息</span>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-1"></label>
      <div class="formControls col-5">
       <?php echo $good_res[0]['good_detail'] ?>
      </div>
    </div>

    

  </form>
</div>
</div>

<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script>  
<script type="text/javascript" src="/mz/Public/Admin/lib/Validform_v5.3.2.js"></script>
<!-- 关闭窗口需要这2个文件 -->
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script>  
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script>
<!-- 关闭窗口需要这2个文件 -->
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script>
<script type="text/javascript" src="/mz/Public/Home/js/jquery.validate-1.13.1.js" charset="utf-8"></script>
<style type="text/css">
  .error{
    color: red;
    display: inline-block;
  }
</style>
</body>
</html>