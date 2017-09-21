<?php if (!defined('THINK_PATH')) exit();?>  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=11;IE=10;IE=9;IE=8;" /> 
  <meta name="description" content="欢迎登录和注册魅族Flyme账户，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" /> 
  <meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账户  MX M9 MX2 MX3" /> 
  <meta content="width=1080" name="viewport" /> 
  <title>登录Flyme账户</title> 
  <link href="/mz/Public/Home/css/base.css" type="text/css" rel="Stylesheet" /> 
  <link href="/mz/Public/Home/css/login.css" type="text/css" rel="Stylesheet" />
  <style type="text/css">
    .selfinputclass{
      font-size: 16px;
      height: 50px;
      line-height: 50px;
      position: absolute;
      color: #000000;
      margin-bottom: 0px;
    }
    .normalInputself{
      overflow: visible;
      position: relative;
      display: inline-block;
      padding: 0px 10px;
      width: 320px;
      height: 50px;
      line-height: 50px;
      font-size: 16px;
      border: 1px solid #dadada;
      outline: none;
      color: #474747;
      zoom: 1;
    }
    .errorclass{
      border-color: red;
      color: red; 
    }

    .successclass{
      border-color: green;
      color: green; 
    }
  </style> 
 </head> 
 <body> 
  <div id="content" class="content"> 
   <div class="ucSimpleHeader" id="header"> 
    <a href="<?php echo U('home/index/index');?>" class="meizuLogo"><i class="i_icon"></i></a> 
    <div id="trigger"> 
     <a href="<?php echo U('home/login/index');?>" id="toLogin" class="linkAGray">登录</a> 
     <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span> 
     <a href="<?php echo U('home/register/index');?>" id="toRegister" class="linkAGray">注册</a> 
    </div> 
   </div> 
<div style="position:relative;margin-left:590px;z-index:999">
<img src="/mz/Public/Index/img/left.png" alt="" style="inline-block;margin-left:-350px;position:absolute;">
   <form id="mainForm" enctype="application/x-www-form-urlencoded" method="post" action="<?php echo U('home/login/allowlogin');?>" > 
    <div class="number"> 
     <a class="linkABlue" id="toAccountLogin" href="javascript:void(0);">普通登录</a> 
     <span class="register-line"></span> 
     <a class="linkAGray" id="toVCodeLogin" href="<?php echo U('home/login/phoneLog');?>">手机登录</a> 
    </div> 
    <div class="normalInputself cycode-box fieldInput" id="cycode-box" style="margin-bottom:12px" > 
      <input class="selfinputclass" name="username" id="username" maxlength="50" placeholder="手机号/ Flyme 账户名"  /> 
    </div>
    <span  class="error geetest_error" tyle="margin-bottom:15px;"></span>  
    <div class="normalInput fieldInput" style="margin-bottom:10px"> 
     <input type="password"  name="password" placeholder="密码" id="password" maxlength="16" autocomplete="off" />
    </div>
    <span  class="error geetest_error" style="margin-bottom:15px;" ></span>

    <style type="text/css">
      .verifycode{
        position: relative;
      }
      .verifycodeimg{
        position: absolute;
        right: 0px;
        top: 0px;
        cursor: pointer;
      }
    </style>
    <!-- 检测验证码 -->
    <div class="normalInput fieldInput verifycode" style="margin-bottom:10px"> 
     <input type="text"  name="verifycode" placeholder="验证码" id="verifycode" />
     <img src="<?php echo U('home/register/verify');?>" alt="" width="100px" height="50px" class="verifycodeimg" onClick="this.src=this.src+'?'+Math.random()"  />
    </div>
    <span  class="error geetest_error" style="margin-bottom:15px;" ></span>
    <!-- 检测验证码 -->



   
    <a id="login" class="fullBtnBlue" >登录</a> 
    <div class="transferField"> 
    
    </div> 
   </form> 
