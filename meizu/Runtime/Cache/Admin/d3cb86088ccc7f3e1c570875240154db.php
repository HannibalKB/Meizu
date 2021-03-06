<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<link href="/mz/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<title>后台管理</title>

</head>
<body>
<header class="Hui-header cl"> <a class="Hui-logo l" title="H-ui.admin v2.3" href="/">后台管理系统</a> <a class="Hui-logo-m l" href="/" title="H-ui.admin">H-ui</a>  <span class="Hui-userbox"><span class="c-white"><?php echo $_SESSION['adminname']; ?></span> <a class="btn btn-danger radius ml-10" href="<?php echo U('admin/login/loginOut');?>" title="退出"><i class="icon-off"></i> 退出</a></span> <a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
<aside class="Hui-aside">
  <input runat="server" id="divScrollValue" type="hidden" value="" />
  <div class="menu_dropdown bk_2">
    <!-- 产品管理 -->
    <dl id="menu-article">
      <dt><i class="icon-edit"></i> 产品管理<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/shoptype/index');?>" href="javascript:void(0)">产品类型管理</a></li>
          <li><a _href="<?php echo U('admin/shoptypeattr/index');?>" href="javascript:void(0)">产品详情</a></li>
          <li><a _href="<?php echo U('admin/shopcate/index');?>" href="javascript:void(0)">产品分类管理</a></li>
          
          <li><a _href="<?php echo U('admin/shop/index');?>" href="javascript:void(0)">商品列表</a></li>
          <!-- <li><a _href="<?php echo U('admin/publishshop/index');?>" href="javascript:void(0)">发布商品</a></li> -->
        </ul>
      </dd>
    </dl>
    <!-- 轮播管理 -->
    <dl id="menu-picture">
      <dt><i class="icon-picture"></i> 轮播管理<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/banner/index');?>" href="javascript:void(0)">轮播列表</a></li>
          <!-- <li><a _href="picture-list.html" href="javascript:void(0)">图片管理</a></li> -->
        </ul>
      </dd>
    </dl> 
    <!-- 订单管理 -->
    <dl id="menu-product">
      <dt><i class="icon-beaker"></i> 订单管理<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/order/index');?>" href="javascript:void(0)">订单列表</a></li>
        </ul>
      </dd>
    </dl>
    <!-- 会员管理 -->
    <dl id="menu-user">
      <dt><i class="icon-user"></i> 会员管理<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/user/userlist');?>" href="javascript:;">会员列表</a></li>
          <!-- <li><a _href="user-list-del.html" href="javascript:;">删除的用户</a></li> -->
        </ul>
      </dd>
    </dl>
    <!-- 管理员管理 -->
    <dl id="menu-admin">
      <dt><i class="icon-key"></i> 管理员管理<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/role/index');?>" href="javascript:void(0)">角色管理</a></li>
          <li><a _href="<?php echo U('admin/rules/index');?>" href="javascript:void(0)">权限管理</a></li>
          <li><a _href="<?php echo U('admin/Authcate/index');?>" href="javascript:void(0)">规则分类管理</a></li>
          <li><a _href="<?php echo U('admin/admin/index');?>" href="javascript:void(0)">管理员列表</a></li>
        </ul>
      </dd>
    </dl>
     <!-- 信息反馈 -->
    <dl id="menu-comments">
      <dt><i class="icon-comments"></i> 信息反馈<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/feedback/index');?>" href="javascript:;">反馈列表</a></li>
          <li><a _href="<?php echo U('admin/feedback/feedcate');?>" href="javascript:void(0)">反馈分类列表</a></li>
        </ul>
      </dd>
    </dl>
    <!-- 系统日志 -->
    <dl id="menu-system">
      <dt><i class="icon-cogs"></i> 系统日志<i class="iconfont menu_dropdown-arrow"></i></dt>
      <dd>
        <ul>
          <li><a _href="<?php echo U('admin/Operation/index');?>" href="javascript:void(0)">操作日志</a></li>
        </ul>
      </dd>
    </dl>
  </div>
</aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
  <div id="Hui-tabNav" class="Hui-tabNav">
    <div class="Hui-tabNav-wp">
      <ul id="min_title_list" class="acrossTab cl">
        <li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
      </ul>
    </div>
    <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="icon-step-backward"></i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="icon-step-forward"></i></a></div>
  </div>
  <div id="iframe_box" class="Hui-article">
    <div class="show_iframe">
      <div style="display:none" class="loading"></div>
      <iframe scrolling="yes" frameborder="0" src="<?php echo U('admin/index/welcome');?>"></iframe>
    </div>
  </div>
</section>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/Validform_v5.3.2.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script> 
</body>
</html>