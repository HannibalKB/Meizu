<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="description" content="欢迎登录和注册魅族Flyme账户，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" /> 
  <meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账户  MX M9 MX2" /> 
  <meta content="width=1080" name="viewport" /> 
  <title>注册魅族账户</title> 
  <link href="/mz/Public/Home/css/base.css" type="text/css" rel="Stylesheet" /> 
  <link href="/mz/Public/Home/css/nameRegister.css" type="text/css" rel="Stylesheet" /> 
  <style type="text/css">
  em{
     font-style: normal;
    }
  label.error{ 
    color:red; 
    font-size:13px; 
    padding-left:16px; 
  }
  .tests{
    border-width: 5px;
    border-left-color: red;
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
 <body > 
  <div id="content" class="content"> 
   <div class="ucSimpleHeader" id="header"> 
    <a href="http://www.meizu.com" class="meizuLogo"><i class="i_icon"></i></a> 
    <div id="trigger"> 
     <a href="<?php echo U('home/login/index');?>" id="toLogin" class="linkAGray" style="font-size:14x">登录</a> 
     <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span> 
     <a href="<?php echo U('home/register/index');?>" id="toRegister" class="linkAGray" style="font-size:14px">注册</a> 
    </div> 
   </div> 
   <div class="middle" style="margin-left:430px">
   <img src="/mz/Public/Index/img/left.png" alt="" style="inline-block;margin-left:-250px;position:absolute;margin-top:-100px">
   <div style="position:relative;margin-left:400px;z-index:999;">
    <form id="mainForm" method="post" action="<?php echo U('home/register/completeregister');?>"> 
     <div class="number"> 
      <a class="linkAGray" id="toTelRegister" href="<?php echo U('home/register/phonereg');?>" style="font-size:16px">手机号码注册</a> 
      <span class="register-line"></span> 
      <a class="linkABlue" id="toNameRegister" href="javascript:void()" style="font-size:16px">邮箱注册</a> 
     </div> 
     <div class="normalInput" > 
      <input type="text" dataid="0" name="username" id="username" placeholder="帐户名" class="tipscome" ok='' style="width:200px" /> 
       </div>
     <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:200px"></span>

     
     <div class="lineWrap normalInput"> 
      <input type="password" dataid="1" value="" name="password"  id="password" ok='' maxlength="16" class="tipscome" placeholder="密码" />
     
      <div class="clear"></div> 
     </div>
      
     <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:100px"></span> 


     <div class="lineWrap normalInput"> 
      <input type="text" value="" dataid="2"  name="email" id="email" ok='' placeholder="邮箱" maxlength="32" class="tipscome" autocomplete="off" />
    
     </div>
     <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:100px"></span> 


     <div class="clear"></div> 


     <div class="normalInput"> 
      <input type="text" name="code" class="tipscome" id="kapkey" dataid="3" maxlength="6" ok='' placeholder="邮箱接收的验证码" autocomplete="off" /> 
     
      <!-- <span class="form-line"></span>  -->
      <button id="getKey" type="button"  disabled="disabled"  style="background-color:#FFF;width:98px;right:1px;" class="linkABlue" onclick="document.getElementById('fade').style.display='block'" >获取验证码</button>
     </div> 
      <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:120px"></span>

     <button id="register" type="submit" style="background-color:#32a5e7;width:350px;height:50px;font-size:20px;color:#fff"> 注册 </button> 
    </form>
</div> 

   </div> 
  </div> 
  <!-- 尾部 -->
  <div id="flymeFooter" class="footerWrap"> 
   <div class="footerInner"> 
    <div class="footer-layer1"> 
     <div class="footer-innerLink"> 
      <a href="javascript:void()" target="_blank" title="关于魅族">关于魅族</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void()" target="_blank" title="工作机会">工作机会</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void()" target="_blank" title="联系我们">联系我们</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void()" target="_blank" title="法律声明">法律声明</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
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
  <div id="wechatPic"></div> 
  
  <style type="text/css">
    
    .white_content{ 
      
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
       <!-- 验证码 -->
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


  <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.10.1.js"></script> 
  <script type="text/javascript" language="javascript" src="/mz/Public/Home/js/jquery.validate-1.13.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#mainForm").validate({
        // debug:true,
        // focusCleanup: true,
        rules:{
          username:{
            required:true,
            minlength:2,
            maxlength:32,
            isRightUsername:true,
            remote:{
              url:"<?php echo U('home/register/checkusername');?>",
              type:"post",
              dataType:"json",
            }
            // remote: "test.php",
          },
          password:{
            required:true,
            maxlength:16,
            minlength:8,
            isRightPassword:true,
          },
          email:{
            required:true,
            isRightEmail:true,
            remote:{
              url:"<?php echo U('home/register/checkemail');?>",
              type:"post",
              dataType:"json",
            }
          },
          code:{
            required:true,
            remote:{
              url:"<?php echo U('home/register/checkmailcode');?>",
              type:"post",
              dataType:"json",
            }
          },
        },
        messages:{
          username:{
            required: "请输入用户名",
            minlength: "长度大于4位",
            maxlength: "长度小于32位",
            remote: "请重新输入用户名！",
          },
          password:{
            required: "请输入密码",
            minlength: "最少8位数",
            maxlength: "少于16位数",
          },
          email:{
            required: "请输入邮箱",
            remote: "邮箱已经存在，请更换",
            // email:'请输入正确的邮箱',
          },
          code:{
            required: "请输入验证码",
            remote: "邮箱验证码错误"
          },
        },
        // errorElement:"span",
        //错误的element参数是代表当前验证的元素 也就是文本框
        errorPlacement: function(error,element){
            element.parent().removeClass('successclass');
            error.appendTo(element.parent().next());
            element.parent().addClass('errorclass');
        },

        //成功
        //成功的 element 参数是代表label成功的标签
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

        //验证成功提交之前先验证一下是否有选中文本框
        submitHandler:function(form){  
            if( $('#acceptFlymeStatus').attr('status') == 0 ){
              return false;
            }else{
              form.submit();
            }    
        },
      });
        //正确的用户名规则
        $.validator.addMethod("isRightUsername", function(value, element) {       
          return  /^[a-zA-Z]\w{3,32}$/.test(value);       
        }, "请按规则提示填写信息");
        
        //正确的密码规则
        $.validator.addMethod("isRightPassword",function(value,element,params){
          var passwords =  /^[a-zA-Z0-9_\\.]{8,16}$/;  //不能包含特殊字符
          return passwords.test(value);
        },"请填写正确格式的密码!");

        //正确的邮箱匹配
        $.validator.addMethod("isRightEmail",function(value,element,params){
          var emails =  /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;  //不能包含特殊字符
          return emails.test(value);
        },"邮箱格式不对!");        

        // 判断checkbox
        $('#acceptFlyme').click(function(event) {
            if($(this).is(':checked')){
              $('#acceptFlymeStatus').attr('status','1');
              $('#acceptError').css('display', 'none');
            }else{
              $('#acceptFlymeStatus').attr('status','0');
              $('#acceptError').css('display', 'block');
            }
        });

        $('.tipscome').focus(function(event) {
           // $('.mz_Float').eq($(this).attr('dataid')).show();
           $(this).siblings('div').show();
        });
        $('.tipscome').blur(function(event) {
          $(this).siblings('div').hide();
        });


        //检测验证码
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

        
        // ('#reformscomea').click(function(event) {
        //   /* Act on the event */
        // });

        //点击确定显示的是提示先 然后再显示的是关闭的按钮
        $('#reformscomea').click(function(event) {
          if($('#verifycode').attr('ok') == ''){
            return false;
          }else{
            //发送异步
            var useremail = $('#email').val();
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

        //点击确定后关闭
        $('#verifysubmit').click(function(event) {
          $('#fade').css('display', 'none');
          $('#willclosebox').css('display', 'block'); //还原点击提示后显示的默认的页面.
          $('#willcomebox').css('display', 'none');
          $('#verifycode').val('');          //清空文本框
          $('.reforms').html('');           //清空之前的提示
          // $('.pointer_self_code').attr('src', newimgsrc);  //换验证码
        });
    });
  </script> 
 </body>
</html>