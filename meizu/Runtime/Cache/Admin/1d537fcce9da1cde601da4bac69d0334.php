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
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]--><title>用户查看</title>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
  <?php
 if($res[0]['face'] == ''){ ?>
        <img class="avatar size-XL l" src="/mz/Public/home/images/defaultface.png">
      <?php
 }else{ ?>
        <img class="avatar size-XL l" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/mz/<?php echo $res[0]['face'] ?>">
      <?php
 } ?>
    
  <dl style="margin-left:80px; color:#fff">
    <dt><span class="f-18"><?php echo ($res[0]['username']); ?></span> <span class="pl-10 f-12">积分：<?php echo ($res[0]['rank']); ?></span></dt>
    <dd class="pt-10 f-12" style="margin-left:0"><?php echo ($res[0]['introduce']); ?></dd>
  </dl>
</div>
<div class="pd-20">
  <table class="table">
    <tbody>
      <tr>
        <th class="text-r" width="120">用户编号：</th>
        <td><?php echo ($res[0]['uid']); ?></td>
      </tr>
      <tr>
      <tr>
        <th class="text-r">手机号码：</th>
        <td>
          <?php
 if($res[0]['phone'] == ''){ echo '<span style="color:red">该用户还没有绑定手机</span>'; }else{ echo $res[0]['phone']; } ?> 
        </td>
      </tr>
        <th class="text-r" width="120">邮箱：</th>
        <td>
        <?php
 if($res[0]['email'] == ''){ echo '<span style="color:red">该用户还没有绑定邮箱</span>'; }else{ echo $res[0]['email']; } ?>
        </td>
      </tr>
      <tr>
        <th class="text-r" width="120">用户名：</th>
        <td><?php echo ($res[0]['username']); ?></td>
      </tr>
      <tr>
        <th class="text-r">用户状态：</th>
        <td>
          <?php
 if($res[0]['status'] == 1){ ?>
               <span class="label label-success radius">已启用</span>
              <?php
 }elseif($res[0]['status'] == -1){ ?>
                <span class="label radius">已停用</span>
              <?php
 } ?>
        </td>
      </tr>
      <tr>
        <th class="text-r">性别：</th>
        <td>
          
          <?php
 switch ($res[0]['sex']) { case '0': echo '保密'; break; case '1': echo '男'; break; case '2': echo '女'; break; default: echo '保密'; break; } ?>
        </td>
      </tr>
      <tr>
        <th class="text-r">住址：</th>
        <td><?php echo ($res[0]['city']["$res[0]['addr']"]); ?></td>
      </tr>
      <tr>
        <th class="text-r">出生日期：</th>
        <td><?php echo ($res[0]['birthday']); ?></td>
      </tr>
      <tr>
        <th class="text-r">积分：</th>
        <td><?php echo ($res[0]['rank']); ?></td>
      </tr>
      <tr>
        <th class="text-r">注册时间：</th>
        <td><?php echo date("Y-m-d H:i:s", $res[0]['reg_time'])?></td>
      </tr>
      <tr>
        <th class="text-r">注册IP：</th>
        <td><?php echo ($res[0]['reg_ip']); ?></td>
      </tr>
      <tr>
        <th class="text-r">最后一次登录：</th>
        <td><?php echo ($res[0]['login_time']); ?></td>
      </tr>
      <tr>
        <th class="text-r">最后一次登录IP：</th>
        <td><?php echo ($res[0]['login_ip']); ?></td>
      </tr>
      <tr>
        <th class="text-r">个性签名：</th>
        <td><?php echo ($res[0]['signnature']); ?></td>
      </tr>

    </tbody>
  </table>
</div>
<script type="text/javascript" src="/mz/Public/Admin/js/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
</body>
</html>