<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)https://i.flyme.cn/uc/webjsp/member/detail -->
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="description" content="欢迎登录和注册魅族Flyme账户，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" /> 
  <meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账户  MX M9 MX2" /> 
  <meta content="width=1080" name="viewport" /> 
  <title>用户中心管理</title> 
  <link href="/mz/Public/Home/personal/css/base.css" type="text/css" rel="Stylesheet" /> 
  <link href="/mz/Public/Home/personal/css/head.css" type="text/css" rel="Stylesheet" /> 
  <link href="/mz/Public/Home/personal/css/cycode.css" rel="stylesheet" /> 
  
  <link href="/mz/Public/Home/personal/css/actmanage.css" type="text/css" rel="Stylesheet" /> 
  <link href="/mz/Public/Home/personal/css/modifyIcon.css" type="text/css" rel="Stylesheet" />
 </head> 
 <body style="min-height: 848px;"> 
  <div id="content" class="content"> 
   <div class="headWrap"> 
    <a href="<?php echo U('home/index/index');?>" class="headLogo"><i class="i_icon"></i></a> 
    <ul class="headLeft"> 
      <li class="head-store"> 
        <a href="<?php echo U('home/index/index');?>" class="" hidefocus=""><i class="i_icon"></i></a>
       </li> 
       <li class="head-products"> 
        <a href="<?php echo U('home/index/index');?>" class="" hidefocus=""><i class="i_icon"></i></a> 
    </li> 
      <li class="head-retail"> 
      <a href="<?php echo U('home/index/index');?>" class="" hidefocus=""><i class="i_icon"></i></a> 
    </li> 
      <li class="head-flyme"> 
      <a href="<?php echo U('home/index/index');?>" class="" hidefocus=""><i class="i_icon"></i></a> 
    </li> 
    <li class="head-services"> 
      <a href="<?php echo U('home/index/index');?>" class="" hidefocus=""><i class="i_icon"></i></a> 
    </li> 
      <li class="head-bbs"> 
        <a href="<?php echo U('home/index/index');?>" class="" hidefocus=""><i class="i_icon"></i></a> 
    </li> 
    </ul> 
    <div class="headRight"> 
     <span id="loginWrap" style=""> <a id="head-name" class="linkAGray" href='<?php echo U("home/user/index");?>' title="用户487848700"><?php echo $_SESSION['username'] ?></a> <span class="line_head">|</span> <a id="head-logout" class="linkAGray" href="<?php echo U('home/user/loginout');?>">退出</a> </span> 
     <span id="unloginWrap" style="display:none;"> <a href="javascript:;" class="head-name">登录</a> <span class="line_head">|</span> <a href="javascript:;" class="head-logout">注册</a> </span> 
    </div> 
   </div> 


   <div class="flymeContent"> 
    <style type="text/css">
	.navWrap{
		height: 58px;
		border-bottom: #e4e7e9 1px solid;
	}
	.navWrap .nav{
		display: block;
		float: left;
		line-height: 58px;
	}
	.navWrap .nav li{
		position: relative;
		display: inline-block;
		margin-right: 40px;
		width: 100px;
		height: 100%;
		float: left;
	}
	.navWrap .nav li a{
		display: inline-block;
		width: 100%;
		height: 56px;
		font-size: 16px;
		text-align: center;
	}
	.navWrap .nav .current{
		margin: 0px auto;
		height: 2px;
		width: 100px;
		overflow: hidden;
		background-color: #1daeed;
	}
