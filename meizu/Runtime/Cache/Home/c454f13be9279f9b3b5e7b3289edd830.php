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
    color:Red; 
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
 <body> 
  <div id="content" class="content"> 
   <div class="ucSimpleHeader" id="header"> 
    <a href="http://www.meizu.com" class="meizuLogo"><i class="i_icon"></i></a> 
    <div id="trigger"> 
     <a href="<?php echo U('home/login/index');?>" id="toLogin" class="linkAGray">登录</a> 
     <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span> 
     <a href="<?php echo U('home/register/index');?>" id="toRegister" class="linkAGray">注册</a> 
    </div> 
   </div> 
   <div class="middle"> 
   <div style="position:relative;margin-left:400px;z-index:999;">
   <img src="/mz/Public/Index/img/left.png" alt="" style="inline-block;margin-left:-590px;position:absolute;margin-top:-100px">
    <form id="mainForm" method="post" action="<?php echo U('home/register/newregister');?>"> 
     <div class="number"> 
      <a class="linkABlue" id="" href="javascript:void(0);">手机注册</a> 
      
    </div>


     <div class="lineWrap normalInput"> 
      <input type="text" value="" dataid="2"  name="mobliephone" id="mobliephone" ok='' placeholder="+86手机号码"  class="tipscome"  />
     
     </div>
     <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:200px"></span> 


     <div class="clear"></div> 


     <div class="normalInput"> 
      <input type="text" name="code" class="tipscome" id="kapkey" dataid="3" maxlength="6" ok='' placeholder="短信验证码" autocomplete="off" /> 
     
      <span class="form-line"></span> 
      <button id="getKey" type="button"  disabled="disabled"  style="background-color:#FFF;width:98px;right:1px;" class="linkABlue" onclick="document.getElementById('fade').style.display='block'" >获取验证码</button>
     </div> 
      <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:200px"></span>
     

     
     <div class="lineWrap normalInput"> 
      <input type="password" dataid="1" value="" name="password"  id="password" ok='' maxlength="16" class="tipscome" placeholder="密码" />
     <!--  <div class="mzFloatTip bRadius2" style="position: absolute; top: 0px; left:350px; width: 200px;line-height: normal;display:none;" >
        长度为8-16个字符，区分大小写，不能包含特殊字符
      </div> -->
      <div class="clear"></div> 
     </div>
      
     <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;width:200px"></span>  

    


      
    
     <span style="margin-top:-10px;display: block;margin-left: 0px;margin-bottom: 10px;"></span> 
     <input type="hidden" name="acceptFlymeStatus" id="acceptFlymeStatus" status='1' value="1" /> 
     <span id="acceptError" class="otherError" style="display:none;">请确认已阅读并同意Flyme服务协议条款</span> 
     <button id="register" type="submit" style="background-color:#32a5e7;width:350px;height:50px;font-size:20px;color:#fff"> 注册 </button> 
    </form>
