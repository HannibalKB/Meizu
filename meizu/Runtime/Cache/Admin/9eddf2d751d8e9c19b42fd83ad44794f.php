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
<title>图片列表</title>
</head>
<body>
<div class="pd-20">
  <div class="cl pd-5 bg-1 bk-gray mt-20"> 
  <span class="l" style="color:red"><?php echo "订单详情--订单号:".$orderRes[0]['order_code'] ?></span> 
  &nbsp;&nbsp;&nbsp; 
  <span class="c" ><?php echo "总额:".$orderRes[0]['order_price'] ?></span>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="150">ID</th>
        <th width="150">图片</th>
        <th width="350">商品名称</th>
        <th width="100">购买数量</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach ($orderRes[0]['order_sku'] as $key => $value) { ?>
          <tr class="text-c">
            <td><?php echo $key + 1 ?></td>
            <td><a href="picture-show.html">
            <img class="picture-thumb" src="/mz/<?php echo $value['good_pic'] ?>" width="100px" height="100px" ></a></td>
            <td><?php echo $value['good_name'].$value['attr_combine'] ?></td>
            <td><?php echo $value['good_num'] ?></td>
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

</body>
</html>