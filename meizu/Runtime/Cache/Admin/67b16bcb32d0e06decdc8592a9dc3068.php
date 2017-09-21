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
<title>编辑sku价格和库存</title>
</head>
<body>
<div class="pd-20">
  <form accept="<?php echo U('admin/shop/editsku');?>" method="post" class="form form-horizontal" id="mainform">
  
    <input type="hidden" name="listid" value="<?php echo $_GET['listid']?>">
    <input type="hidden" name="good_id" value="<?php echo $_GET['good_id']?>">
    <input type="hidden" name="type_id" value="<?php echo $_GET['type_id']?>">
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>商品名称：</label>
      <div class="formControls col-5" style="padding-top:4px;">
       <?php echo $res[0]['good_name'] ?>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>sku详情参数：</label>
      <div class="formControls col-5" style="padding-top:4px;">
        <?php echo $res[0]['sku_detail'] ?>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>该sku价格：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text canshu"   placeholder="价格" value="<?php echo $res[0]['sku_price'] ?>" id="good_price" activetips="商品价格" ok="" name="good_price">
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>该sku库存：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text canshu" value="<?php echo $res[0]['good_stock'] ?>"  placeholder="库存" activetips="库存" id="good_stock" name="good_stock" ok="">
      </div>
      <div class="col-4"> </div>
    </div>
  
    <div class="row cl">
      <div class="col-9 col-offset-3">
        <input id="submitbtn" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
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
  /*.errorclass{
    border-color: red;
    color: red; 
  }
  .successclass{
    border-color: green;
    color: green; 
  }*/
</style>
<script type="text/javascript">
  $(document).ready(function() {
    var allowSubmit = true;  //全局变量
    //鼠标移出事件
    $('.canshu').blur(function(event) {
        var  activetips = $(this).attr('activetips');
        if($(this).val() == ''){
          $(this).parent('div').siblings('.col-4').html('<span style="color:red;padding-top:4px;">'+activetips+'不可为空</span>');
          $(this).attr('ok', '');
          return false;
        }else{
          $(this).parent('div').siblings('.col-4').html(' ');
          $(this).attr('ok', 'ok');
        }
        //如果是商品的价格的话先要判断他们是否输入的是 0以上的正数字
        if(!/^[0-9]*$/.test($(this).val())){
          $(this).parent('div').siblings('.col-4').html('<span style="color:red">'+activetips+'只能为正数或者0</span>');
          $(this).attr('ok', '');
          return false;
        }else{
          $(this).parent('div').siblings('.col-4').html(' ');
          $(this).attr('ok', 'ok');
        }
    });
    //验证规格参数不可为空
    var normarrobj = $('.canshu');
    $(document).on('click', '#submitbtn', function(event) {
      //循环检验是否为空 为空的话就提示出来 并且全局变量置为false 通过话就给ok属性添加ok
       $.each(normarrobj, function(index, val) {
         if($(this).val() == ''){
            var  activetips = $(this).attr('activetips');
            $(this).parent('div').siblings('.col-4').html('<span style="color:red">'+activetips+'不可为空</span>');
            $(this).attr('ok', '');
            $(this).focus();
            allowSubmit = false;
          }else{
            $(this).attr('ok', 'ok');
          }
      });

       //循环文本框 如果循环的数组的属性ok都通过 那么全局变量就置为true 
       $.each(normarrobj, function(index, val) {
          if($(this).attr('ok') == ''){
             allowSubmit = false;
             return false;
           }
           allowSubmit = true;
       });

       // 判断是否全部通过是的话就允许提交
       if(allowSubmit){
          $('#mainform').submit();
       }else{
          return false;
       }
    });


  });
</script> 
</body>
</html>