</div>
   </div> 
  </div> 
  <div id="flymeFooter" class="footerWrap"> 
   <div class="footerInner"> 
    <div class="footer-layer1"> 
     <div class="footer-innerLink"> 
      <a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="http://hr.meizu.com" target="_blank" title="工作机会">工作机会</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a> 
      <img class="foot-line" src="https://uc-res.meizu.com/resources/common/images/default/space.gif" /> 
      <a href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a> 
     </div> 
     <div class="footer-service"> 
      <span class="service-label">客服热线</span> 
      <span class="service-num">400-788-3333</span> 
      <a id="service-online" class="service-online" href="javascript:void(0);" title="在线客服">在线客服</a> 
     </div> 
     <div class="footer-outerLink"> 
      <a class="footer-sinaMblog" href="http://weibo.com/meizumobile" target="_blank"><i class="i_icon"></i></a> 
      <a class="footer-tencentMblog" href="http://t.qq.com/meizu_tech" target="_blank"><i class="i_icon"></i></a> 
      <a id="footer-weChat" class="footer-weChat" href="javascript:void(0);" target="_blank"><i class="i_icon"></i></a> 
      <a class="footer-qzone" href="http://user.qzone.qq.com/2762957059" target="_blank"><i class="i_icon"></i></a> 
     </div> 
    </div> 
    <div class="clear"></div> 
    <div id="flymeCopyright" class="copyrightWrap"> 
     <div class="copyrightInner"> 
      <span>&copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span> 
      <a href="http://www.miitbeian.gov.cn/" class="linkAGray" target="_blank">备案号: 粤ICP备13003602号-4</a> 
      <a href="http://www.res.meizu.com/resources/www/images/icp2.jpg" class="linkAGray" target="_blank">经营许可证编号: 粤B2-20130198</a> 
      <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true" class="linkAGray">营业执照</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="wechatPic"></div> 
  <!-- 合法性提示信息 --> 
  <!-- <div class="Tips" style="position: absolute; z-index: 3000; top: 232px; left: 851px; width: 200px; display:none">
   <div style="position: relative;">
    <div class="mz3AngleL">
     <i class="i_icon"></i>
    </div>
    <div style="width: 170px;" class="mzFloatTip bRadius2">
     长度为4-32个字符，支持数字、字母、下划线，字母开头，字母或数字结尾
    </div>
   </div>
  </div> 
  <div class="Tips" style="position: absolute; z-index: 3000; top: 304px; left: 851px; width: 200px; display:none">
   <div style="position: relative;">
    <div class="mz3AngleL">
     <i class="i_icon"></i>
    </div>
    <div style="width: 170px;" class="mzFloatTip bRadius2">
     长度为8-16个字符，区分大小写，不能包含特殊字符
    </div>
   </div>
  </div> 
  <div class="Tips" style="position: absolute; z-index: 3000; top: 376px; left: 851px; width: 200px; display:none">
   <div style="position: relative;">
    <div class="mz3AngleL">
     <i class="i_icon"></i>
    </div>
    <div style="width: 170px;" class="mzFloatTip bRadius2">
     用于找回密码，提高账户安全等级
    </div>
   </div>
  </div> 
  <div class="Tips" style="position: absolute; z-index: 3000; top: 448px; left: 851px; width: 200px; display:none">
   <div style="position: relative;">
    <div class="mz3AngleL">
     <i class="i_icon"></i>
    </div>
    <div style="width: 170px;" class="mzFloatTip bRadius2">
     请输入手机收到的验证码
    </div>
   </div>
  </div> -->
  
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

  <!-- TIP -->
  <script type="text/javascript" src="/mz/Public/js/md5.js"></script>
  <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.10.1.js"></script> 
  <script type="text/javascript" language="javascript" src="/mz/Public/Home/js/jquery.validate-1.13.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#mainForm").validate({
        // debug:true,
        // focusCleanup: true,
        rules:{
          mobliephone:{
            required:true,
            isRightPhone:true,
          },
          code:{
            required:true,
            remote:{
              url:"<?php echo U('home/register/checkmailcode');?>",
              type:"post",
              dataType:"json",
            }
          },
          password:{
            required:true,
            maxlength:16,
            minlength:8,
            isRightPassword:true,
          },
        },
        messages:{
          mobliephone:{
            required: "请输入手机号码",
            
          },
          code:{
            required: "请输入短信验证码",
            remote: "短信验证码错误"
          },
          password:{
            required: "请输入密码",
            minlength: "最少8位数",
            maxlength: "少于16位数",
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
            if($(element).attr('for') == 'mobliephone'){  
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
        
        //正确的密码规则
        $.validator.addMethod("isRightPassword",function(value,element,params){
          var passwords =  /^[a-zA-Z0-9_\\.]{8,16}$/;  //不能包含特殊字符
          return passwords.test(value);
        },"请填写正确格式的密码!");

        //正确的手机匹配
        $.validator.addMethod("isRightPhone",function(value,element,params){
          var length = value.length;   
          var mobile = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;   
          // var tel = /^(\d{3,4}-?)?\d{7,9}$/g;       
          return this.optional(element) || (length==11 && mobile.test(value));
        },"手机号码格式不正确!");        

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


        //检测弹出窗口的图片验证码
        // $('#verifycode').blur(function(event) {
        //     var codevalue = $(this).val();
        //     var reformobj = $('.reforms');
        //     var currentObj = $(this);
        //     $.ajax({
        //       url: '<?php echo U("home/register/ckeckverify");?>',
        //       type: 'POST',
        //       dataType: 'json',
        //       data: {verifycode: codevalue},
        //       success:function(data){
        //         if(data.error == 1){
        //           reformobj.html('<san style="color:red">'+data.returnMsg+'</span>');
        //           currentObj.attr('ok', '');
        //         }else{
        //           reformobj.html('<san style="color:green">'+data.returnMsg+'</span>');
        //           currentObj.attr('ok', 'ok');
        //         }
        //       },
        //       error:function(){

        //       },
        //     })
        // });


        //点击确定后关闭
        $('#verifysubmit').click(function(event) {
          $('#fade').css('display', 'none');
          $('#willclosebox').css('display', 'block'); //还原点击提示后显示的默认的页面.
          $('#willcomebox').css('display', 'none');
          $('#verifycode').val('');          //清空文本框
          $('.reforms').html('');           //清空之前的提示
         
        });
        


        $('#getKey').click(function(){
          phone=$('#mobliephone').val();
        
          $.ajax({
              url: "<?php echo U('home/register/sendMsg');?>",//请求地址
              type: "GET",//请求方式
              dataType: "json",//返回数据类型
              data: {phone:phone},//发送的参数
              success:function(data){
                //成功执行的方法
               alert('发送成功！');

                

              },
              error:function(){
                //失败执行的方法
                alert('发送成功！');
              }
            })

        })
    });
  </script> 
 </body>
</html>