</style>
    <div id="navWrap" class="navWrap"> 
     <ul class="nav"> 
      <li id="accountManage"><a href="https://i.flyme.cn/uc/webjsp/member/detail" class="linkABlue">账户管理</a>
       <div class="current"></div></li> 
      <li id="contact"><a href="https://pay.meizu.com/meibi/account" class="linkAGray">魅币</a></li> 
     </ul> 
    </div> 
    <div class="clear"></div> 
    <div id="mainWrap" class="mainWrap"> 
     <div id="topWrap" class="topWrap"> 
      <div class="top-leftWrap"> 
       <span class="display fontBig">当前头像</span> 
       <img id="userImg" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/mz/<?php echo $_SESSION['face'] ?>" /> 
      </div> 
      <div class="clear"></div> 
     </div> 
     <div class="grayBorderB"> 
      <div class="titleWrap"> 
       <div class="leftWrap-bottom"> 
        <span class="fright">支持jpg、jpeg、png、bmp格式，文件小于5M</span> 
        <span class="fontBig fleft">设置新头像</span> 
       </div> 
       <div class="clear"></div> 
      </div> 
     </div>
     <style type="text/css">
      
      .meituxiuxiu{
        margin: 0 auto;
      }
     </style>
     <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.7.2.js"></script>
  <!-- 美图秀秀头像上传接口 -->
  <script src="http://open.web.meitu.com/sources/xiuxiu.js" type="text/javascript"></script>
  <script type="text/javascript">
  window.onload=function(){
    /*第1个参数是加载编辑器div容器，第2个参数是编辑器类型，第3个参数是div容器宽，第4个参数是div容器高*/
    xiuxiu.embedSWF("altContent",5,"650px","440px");
    //修改为您自己的图片上传接口
    xiuxiu.setUploadURL('http://<?php echo $_SERVER["HTTP_HOST"] ?>/mz/index.php/Home/User/facesave');
    xiuxiu.setUploadType(2);
    xiuxiu.setUploadDataFieldName("upload_file");  //文本控件的name
    xiuxiu.onInit = function ()
    {
      <?php if(empty($_SESSION['face'])): ?>xiuxiu.loadPhoto("http://open.web.meitu.com/sources/images/1.jpg");//修改为要处理的图片url 初始的图片
      <?php else: ?>
        xiuxiu.loadPhoto("http://<?php echo $_SERVER['HTTP_HOST'] ?>/mz/<?php echo $_SESSION['face'] ?>");//修改为要处理的图片url 初始的图片
        // xiuxiu.loadPhoto("http://open.web.meitu.com/sources/images/1.jpg");//修改为要处理的图片url 初始的图片<?php endif; ?>
      
    }


    xiuxiu.onUploadResponse = function (data)
    {
      var dataobj = eval('(' + data + ')');
      if(dataobj.error == 0){
        $('#userImg').attr('src',dataobj.file_path);
        // alert('头像修改成功' + dataobj.file_path);
        alert('修改成功');
        location.href="<?php echo U('home/user/index');?>";
      }else{
        alert('修改失败');
      }
    }
  }
  </script>
     <div id="upload" class="uploadbox"> 
      <div  id="altContent" class="meituxiuxiu"></div>
     </div> 
    </div> 
   </div> 
  </div> 
 </body>
</html>


<div id="flymeFooter" class="footerWrap" style="top: 840px;"> 
   <div class="footerInner"> 
    <div class="footer-layer1"> 
     <div class="footer-innerLink"> 
      <a href="javascript:void()" target="_blank" title="关于魅族">关于魅族</a> 
      <!-- <img class="foot-line" src="./账户管理_files/space.gif" />  -->
      <a href="javascript:void()" target="_blank" title="工作机会">工作机会</a> 
      <!-- <img class="foot-line" src="./账户管理_files/space.gif" />  -->
      <a href="javascript:void()" target="_blank" title="联系我们">联系我们</a> 
      <!-- <img class="foot-line" src="./账户管理_files/space.gif" />  -->
      <a href="javascript:void()" target="_blank" title="法律声明">法律声明</a> 
      <!-- <img class="foot-line" src="./账户管理_files/space.gif" />  -->
      <a href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a> 
     </div> 
     <div class="footer-service"> 
      <span class="service-label">客服热线</span> 
      <span class="service-num">400-788-3333</span> 
      <a id="service-online" class="service-online" href="javascript:void(0);" title="在线客服">在线客服</a> 
     </div> 
     <div class="footer-outerLink"> 
      <a class="footer-sinaMblog" href="javascript:void()" target="_blank"><i class="i_icon"></i></a> 
      <a class="footer-tencentMblog" href="javascript:void()" target="_blank"><i class="i_icon"></i></a> 
      <a id="footer-weChat" class="footer-weChat" href="javascript:void(0);" target="_blank"><i class="i_icon"></i></a> 
      <a class="footer-qzone" href="javascript:void()" target="_blank"><i class="i_icon"></i></a> 
     </div> 
     <div id="globalContainer" class="footer-language_menu" style="left: 752.625px; bottom: 89px;"> 
      <a href="javascript:void()" id="i18n-link" title="English" class="ClobalItem">English</a> 
     </div> 
    </div> 
    <div class="clear"></div> 
    <div id="flymeCopyright" class="copyrightWrap"> 
     <div class="copyrightInner"> 
      <span>&copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span> 
      <a href="javascript:void()" class="linkAGray" target="_blank">备案号: 粤ICP备13003602号-4</a> 
      <a href="javascript:void()" class="linkAGray" target="_blank">经营许可证编号: 粤B2-20130198</a> 
      <a target="_blank" href="javascript:void()" hidefocus="true" class="linkAGray">营业执照</a> 
     </div> 
    </div> 
   </div> 
  </div>