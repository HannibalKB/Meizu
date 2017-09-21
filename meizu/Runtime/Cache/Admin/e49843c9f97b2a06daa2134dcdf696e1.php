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
<script type="text/javascript" src="/mz/Public/js/jquery-2.0.2.js"></script>
<script type="text/javascript" src="/mz/Public/ueditor/ueditor.config.js"></script>    
<script type="text/javascript" src="/mz/Public/ueditor/ueditor.all.min.js"></script>
<script>
    $(function(){
        var ue = UE.getEditor('container',{
            serverUrl :'<?php echo U("admin/shop/ueditor");?>'
        });

        ue.addListener("ready", function () {
          // editor准备好之后才可以使用
          ue.setContent('<?php echo $good_res[0]["good_detail"] ?>');
      });
    })
    </script>
<title>添加商品</title>
</head>
<body>
<div class="pd-20">
  <form action="<?php echo U('admin/shop/shopedit');?>"  enctype="multipart/form-data" method="post" class="form form-horizontal" id="mainform">
    <input type="hidden" name="good_id" value="<?php echo $_GET['good_id'] ?>">
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>商品类型：</label>
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
      <label class="form-label col-3"><span class="c-red">*</span>商品分类：</label>
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
      <label class="form-label col-3"><span class="c-red">*</span>是否新品：</label>
      <div class="formControls col-5">
       <span class="select-box" style="width:200px;">
        <select class="select" name="isnew" size="1" >
            <option value="0" <?php if($good_res[0]['isnew'] == 0) echo 'selected' ?> >否</option>
            <option value="1" <?php if($good_res[0]['isnew'] == 1) echo 'selected' ?>>是</option>
        </select>
      </span>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>商品名称：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text canshu"  placeholder="商品名称" id="good_name" name="good_name" datatype="*" value="<?php echo $good_res[0]['good_name'] ?>" nullmsg="商品名不能为空" ok='' activetips="商品名称">
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>市场价格：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text canshu"  placeholder="市场价格" id="good_marketprice" name="good_marketprice" value="<?php echo $good_res[0]['good_marketprice'] ?>" datatype="*" nullmsg="市场价格不能为空" ok='' activetips="市场价格">
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>商品编号：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $good_res[0]['good_number'] ?>"  placeholder="商品编号 可为空" id="good_number" name="good_number">
      </div>
      <div class="col-4"> </div>
    </div>


    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>商品单位：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $good_res[0]['good_unit'] ?>"  placeholder="商品单位 可为空" id="good_unit" name="good_unit">
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>商品描述：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text canshu" value="<?php echo $good_res[0]['good_desc'] ?>"   placeholder="商品描述 不为空" id="good_desc" name="good_desc" ok='' activetips="商品描述">
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>发布时间：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" onfocus="WdatePicker()" value="<?php echo $good_res[0]['create_time'] ?>"  placeholder="发布时间 默认是现在" id="create_time" name="create_time">
      </div>
      <div class="col-4"> </div>
    </div>

    
    
    <!-- 规格参数 -->
    <?php
 foreach ($normsTmpArr as $key => $value) { ?>
            <div class="row cl">
              <label class="form-label col-3"><span class="c-red">*</span><?php echo $value['norms_name'] ?>：</label>
              <div class="formControls col-5">
                <input type="text" class="input-text canshu"  placeholder="<?php echo $value['norms_name'] ?>" id="good_detail"  value="<?php echo $value['norms_value'] ?>" name="canshu[]" ok='' activetips="<?php echo $value['norms_name'] ?>">
              </div>
              <div class="col-4"> </div>
            </div> 
          <?php
 } ?>
    
    

    <div class="row cl">
      <label class="form-label col-1"><span class="c-red">*</span>详情：</label>
      <div class="formControls col-5">
       <div id="container" style="width:1250px;min-height: 600px; "></div>
      </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>是否发布：</label>
      <div class="formControls col-5">
       <span class="select-box" style="width:200px;">
        <select class="select" name="ispublish" size="1">
            <option value="1" <?php if($good_res[0]['ispublish'] == 1) echo 'selected' ?>>是</option>
            <option value="0"  <?php if($good_res[0]['ispublish'] == 0) echo 'selected' ?>>否</option>
        </select>
      </span>
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3">附件：</label>
      <div class="formControls col-5"> <span class="btn-upload form-group">
        <input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly   style="width:200px" >
        <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="iconfont">&#xf0020;</i> 浏览文件</a>
        <input type="file"  name="good_pic" class="input-file" id="good_pic">
        </span> </div>
      <div class="col-4" style="margin-top:-50px;margin-left:-150px;">
          已上传图片:
          <img src="/mz/<?php echo $good_res[0]['good_pic']; ?>" width="260px" height="260px" id="thisimage">
      </div>
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
    
    // $('#mainform').validate({
    //   rules:{
    //     good_name:{
    //       required:true,
    //     },
    //     good_price:{
    //       required:true,
    //       range:[0,10000000],
    //     },
    //     good_detail:{
    //       required:true,
    //     },
    //   },
    //   messages:{
    //     good_name:{
    //       required: '商品名不能为空',
    //     },
    //     good_price:{
    //       required: '商品价格不能为空',
    //       range:'必须是正数',
    //     },
    //     good_detail:{
    //       required:'商品详情不能为空',
    //     },
    //   },
    //   errorElement:"span",
    //   errorPlacement: function(error,element){
    //       error.appendTo(element.parent().next());
    //   },

      
    // });

    
    var allowSubmit = false;  //全局变量
    //鼠标移出事件
    $('.canshu').blur(function(event) {
        var  activetips = $(this).attr('activetips');
        if($(this).val() == ''){
          $(this).parent('div').siblings('.col-4').html('<span style="color:red">'+activetips+'不可为空</span>');
          $(this).attr('ok', '');
          return false;
        }else{
          $(this).parent('div').siblings('.col-4').html(' ');
          $(this).attr('ok', 'ok');
        }
        //如果是商品的价格的话先要判断他们是否输入的是 0以上的正数字
        if(activetips == '商品价格'){
          if(!/^(([1-9][0-9]*)|(([0]\.\d{1,2}|[1-9][0-9]*\.\d{1,2})))$/.test($(this).val())){
            $(this).parent('div').siblings('.col-4').html('<span style="color:red">'+activetips+'只能为正数,两位小数</span>');
            $(this).attr('ok', '');
            return false;
          }else{
            $(this).parent('div').siblings('.col-4').html(' ');
            $(this).attr('ok', 'ok');
          }
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
            // return false;
         }
      });

       //循环文本框 如果循环的数组的属性ok都通过 那么全局变量就置为true 
       $.each(normarrobj, function(index, val) {
          if($(this).attr('ok') == ''){
             allowSubmit = false;
             return false;
           }else{
              allowSubmit = true;
           }
       });

       // 判断是否全部通过是的话就允许提交
       if(allowSubmit){
          $('#mainform').submit();
       }else{
          return false;
       }
    });

    //当值改变的时候。
    $(document).on('change', '#good_pic', function(event) {
      // var files = $(":file");//获取到文件列表
      var fd = new FormData();
      fd.append("upload", 1);
      fd.append("upfile", $("#good_pic").get(0).files[0]);
      $.ajax({
        url: '<?php echo U("admin/shop/remoteImgUrl");?>',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        data: fd,
        success:function(data){
          if(data.error == 0){
            $('#thisimage').attr('src', "/mz/" + data.imgUrl);
          }
        },
        error:function(){

        }
      })
    });


  });
</script> 
</body>
</html>