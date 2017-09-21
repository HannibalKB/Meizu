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
  .errorclass{
    border: 1px solid red;
  }
  .successclass{
    border: 1px solid #1ece6d;
  }
</style> 
    <div id="navWrap" class="navWrap"> 
     <ul class="nav"> 
      <li id="accountManage"><a href="javascript:void()" class="linkABlue">账号管理</a>
       <div class="current"></div></li> 
      <li id="contact"><a href="javascript:void()" class="linkAGray">魅币</a></li> 
     </ul> 
    </div> 
    <div class="clear"></div> 
    <div class="topWrap"> 
     <div class="top-leftWrap">
     <?php
 if($res[0]['face'] != ''){ ?>
            <img id="userImg" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/mz/<?php echo $_SESSION['face'] ?>" />
          <?php
 }else{ ?>
            <img id="userImg" src="/mz/Public/home/images/defaultface.png" />
          <?php
 } ?> 
      <a id="modifyIconTip" class="modifyIconTip modify" href="<?php echo U('home/user/userface');?>">编辑头像&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a> 
      <a class="modifyIconTip-bg"></a> 
     </div> 
     <div class="top-rightWrap"> 
      <div id="nickNameTitle" class="lineWrap nickname"> 
       <label id="nickName"> 用户<?php echo $_SESSION['username'] ?> </label> 
       <a id="nickNameEdite" class="pointer modify"><i class="i_icon"></i></a> 
      </div> 
      <div id="nickNameCon" class="lineWrap modify_content nickNameCon" style="display: none"> 
       <form style="*display:inline" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <input type="text" value="" name="nickname" id="newnickName" class="normalInput" /> 
        </div> 
        <div class="clear"></div> 
        <div class="edit"> 
         <a class="fullBtnBlue save_form fleft" id="editSave">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="editCancel">取消</a> 
        </div> 
        <div class="clear"></div> 
       </form> 
      </div> 
      <div class="lineWrap grayTip nameWrapTop" id="getUserNameWrap" style="display: none"> 
       <label>账户名：</label> 
       <span id="userName">@flyme.cn</span> 
       <input type="hidden" value="" id="memberFlyme" /> 
      </div> 
      <div id="setUserNameWrap" class="lineWrap grayTip ftop"> 
       <a id="setuserName" class="blue modify" href="javascript:;">设置魅族账户</a> 
      </div> 
      <div id="setaccount" class="modify_content" style="display: none"> 
       <form novalidate="novalidate"> 
        <div> 
         <div class="normalInput"> 
          <input type="text" value="" name="account" id="flyme" class="username" maxlength="32" placeholder="账户名" /> 
          <span class="grayTip flymeSpan">@flyme.cn</span> 
         </div>
         <div class="clear"></div> 
         <label class="flymeTip">账户名保存后不可修改</label> 
        </div> 
        <div class="clear"></div> 
        <div class="fBtnleft"> 
         <a class="fullBtnBlue save_form fleft" id="newSave">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="newCancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
     </div> 
     <div class="clear"></div> 
    </div> 
    <div class="mainWrap"> 
     <div class="titleWrap grayBorderB grayBorderTop"> 
      <div class="title-leftWrap"> 
       <span>账户安全</span> 
      </div> 
      <div class="title-rightWrap"> 
       <span>安全等级：</span> 
       <span id="safeLevel" class="green">80</span> 
       <a id="safeLevelTip" class="pointer"><i class="i_icon"></i></a> 
      </div> 
      <div class="clear"></div> 
     </div> 
     <div class="bodyWrap"> 
      <div id="pwdWrap" class="lineWrap pwdWrapTop"> 
       <div class="item-right">
        <a href="javascript:void(0);" class="linkABlue modify" id="modifyPassword">修改</a>
       </div> 
       <div class="item-left">
        密码
       </div> 
       <div class="item-middle"></div> 
       <div class="clear"></div> 
      </div> 

      <!-- 修改密码的区域start -->
      <div id="changePasswordWrap" class="grayBorderB modify_content" style="display:none;"> 
       <div class="cEmail-titleWrap"> 
        <span>修改密码</span> 
       </div> 
       <form class="cEmail-bodyWrap" id="passwordformhzj" action="<?php echo U('home/user/allowEditPassword');?>" method="post" > 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">账户密码</label> 
         </div> 
         <input type="password" name="password" id="ce-u-current_pwd" class="normalInput" maxlength="16" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">新密码</label> 
         </div> 
         <input type="password" placeholder="不包括特殊字符大于8位小于16位" name="resetPassword" id="resetPassword" class="normalInput" maxlength="16" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a href="javascript:;" class="fullBtnBlue save_form fleft" id="ce-u-pwdsave">保存</a> 
         <a href="javascript:;" class="fullBtnGray cancel_form fleft" id="ce-u-pwdcancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <!-- 修改密码的区域end -->

      <div id="emailWrap" class="lineWrap"> 
       <!--if未验证 --> 
       <div class="item-right" style="display:none;"> 
        <a id="emailbindEdite" href="javascript:void(0);" class="linkABlue modify" data-type="modify">修改</a> 
       </div> 
       <!-- end if --> 
       <!--if已验证  --> 
       <div class="item-right" style="display:none;"> 
        <a id="emailEdite" href="javascript:void(0);" class="linkABlue modify" data-type="modify">修改</a> 
       </div> 
       <!-- end if --> 
       <!--if--> 
       <div class="item-right">
        <?php  if($_SESSION['email'] == ''){ ?>
               <a id="emailBind" href="javascript:void(0);" class="linkABlue modify" data-type="bind">绑定</a> 
            <?php
 }else{ ?>
              <a id="emailBind123" href="javascript:void(0);" class="linkABlue modify" data-type="update">修改</a>
            <?php
 } ?> 
       
       </div> 
       <div class="item-left">
        邮箱
       </div> 
       <!--if--> 
       <div class="item-middle" id="email-item-middle1" style="display:none;"> 
        <span id="current_email" class="email bold"></span>
        <br /> 
        <span class="grayTip">已验证，可通过邮箱找回密码</span> 
       </div> 
       <!-- end if --> 
       <!--if-->
       <?php
 if($_SESSION['email'] == ''){ ?>
            <div class="item-middle" id="email-item-middle2"> 
              <span class="bold">未绑定</span>
              <br /> 
              <span class="grayTip">绑定后可通过邮箱找回密码</span> 
            </div>
          <?php
 }else{ ?>
            <div class="item-middle" id="email-item-middle2"> 
              <span class="bold"><?php echo $res[0]['email'] ?></span>
              <br /> 
              <span class="grayTip">已验证，可以修改已绑定的邮箱</span> 
            </div>
          <?php
 } ?> 
        
       <!-- end if --> 
       <!--if--> 
       <div class="item-middle" id="email-item-middle3" style="display:none;"> 
        <!-- <span class='bold'>绑定未激活</span><br> --> 
        <span class="email bold"></span>
        <br /> 
        <span id="notice" class="ftipright">已发验证邮件，请尽快验证</span> 
        <a id="renotice" href="javascript:void(0);" data-status="1" class="linkABlue renotice">重发</a> 
        <span id="timeup" class="timeup" style="display:none;">60</span> 
        <br /> 
        <span class="grayTip">验证后可在互动社区发帖、回复等，还可通过邮箱找回密码，提高账户安全级别</span> 
       </div> 
       <!-- end if --> 
       <!-- end if --> 
       <div class="clear"></div> 
      </div> 
      <!-- //绑定输入框 --> 

      <!-- 绑定邮箱第一步，需要先验证密码开始 --> 
      <div id="bindEmail-step1" class="grayBorderT grayBorderB modify_content " style="display:none;"> 
       <div class="cEmail-titleWrap"> 
        <span id="editEmail">绑定邮箱（验证密码）</span> 
       </div> 
       <form class="cEmail-bodyWrap" id="emailBindhzj" action="" method="post"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">账户密码</label> 
         </div> 
         <input type="password" value="" name="password" id="ce-u-password-bind" class="normalInput" maxlength="16" />
         <span id="emialupdatepasswordhzj" class="error"></span> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue ce-u-save save_form fleft" id="bindEmail-step1-savenext">下一步</a> 
         <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="bindEmail-step1-savenextcancel">取消</a> 
         <div class="clear"></div> 
        </div> 
        <div class="clear"></div> 
       </form> 
      </div> 
      <!-- 绑定邮箱第一步，需要先验证密码结束 --> 

      <!-- 绑定邮箱第二 --> 
      <div id="bindEmailWraphzj" class="grayBorderT grayBorderB modify_content" style="display: none;"> 
       <div class="bindEmail-titleWrap"> 
        <span>绑定邮箱</span> 
       </div> 
       <form class="bindEmail-bodyWrap" id="bindemailstep2hzj" action="<?php echo U('home/user/bindemail');?>"  method="post"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">邮箱</label> 
         </div> 
         <input type="text" value="" data-key="kapkey" id="bindemailhzj" name="email" id="ce-u-bind_email" class="normalInput" maxlength="32" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">邮件验证码</label> 
         </div> 
         <div class="normalInput bottom"> 
          <input type="text" name="kapkey" id="kapkey" class="kapkey" maxlength="6" autocomplete="off" />
          <span class="form-line"></span> 
          <a id="getKey-bindEmail" data-value="5" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey" disabled="disabled">获取验证码</a> 
          <!-- <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a>  -->
         </div> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue ce-u-save save_form fleft" id="ce-u-bindsave">保存</a> 
         <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="ce-u-bindcancelhzj">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <div id="changeEmailWrap-unactiveone" class="grayBorderT grayBorderB modify_content " style="display:none;"> 
       <div class="cEmail-titleWrap"> 
        <span id="editEmail">修改邮箱（验证密码）</span> 
       </div> 
       <form class="cEmail-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">账户密码</label> 
         </div> 
         <input type="password" value="" name="password" id="ce-u-password" class="normalInput" maxlength="16" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue ce-u-save save_form fleft" id="ce-u-savenext">下一步</a> 
         <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="ce-u-savenextcancel">取消</a> 
         <div class="clear"></div> 
        </div> 
        <div class="clear"></div> 
       </form> 
      </div> 
      <div id="changeEmailWrap-unactive" class="grayBorderT grayBorderB modify_content " style="display:none;"> 
       <div class="cEmail-titleWrap"> 
        <span id="editEmail">修改邮箱</span> 
       </div> 
       <form class="cEmail-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">新邮箱</label> 
         </div> 
         <input type="text" value="" data-key="kapkey" name="email" id="ce-u-new_email" class="normalInput" maxlength="32" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">邮件验证码</label> 
         </div> 
         <div class="normalInput bottom"> 
          <input type="text" name="kapkey" id="ce-u-passwordvalidate_code" class="kapkey" maxlength="6" autocomplete="off" /> 
          <span class="form-line"></span> 
          <a id="getKeynewEmail" data-value="15" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a> 
          <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a> 
         </div> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue ce-u-save save_form fleft" id="ce-u-save">保存</a> 
         <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="ce-u-cancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <!-- //编辑输入框，激活 --> 
      <div id="changeEmailWrap-activeone" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="cEmail-titleWrap"> 
        <span>修改邮箱第一步</span> 
       </div> 
       <form class="cEmail-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap" id="currentEmail"> 
         <div class="leftWrap"> 
          <label class="leftLabel">当前邮箱</label> 
         </div> 
         <span id="ce-u-current_email" data-key="kapkey" class="normalInput current_email bold"></span> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">邮件验证码</label> 
         </div> 
         <div class="normalInput bottom"> 
          <input type="text" name="kapkey" id="ce-u-passwordvalidate_codeone" class="kapkey" maxlength="6" autocomplete="off" /> 
          <span class="form-line"></span> 
          <a id="getKeyone" data-value="12" href="javascript:void(0);" data-type="2" class="linkABlue  get_kapkey">获取验证码</a> 
          <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a> 
         </div> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue ce-u-save save_form fleft" id="ce-u-activenext">下一步</a> 
         <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="ce-u-activecancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <div id="changeEmailWrap-active-two" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="cEmail-titleWrap"> 
        <span>修改邮箱第二步</span> 
       </div> 
       <form class="cEmail-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">新邮箱</label> 
         </div> 
         <input type="text" value="" data-key="kapkey" name="email" id="ce-u-active_email" class="normalInput" maxlength="32" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">邮件验证码</label> 
         </div> 
         <div class="normalInput bottom"> 
          <input type="text" name="kapkey" id="ce-u-passwordvalidate_codetwo" class="kapkey" maxlength="6" autocomplete="off" /> 
          <span class="form-line"></span> 
          <a id="getKey-activeEmail" data-value="12" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a> 
          <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a> 
         </div> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="ce-u-activesave">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="ce-u-activecanceltwo">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <div id="telWrap" class="lineWrap"> 
       <!--if--> 
       <div class="item-right"> 
        <a id="editMobile" href="javascript:void(0);" class="linkABlue modify">修改</a> 
       </div> 
       <!-- end if --> 
       <!--if--> 
       <div class="item-right" style="display:none;"> 
        <a id="bindMobile" href="javascript:void(0);" class="linkABlue modify">绑定</a> 
       </div> 
       <!-- end if --> 
       <div class="item-left">
        手机号码
       </div> 
       <!--if--> 
       <div class="item-middle" id="telModify"> 
        <span id="current_phone" class="bold"><?php echo $res[0]['phone']; ?></span>
        <br /> 
        <span class="grayTip">已验证，可通过手机找回密码</span> 
       </div> 
       <!-- end if --> 
       <!--if--> 
       <div class="item-middle" id="telBind" style="display:none;"> 
        <span class="bold">未绑定</span>
        <br /> 
        <span class="grayTip">绑定后可通过手机号码登录、找回密码、异常登录提醒、<br />登录不常用设备验证</span> 
       </div> 
       <!-- end if --> 
       <div class="clear"></div> 
      </div> 
      <!-- 绑定手机，验证密码 --> 
      <div id="bindTel-step1" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="setQuestion-titleWrap"> 
        <span>绑定手机号（验证密码）</span> 
       </div> 
       <form class="setQuestion-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">账户密码</label> 
         </div> 
         <input type="password" value="" name="password" id="ce-u-passwordNew-bindTel" class="normalInput" maxlength="16" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="bindTel-step1-setTelCheckPassSave">下一步</a> 
         <a class="fullBtnGray cancel_form fleft" id="bindTel-step1-setTelCheckPassCancel">取消</a> 
         <div class="clear"></div> 
        </div> 
        <div class="clear"></div> 
       </form> 
      </div> 
      <div id="bindTelWrap" class="grayBorderT grayBorderB modify_content" style="display: none;"> 
       <div class="bindTel-titleWrap"> 
        <span>绑定手机号码</span> 
       </div> 
       <form class="bindTel-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">手机号码</label> 
         </div> 
         <!-- <input type="text" data-key="kapkey" name="phone" id="ce-u-bind_tel" class='normalInput' /> --> 
         <div class="normalInput cycode-box show-cycode" id="cycode-box"> 
          <div class="cycode-selectbox"> 
           <span class="cycode-selected"> <span class="ipt-cycode" id="cycode">+86</span> <i class="arrow-down"></i> </span> 
           <input type="text" data-key="kapkey" name="phone" id="ce-u-bind_tel" maxlength="11" /> 
          </div> 
   
         </div> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">验证码</label> 
         </div> 
         <div class="normalInput bottom"> 
          <input type="text" name="kapkey" id="kapkeyEmail" class="kapkey" maxlength="6" autocomplete="off" /> 
          <span class="form-line"></span> 
          <a id="getKey-bindTel" data-value="6" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a> 
          <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a> 
         </div> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="ce-u-bindTelsave">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="ce-u-bindTelcancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <!-- 修改手机 验证密码 --> 
      <div id="setTelCheckPass" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="setQuestion-titleWrap"> 
        <span>修改手机号（验证密码）</span> 
       </div> 
       <form class="setQuestion-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">账户密码</label> 
         </div> 
         <input type="password" value="" name="password" id="ce-u-passwordNew" class="normalInput" maxlength="16" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="setTelCheckPassSave">下一步</a> 
         <a class="fullBtnGray cancel_form fleft" id="setTelCheckPassCancel">取消</a> 
         <div class="clear"></div> 
        </div> 
        <div class="clear"></div> 
       </form> 
      </div> 
      <div id="changeTelWrap-activeNew" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="cTel-titleWrap"> 
        <span>输入新手机号</span> 
       </div> 
       <form class="cEmail-bodyWrap" > 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">新手机号码</label> 
         </div> 
         <input type="text" value="" data-key="kapkey" name="phone" id="ce-u-cTelNew" class="normalInput" maxlength="11" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">验证码</label> 
         </div> 
         <div class="normalInput bottom"> 
          <input type="text" name="kapkey" id="kapkeyTelNew" class="kapkey" maxlength="6" autocomplete="off" /> 
          <span class="form-line"></span> 
          <a id="getKey-activeTelNew" data-value="14" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a> 
          <!-- <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a> --> 
         </div> 
         <div clear="clear"></div> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="ce-u-telsaveNew">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="ce-u-telcancelNew">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <div id="questionWrap" class="lineWrap"> 
       <div class="item-left">
        密保问题
       </div> 
       <div id="questionModifyTip" class="item-right"> 
        <a id="modifySafe" href="javascript:void(0);" class="linkABlue modify">修改</a> 
       </div> 
       <div id="questionSettedTip" class="item-middle"> 
        <span id="tip" class="bold">已设置</span>
        <br /> 
        <span class="grayTip">可通过密保问题找回密码</span> 
       </div> 
       <div class="clear"></div> 
      </div> 
      <!-- 设置密保 --> 
      <div id="setQuestion-stepOne" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="setQuestion-titleWrap"> 
        <span>设置密保（验证密码）</span> 
       </div> 
       <form class="setQuestion-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">账户密码</label> 
         </div> 
         <input type="password" value="" name="password" id="setQuestion_pwd" class="normalInput" maxlength="16" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="setQuestionSave">下一步</a> 
         <a class="fullBtnGray cancel_form fleft" id="setQuestionCancel">取消</a> 
         <div class="clear"></div> 
        </div> 
        <div class="clear"></div> 
       </form> 
      </div> 
      <div id="setQuestion-stepTwo" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="setQuestion-titleWrap"> 
        <span>设置密保</span> 
       </div> 
       <form class="setQuestion-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">问题一：</label> 
         </div> 
         <button type="button" class="dropdown" data-name="questionCode1" id="questionCode1" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode1" /></button> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">答案：</label> 
         </div> 
         <input type="text" value="" maxlength="32" name="answer1" id="qanswer1" class="normalInput" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">问题二：</label> 
         </div> 
         <button type="button" class="dropdown" data-name="questionCode2" id="questionCode2" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode2" /></button> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">答案：</label> 
         </div> 
         <input type="text" value="" maxlength="32" name="answer2" id="qanswer2" class="normalInput" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="ce-u-setQuetionsave">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="ce-u-setQuetioncancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <!-- 修改密保 --> 
      <div id="changeQuestionWrap" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="cQuestion-titleWrap"> 
        <span>修改密保(验证)</span> 
       </div> 
       <form class="cQuestion-bodyWrap" novalidate="novalidate"> 
        <div class="questionlineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">问题一：</label> 
         </div> 
         <span id="cqone" class="normalInput current_email">您母亲的姓名是？</span> 
         <input type="hidden" name="questionCode1" value="2" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">答案：</label> 
         </div> 
         <input type="text" value="" maxlength="32" name="answer1" id="answer1" class="normalInput" /> 
        </div> 
        <div class="questionlineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">问题二：</label> 
         </div> 
         <span id="cqtwo" class="normalInput current_email">您父亲的姓名是？</span> 
         <input type="hidden" name="questionCode2" value="3" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">答案：</label> 
         </div> 
         <input type="text" value="" maxlength="32" name="answer2" id="answer2" class="normalInput" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="ce-u-cquestionsave">下一步</a> 
         <a class="fullBtnGray cancel_form fleft" id="ce-u-cquestioncansel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
      <div id="resetQuestion" class="grayBorderT grayBorderB modify_content" style="display:none;"> 
       <div class="cQuestion-titleWrap"> 
        <span>修改密保(设置新的密保问答)</span> 
       </div> 
       <form class="cQuestion-bodyWrap" novalidate="novalidate"> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">问题一:</label> 
         </div> 
         <button type="button" class="dropdown" data-name="questionCode1" id="questionCode3" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode1" /></button> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">答案：</label> 
         </div> 
         <input type="text" value="" maxlength="32" name="answer1" id="resetanswer1" class="normalInput" /> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">问题二:</label> 
         </div> 
         <button type="button" class="dropdown" data-name="questionCode2" id="questionCode4" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode2" /></button> 
        </div> 
        <div class="lineWrap"> 
         <div class="leftWrap"> 
          <label class="leftLabel">答案：</label> 
         </div> 
         <input type="text" value="" maxlength="32" name="answer2" id="resetanswer2" class="normalInput" /> 
        </div> 
        <div class="lineWrap"> 
         <label class="fleft">&nbsp;</label> 
         <a class="fullBtnBlue save_form fleft" id="ce-u-resetQuetionsave">保存</a> 
         <a class="fullBtnGray cancel_form fleft" id="ce-u-resetQuetioncancel">取消</a> 
         <div class="clear"></div> 
        </div> 
       </form> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <input type="hidden" name="form_resubmit_token_key" id="form_resubmit_token_key" value="9H9222E5RE3M5EXDPYBHQODCHIMYI6XC" /> 
  <ul style="display:none;" id="mail" class="bRadius2 boxShadow10">
   <li data-mail="@qq.com" class="item">@qq.com</li>
   <li data-mail="@sina.com" class="item">@sina.com</li>
   <li data-mail="@126.com" class="item">@126.com</li>
   <li data-mail="@163.com" class="item">@163.com</li>
   <li data-mail="@gmail.com" class="item">@gmail.com</li>
  </ul> 
  
  <div id="wechatPic"></div>
  <ul class="dropdown_menu" data-target="#questionCode1" style="display: none; position: absolute; z-index: 999;"> 
   <li data-text="您的出生地是？" data-value="1">您的出生地是？</li> 
   <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li> 
   <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li> 
   <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li> 
   <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li> 
   <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li> 
   <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li> 
   <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li> 
   <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li> 
   <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li> 
   <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li> 
  </ul> 
  <ul class="dropdown_menu" data-target="#questionCode2" style="display: none; position: absolute; z-index: 999;"> 
   <li data-text="您的出生地是？" data-value="1">您的出生地是？</li> 
   <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li> 
   <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li> 
   <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li> 
   <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li> 
   <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li> 
   <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li> 
   <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li> 
   <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li> 
   <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li> 
   <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li> 
  </ul> 
  <ul class="dropdown_menu" data-target="#questionCode3" style="display: none; position: absolute; z-index: 999;"> 
   <li data-text="您的出生地是？" data-value="1">您的出生地是？</li> 
   <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li> 
   <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li> 
   <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li> 
   <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li> 
   <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li> 
   <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li> 
   <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li> 
   <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li> 
   <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li> 
   <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li> 
  </ul> 
  <ul class="dropdown_menu" data-target="#questionCode4" style="display: none; position: absolute; z-index: 999;"> 
   <li data-text="您的出生地是？" data-value="1">您的出生地是？</li> 
   <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li> 
   <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li> 
   <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li> 
   <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li> 
   <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li> 
   <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li> 
   <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li> 
   <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li> 
   <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li> 
   <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li> 
  </ul>

  

  <!-- 提示框 -->
  <style type="text/css">
    
    .white_content{ 
      /*display: none; */
      /*position: absolute; */
      top: 25%; 
      left: 25%; 
      width: 50%;
      height: 100%; 
      padding: 16px; 
      border: 16px solid orange; 
      background-color: white; 
      z-index:1002; 
      overflow: auto; 
    } 

    .black_overlay{ 
      display: none; 
      position: absolute;
      top: 0%; 
      left: 0%; 
      width: 100%;
      height: 100%; 
      background-color: black; 
      z-index:1001; 
      /*-moz-opacity: 0.3; */
      /*opacity:0.3; */
      background:rgba(0, 0, 0, 0.5);
      /*filter: alpha(opacity=30); */
    } 
    .content_box{
      width: 100%;
      height: 100%;
      /*color: white;*/
      position: relative;

    }
    .content_son{
      width: 420px;
      height: 280px;
      margin: 210px auto;
      background-color: white;

    }
    .top_tips{
      width: 420px;
      height: 40px;
      background-color: #fafafa;
      line-height: 40px;
      font-size: 14px;
      font-family: "微软雅黑";
      position: relative;
    }
    .alink{
      display: inline-block;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: gray;
      background:rgba(0, 0, 0, 0.3);
      position: absolute;
      top: 10px;
      right: 15px;
      text-align: center;
      line-height: 20px;
      color: white;
      font-weight: bold;
    }
    .alink:hover{
      background-color: gray;
      color: white;
    }
    .mid_wordsa{
      margin-top: 25px;
      color: black;
      text-align: center;
    }
    .normalInput_self{
      margin-top: 10px;
      position: relative;
      display: inline-block;
      padding: 0px 10px;
      width: 320px;
      height: 50px;
      line-height: 50px;
      font-size: 16px;
      margin-bottom: 20px;
      border: 1px solid #dadada;
      outline: none;
      color: #474747;
      zoom: 1;
      /*overflow: hidden;*/
      padding-left: 35px;
      margin-left: 25px;
    }
    .verifycode{
      font-size: 16px;
      width: 100%;
      height: 50px;
      line-height: 50px;
      margin-left: 20px;
    }
    .pointer_self{
      position: absolute;
      width: 88px;
      height: 40px;
      top: 4px;
      right: 5px;
      overflow: hidden;
      margin-left: 13px;
      cursor: pointer;
    }
    .reforms{
      margin-top: -5px;
      margin-left: -15px;
    }
  </style>

  <div class="black_overlay" id="fade">
    <div class="content_box">
      <div class="content_son" style="opacity:1;">
        <div class="top_tips">
          <span style="color:black;display:inline-block;padding-left:15px;">提示</span>
          <a href="javascript:void()" class="alink" onclick="document.getElementById('fade').style.display='none'">x</a>
        </div>
        <!-- 显示验证码的区域start -->
        <div class="willclosebox" id="willclosebox">
            <p class="mid_wordsa">请输入图中文字</p>
            <div class="normalInput_self">
              <input type="text" ok='' name="verifycode" id="verifycode" class="verifycode" maxlength="6" autocomplete="off">
              <img  class="pointer_self pointer_self_code" title="点击可刷新验证码" src="<?php echo U('home/register/verify');?>" onClick="this.src=this.src+'?'+Math.random()">
              <div class="reforms"></div>
            </div>

            <div class="alertDialogBtnField"  style="margin-bottom: 5px;z-index:99999">
              <a class="fullBtnBlue alertDialogSure" id="reformscomea" >确定</a>
            </div>
        </div>
        <!-- 显示验证码的区域end -->

        <!-- 显示提示的区域 -->
        <div class="willcomebox" id="willcomebox" style="display:none">
          <p class="mid_wordsa returntips" style="width:275px;text-align:center;margin:10px auto;">
         
          </p>
          <div class="alertDialogBtnField"  style="margin-bottom: 5px;z-index:99999">
            <a class="fullBtnBlue alertDialogSure" id="verifysubmit" >确定</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.7.2.js"></script>
  <script type="text/javascript" language="javascript" src="/mz/Public/Home/js/jquery.validate-1.13.1.js"></script>
  <script type="text/javascript" src="/mz/Public/Home/personal/js/personal_edit.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    //点击修改密码的按钮
      $('#modifyPassword').click(function(event) {
        $('#bindEmail-step1').css('display', 'none');   //还原邮箱修改的样式
        $('#emailWrap').css('display', 'block');        //还原邮箱修改的样式
        $('#pwdWrap').css('display', 'none');
        $('#changePasswordWrap').css('display', 'block');
      });
      //点击取消修改密码的按钮
      $('#ce-u-pwdcancel').click(function(event) {
        $('#changePasswordWrap').css('display', 'none');
        $('#pwdWrap').css('display', 'block');
      });

      //点击绑定邮箱的按钮
      $('#emailBind').click(function(event) {
        $('#emailWrap').css('display', 'none');
        $('#pwdWrap').css('display', 'block'); //显示原本的修改密码的样式
        $('#changePasswordWrap').css('display', 'none');//隐藏之前密码修改的弹出框
        $('#bindEmail-step1').css('display', 'block');
      });
      //点击取消邮箱绑定的按钮
      $('#bindEmail-step1-savenextcancel').click(function(event) {
        $('#bindEmail-step1').css('display', 'none');
        $('#emailWrap').css('display', 'block');
      });

      //提交表单
      $('#ce-u-pwdsave').click(function(event) {
        $('#passwordformhzj').submit();
      });


      //修改密码的表单认证
      $('#passwordformhzj').validate({
        rules:{
          password:{
            required:true,
             remote:{
                url:"<?php echo U('home/user/checkpassword');?>",
                type:"post",
                dataType:"json",
              }
          },
          resetPassword:{
            required:true,
             isRightPassword:true,
          }
        },
       messages:{
        password:{
          required:'请先填写密码',
          remote:"原密码不正确",
        },
        resetPassword:{
          required:'请填写新密码',
        }
       },
      errorElement:"span",
      errorPlacement: function(error,element){
        // element.removeClass('successclass');
        // element.addClass('errorclass');
            error.appendTo(element.parent());
          },
        success:function(element){
              $(element).siblings('input').addClass('successclass');
              // alert($(element).attr('maxlength'));
              // $(element).parent().prev().removeClass('errorclass');
              // $(element).remove();
          },
          //验证成功提交之前先验证一下是否有选中文本框
      });
      //正确的密码规则
      $.validator.addMethod("isRightPassword",function(value,element,params){
        var passwords =  /^[a-zA-Z0-9_\\.]{8,16}$/;  //不能包含特殊字符
        return passwords.test(value);
      },"请填写正确格式的密码!");


      //邮箱验证绑定异步jq
      $('#bindEmail-step1-savenext').click(function(event) {
        if($('#ce-u-password-bind').val() == ''){
          $('#emialupdatepasswordhzj').html('原密码不能为空');
          $('#ce-u-password-bind').addClass('errorclass');
          return false;
        }
        var reformobj = $('#emialupdatepasswordhzj');
        var oldpassword = $('#ce-u-password-bind').val();
        $.ajax({
          url: '<?php echo U("home/user/checkpassword");?>',
          type: 'POST',
          dataType: 'json',
          data: {password: oldpassword},
          success:function(data){
            if(!data){
              //如果原先的错误 就提示
              $('#emialupdatepasswordhzj').html('原密码错误');
              $('#ce-u-password-bind').addClass('errorclass');
              return false;
            }else{
              $('#bindEmail-step1').css('display', 'none');
              $('#bindEmailWraphzj').css('display', 'block');
            }
          },
          error:function(){
            alert('邮箱绑定通信错误了');
          },
        })
        
      });

      //点击邮箱认真第二步的取消的时候 要还原最开始显示的东西
      $('#ce-u-bindcancelhzj').click(function(event) {
          $('#bindEmailWraphzj').css('display', 'none');
          $('#bindEmail-step1').css('display', 'none');
          $('#emailWrap').css('display', 'block');
      });

      //文本框聚焦的时候清空之前的错误和成功的样式
      $('#ce-u-password-bind').focus(function(event) {
        $(this).removeClass('errorclass');
        $(this).removeClass('successclass');
        $('#emialupdatepasswordhzj').html(''); 
      });

      //邮箱认证第二部步的表单认证
      $('#bindemailstep2hzj').validate({
        rules:{
          email:{
            required:true,
            isRightEmail:true,
            remote:'<?php echo U("home/user/checkemail");?>',
          },
          kapkey:{
            required:true,
            remote:'<?php echo U("home/user/checkverify");?>',
          }
        },
        messages:{
          email:{
            required:"请输入邮箱",
            remote:"邮箱已经存在,请更换",
          },
          kapkey:{
            required:"请输入验证码",
            remote:"短信验证码错误",
          },
        },
        errorElement:"span",
        errorPlacement: function(error,element){
        // element.removeClass('successclass');
        // element.addClass('errorclass');
          error.appendTo(element.parent());
        },
        success:function(element){
          //如果是email获取成功之后就开启获取验证码的button
          if($(element).attr('id') == 'bindemailhzj-error'){  
            $('#getKey-bindEmail').removeAttr('disabled');
            $('#getKey-bindEmail').css('color', '#00a7ea');
            $('#getKey-bindEmail').css('cursor', 'pointer');
            $(element).siblings('input').addClass('successclass');
          }else{
            $(element).parent().find('input').add('successclass');
          }
          // $(element).remove();
        },
      });

      //邮箱认证的获取验证码的点击事件
      $('#getKey-bindEmail').click(function(event) {
        $('#fade').css('display', 'block');
      });

       //点击事件发生后出现对应的显示就是检测验证码
        $('#verifycode').blur(function(event) {
          var codevalue = $(this).val();
          var reformobj = $('.reforms');
          var currentObj = $(this);
          $.ajax({
            url: '<?php echo U("home/register/ckeckverify");?>',
            type: 'POST',
            dataType: 'json',
            data: {verifycode: codevalue},
            success:function(data){
              if(data.error == 1){
                reformobj.html('<san style="color:red">'+data.returnMsg+'</span>');
                currentObj.attr('ok', '');
              }else{
                reformobj.html('<san style="color:green">'+data.returnMsg+'</span>');
                currentObj.attr('ok', 'ok');
              }
            },
            error:function(){

            },
          })
        });

        //如果验证码通过,点击确定显示的是提示先 然后再显示的是关闭的按钮
        $('#reformscomea').click(function(event) {
          if($('#verifycode').attr('ok') == ''){
            return false;
          }else{
            //发送异步
            var useremail = $('#bindemailhzj').val();
            $.ajax({
              url: '<?php echo U("home/register/checkmail");?>',
              type: 'POST',
              dataType: 'json',
              data: {useremails: useremail},
              success:function(data){
                if(data.error == 0){
                  $('.returntips').html('<span>'+data.msg+'</span>');
                  $('#willclosebox').css('display', 'none');
                  $('#willcomebox').css('display', 'block');
                }else{
                   $('.returntips').html('<span style="color:red">'+data.msg+'</span>');
                   $('#willclosebox').css('display', 'none');
                   $('#willcomebox').css('display', 'block');
                }
              },
              error:function(){
                alert('通讯错误咯，哈哈。');
              },
            })
          }
        });

      //邮箱认证完毕了 就到关闭对应的窗口的步骤了
      $('#verifysubmit').click(function(event) {
        $('#fade').css('display', 'none');
        $('#willclosebox').css('display', 'block'); //还原点击提示后显示的默认的页面.
        $('#willcomebox').css('display', 'none');
        $('#verifycode').val('');          //清空文本框
        $('.reforms').html('');           //清空之前的提示
        // $('.pointer_self_code').attr('src', newimgsrc);  //换验证码
      });

      //正确的邮箱匹配
      $.validator.addMethod("isRightEmail",function(value,element,params){
        var emails =  /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;  //不能包含特殊字符
        return emails.test(value);
      },"邮箱格式不对!");

      //邮箱认证2的提交表单
      $('#ce-u-bindsave').click(function(event) {
        $('#bindemailstep2hzj').submit();
      });
  });
  </script>
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