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
<title>编辑banner</title>
</head>
<body>
<div class="pd-20">
  <form action="<?php echo U('admin/banner/editbanner');?>" enctype="multipart/form-data" method="post" class="form form-horizontal" id="form-user-add">
    <div class="row cl">
    <input type="hidden" value="<?php echo $res[0]['banner_id']; ?>" name="banner_id">
      <label class="form-label col-3"><span class="c-red">*</span>商品id：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo $res[0]['good_id']; ?>" placeholder="商品id" id="good_id" name="good_id" datatype="*2-16" >
      </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3">前台是否显示：</label>
      <div class="formControls col-5"> <span class="select-box">
        <select class="select" size="1" name="status" >
        <option value="1" <?php if($res[0]['status'] == 1) echo 'selected' ?>>是</option>
          <option value="0" <?php if($res[0]['status'] == 0) echo 'selected' ?>>否</option>
        </select>
        </span> </div>
      <div class="col-4"> </div>
    </div>

    <div class="row cl">
      <label class="form-label col-3">附件：</label>
      <div class="formControls col-5"> <span class="btn-upload form-group">
        <input class="input-text upload-url" type="text" name="imgurltext"  readonly  datatype="*" nullmsg="请添加附件" style="width:200px">
        <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="iconfont">&#xf0020;</i> 浏览文件</a>
        <input type="file"  name="imgurl" class="input-file" id="imgurl">
        </span> </div>
      <div class="col-4"> </div>
    </div>
    <input type="hidden" name="img_url" id="img_url" value="<?php echo $res[0]['img_url']; ?>">
    <div class="row cl defaulthide" >
      <label class="form-label col-3">banner：</label>
      <img src="/mz/<?php echo $res[0]['img_url']; ?>" width="700px" height="165px" id="bannerimg">
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
  $(document).ready(function() {
    $(document).on('change', '#imgurl', function(event) {
      // var files = $(":file");//获取到文件列表
      var fd = new FormData();
      fd.append("upload", 1);
      fd.append("upfile", $("#imgurl").get(0).files[0]);
      $.ajax({
        url: '<?php echo U("admin/banner/remoteImgUrl");?>',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        data: fd,
        success:function(data){
          if(data.error == 0){
            $('.defaulthide').css('display', 'block');
            $('#bannerimg').attr('src', "/mz/" + data.imgUrl);
            $('#img_url').val(data.imgUrl);
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