</div>
  </div> 
  <div id="flymeFooter" class="footerWrap" style="top: 627px;"> 
   <div class="footerInner"> 
    <div class="footer-layer1"> 
     <div class="footer-innerLink"> 
      <a href="javascript:void(0)"  title="关于魅族">关于魅族</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void(0)" title="工作机会">工作机会</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void(0)" title="联系我们">联系我们</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void(0)" title="法律声明">法律声明</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void(0)" title="常见问题">常见问题</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a> 
     </div> 
     <div class="footer-service"> 
      <span class="service-label">客服热线</span> 
      <span class="service-num">400-788-3333</span> 
      <a id="service-online" class="service-online" href="javascript:void(0);" title="在线客服">在线客服</a> 
     </div> 
     <div class="footer-outerLink"> 
      <a class="footer-sinaMblog" href="javascript:void(0)"><i class="i_icon"></i></a> 
      <a class="footer-tencentMblog" href="javascript:void(0)"><i class="i_icon"></i></a> 
      <a id="footer-weChat" class="footer-weChat" href="javascript:void(0)"><i class="i_icon"></i></a> 
      <a class="footer-qzone" href="javascript:void(0)"><i class="i_icon"></i></a> 
     </div> 
     <div id="globalContainer" class="footer-language_menu" style="left: 589.406px; bottom: 89px;"> 
      <a href="javascript:void(0)" title="简体中文" class="checked">简体中文</a> 
      <a href="javascript:void(0)" id="i18n-link" title="English" class="ClobalItem">English</a> 
     </div> 
    </div> 
    <div class="clear"></div> 
    <div id="flymeCopyright" class="copyrightWrap"> 
     <div class="copyrightInner"> 
      <span>&copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span> 
      <a  class="linkAGray" href="javascript:void(0)">备案号: 粤ICP备13003602号-4</a> 
      <a href="javascript:void(0)" class="linkAGray" >经营许可证编号: 粤B2-20130198</a> 
      <a href="javascript:void(0)" hidefocus="true" class="linkAGray">营业执照</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="wechatPic"></div> 
  <script charset="utf-8" type="text/javascript" src="/mz/Public/Home/js/jquery-1.7.1.min.js"></script> 
  <script type="text/javascript" src="/mz/Public/Home/js/jquery.validate-1.13.1.js" charset="utf-8"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {

      $('#login').click(function(event) {
        $("#mainForm").submit();
      });

      $("#mainForm").validate({
        
        rules:{
          username:{
            required:true,
            remote:{
              url:"<?php echo U('home/login/checkusername');?>",
              type:"post",
              dataType:"json",
            }
            
          },
          // password:{
          //   required:true,
          //   remote:{
          //     url:"<?php echo U('home/login/checkpassword');?>",
          //     type:"post",
          //     dataType:"json",
          //     data:{
          //       username:function(){ return $('#username').val(); },
          //       password:function(){ return $('#password').val(); },
          //     },
          //   },
          // },
          verifycode:{
            required:true,
            remote:{
              url:"<?php echo U('home/login/checkverifycode');?>",
              type:"post",
              dataType:"json",
            }
          }
        },
        messages:{
          username:{
            required: "请输入用户名",
            remote:'帐户名不存在',
          },
          password:{
            required:"请输入密码",
            remote: "账号密码不匹配",
          },
          verifycode:{
            required:"请输入验证码",
            remote:"验证码错误",
          }
        },

        
        errorPlacement: function(error,element){
          element.parent().removeClass('successclass');
          error.appendTo(element.parent().next());
          element.parent().addClass('errorclass');
        },

        
        success:function(element){
            //如果是email获取成功之后就开启获取验证码的button
            if($(element).attr('for') == 'email'){  
              $('#getKey').removeAttr('disabled');
              $('#getKey').css('color', '#00a7ea');
              $('#getKey').css('cursor', 'pointer');
            }
            $(element).parent().prev().addClass('successclass');
            $(element).parent().prev().removeClass('errorclass');
            $(element).remove();
        },
      });
    });
  </script> 
 </body>
</html>