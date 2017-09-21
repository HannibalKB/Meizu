<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0043)http://detail.meizu.com/item/meilan3_1.html -->
<!-- 商城信息模板 -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>魅族商城</title> 
  <meta name="description" content="魅蓝3，全网通公开版  29日10点限量开售，正品行货，另有魅蓝3详细介绍、图片、价格、参数、售前咨询等，购买魅蓝3上魅族商城，全场包邮，7天无理由退货，15天换货保障。" /> 
  <meta name="keywords" content="魅蓝3，魅族，魅族商城" /> 
  <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon" /> 
  <!-- common css --> 
  <link rel="stylesheet" href="/mz/Public/Home/css/aio.css" />
  <link rel="stylesheet" href="/mz/Public/Home/css/site-base.css" /> 
  <link rel="stylesheet" href="/mz/Public/Home/css/main-2ea2b05.css" /> 
  <style type="text/css">.site-gotop{position:fixed;width:44px;bottom:50px;left:50%;margin-left:640px;display:none}.gotop-suggest,.gotop-arrow{display:inline-block;width:44px;height:44px;background:#b4b4b4 no-repeat 50%50%;cursor:pointer}.gotop-suggest{background-image:url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/suggest.png)}.gotop-arrow{background-image:url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/gotop-arrow.png);margin-top:5px}
  </style>
 </head> 
 <body> 
  <!-- common header --> 
  <div class="site-topbar clearfix"> 
   <div class="mzcontainer"> 
    <div class="topbar-nav"> 
     <a href="<?php echo U('home/index/index');?>" target="_blank" data-mtype="store_index_yt_1" data-mdesc="页头中第1个">魅族官网</a> 
     <a href="<?php echo U('home/index/index');?>" data-mtype="store_index_yt_2" data-mdesc="页头中第2个">魅族商城</a> 
     <a href="<?php echo U('home/index/index');?>" target="_blank" data-mtype="store_index_yt_3" data-mdesc="页头中第3个">Flyme</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_4" data-mdesc="页头中第4个">专卖店</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_5" data-mdesc="页头中第5个">服务</a> 
     <a href="<?php echo U('bbs/index/index');?>" target="_blank" data-mtype="store_index_yt_6" data-mdesc="页头中第6个">社区</a> 
    </div>
    
    <div class="topbar-right"> 
      <ul class="topbar-info"> 
        <li class="topbar-order-msg"> 
          <a class="topbar-link" href="<?php echo U('home/myorder/index');?>" target="_blank">我的订单
          </a> 
          <span class="msg-tag" id="MzOrderMsgTag"></span> 
        </li>
      
      <?php  if (empty($_SESSION['uid'])) { ?>  
            <!-- 登录前的 -->
             
            <li class="mz_login"> 
              <a class="topbar-link " href="<?php echo U('home/login/index');?>">登录
              </a> 
            </li> 
            <li class="mz_login"> 
              <a class="topbar-link" href="<?php echo U('home/register/index');?>" target="_blank">注册</a> 
            </li>
             <!-- 登录前的 -->
          <?php
 }else{ ?>
          <!-- 登录后的 -->
          <li class="topbar-info-member" > 
            <a class="topbar-link" href="<?php echo U('home/index/index');?>" target="_blank"> 
              <span id="MzUserName" class="site-member-name">用户<?php echo $_SESSION['username'];?></span>的商城 
            </a> 
            <div class="site-member-items">
            <a class="site-member-link" href="<?php echo U('home/myorder/index');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">我的订单</a> 
             <a class="site-member-link" href="<?php echo U('home/car/index');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">我的购物车</a> 
              <a class="site-member-link" href="<?php echo U('home/address/addressmanage');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">地址管理</a> 
              <a class="site-member-link" href="<?php echo U('home/feedback/index');?>" target="_blank" data-mtype="store_index_yt_9_3" data-mdesc="我的商城下拉框3">问题反馈</a> 
              <a class="site-member-link site-logout" href="<?php echo U('home/login/loginout');?>"  data-mtype="store_index_yt_9_4" data-mdesc="我的商城下拉框4">退出</a> 
           </div> 
          </li> 
          <!-- 登录后的 -->
          <?php
 } ?>
      

     </ul> 
     <div class="topbar-info-pop"></div> 
    </div> 
   </div> 
  </div> 
  <div class="site-header"> 
   <div class="mzcontainer"> 
    <div class="header-logo"> 
     <a href="<?php echo U('home/index/index');?>" target="_blank"> <img src="/mz/Public/Home/images/logo-header.png" srcset="http://store.res.meizu.com/resources/php/store/images/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技" data-mtype="store_index_dh_logo" data-mdesc="logo" /> </a> 
    </div> 
    
    <div class="header-nav"> 
     <ul class="nav-list"> 
        <?php  foreach ($naviGoods as $key => $value) { ?>
              <li class="nav-item"> <a class="nav-item-link" href="javascrip:" onclick="return false" target="_blank"><?php echo $value['cname'] ?></a> 
               <div class="nav-item-children"> 
                <ul class="menu-product-list"> 
                <?php  foreach ($value['goods'] as $k => $v) { ?>
                      <li class="menu-product-item"> <a href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>" target="_blank" data-mtype="store_index_dh_1_1" data-mdesc="导航中第1个下第1个坑"> 
                       <div class="menu-product-figure"> 
                        <img src="/mz/<?php echo $v['good_pic'] ?>"  width="100" height="150" /> 
                       </div> <p class="menu-product-name"><?php echo $v['good_name'] ?></p> <p class="menu-product-price"> &yen; <span>123</span> </p> </a> 
                     </li>
                    <?php
 } ?>
                 <!-- more --> 
                </ul> 
               </div> 
              </li>
            <?php
 } ?>
     </ul> 
    </div> 
    <div class="header-cart" id="MzHeaderCart"> 
     <a href="javascript:void()" target="_blank"> 
      <div class="header-cart-wrap"> 
       <span class="header-cart-icon"></span> 购物车 
       <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">0</span> 
       <div class="header-cart-spacer"></div> 
      </div> </a> 
     <div class="header-cart-detail">
      <div class="header-cart-empty" data-load="正在加载购物车信息 ..." data-empty="购物车还没有商品，快购买吧！">
       购物车还没有商品，快购买吧！
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="MzNavMenu" class="header-nav-menu" style="display: none;"> 
    <div class="mzcontainer">
     <ul class="menu-product-list"> 
      <li class="menu-product-item"> <a href="javascript:void()" target="_blank" data-mtype="store_index_dh_3_1" data-mdesc="导航中第3个下第1个坑"> 
        <div class="menu-product-figure"> 
         <img src="./good_detail_files/Cix_s1eN3IiASxVXAA9IpQ8-shg169_126x126.png" data-src="http://open.file.meizu.com/group1/M00/00/19/Cix_s1eN3IiASxVXAA9IpQ8-shg169_126x126.png" width="100" height="150" /> 
        </div> <p class="menu-product-name">MX6</p> <p class="menu-product-price"> &yen; <span>1999</span> </p> </a> </li> 
      <li class="menu-product-item"> <a href="javascript:void()" target="_blank" data-mtype="store_index_dh_3_2" data-mdesc="导航中第3个下第2个坑"> 
        <div class="menu-product-figure"> 
         <img src="./good_detail_files/1450928272@126x126.png" data-src="http://storeimg.meizu.com/product/1450928272@126x126.png" width="100" height="150" /> 
        </div> <p class="menu-product-name">MX5</p> <p class="menu-product-price"> &yen; <span>1499</span> </p> </a> </li> 
      <li class="menu-product-item"> <a href="javascript:void()" target="_blank" data-mtype="store_index_dh_3_3" data-mdesc="导航中第3个下第3个坑"> 
        <div class="menu-product-figure"> 
         <img src="./good_detail_files/1466996090@126x126.png" data-src="http://storeimg.meizu.com/product/1466996090@126x126.png" width="100" height="150" /> 
        </div> <p class="menu-product-name">MX5e 经典版</p> <p class="menu-product-price"> &yen; <span>1499</span> </p> </a> </li> 
      <!-- more --> 
     </ul>
    </div> 
   </div> 
  </div> 


  <link href="/mz/Public/Home/huadongyanzheng/css/drag.css" rel="stylesheet" type="text/css">
<script src="/mz/Public/Home/huadongyanzheng/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/mz/Public/Home/huadongyanzheng/js/drag.js" type="text/javascript"></script>
<link rel="stylesheet" href="/mz/Public/home/css/payment_new.css">
<!-- 倒计时 -->
<script type="text/javascript">
  function Timer(maxtime, id, callback) {
        
        var tmp
        function CountDown() {
            if (maxtime >= 0) {
                day = Math.floor(maxtime / (60 * 60 * 24));
                tmp = maxtime - day * 60 * 60 * 24;
                hours = Math.floor(tmp / (60 * 60));
                tmp = tmp - hours * 60 * 60;
                minutes = Math.floor(tmp / (60));
                tmp = tmp - minutes * 60;
                seconds = tmp
                msg = hours + "小时" + minutes + "分" + seconds + "秒"
                document.getElementById(id).innerHTML = msg;
                maxtime -= 1;
            }
            else {
                clearInterval(timer);
                if (typeof callback == "function") callback(); //执行倒计时完成后的回调
            }
        }
        var timer = setInterval(function () { CountDown() }, 1000);
    }
    window.onload = function () {
        new Timer(3*24*60*60, 'timer1', function () { document.getElementById("timer1").innerHTML = "计时器1完成"; });
       
    }
</script>
<div id="payment"> 
   <div class="mzcontainer"> 
    <div class="payment_header clearfix"> 
     <div class="icon"> 
      <div class="payment_icon success"></div> 
     </div> 
     <div class="info"> 
      <div class="main"> 
      <i class="order-font payment-success"></i>
       <h2 style="font-weight:bold;font-size:24px;color:#333">订单提交成功，应付金额 <span style="color:#e02b41"><?php echo $orderRes[0]['order_price'] ?>.00</span> 元</h2> 
       <!--库存货提示-->
       
       <p>订单号：<?php echo $orderRes[0]['order_code'] ?>&nbsp;&nbsp;&nbsp;&nbsp;
       请您在 <span id="payTimer" style="color:#e02b41"> <span id="timer" style="display:inline-block;color:red;">24小时</span> </span> 内完成支付，否则订单会被自动取消</p> 
      </div> 
      <div class="other"> 

      	<?php  foreach ($goodRes as $key => $value) { ?>
      			<div class="tr"> 
		        <div class="td name">
		         商品
		        </div> 
		        <div class="td value"> 
		         <span class="prod"> <?php echo $value['good_name'].$value['attr_combine'] ?> X <?php echo $value['good_num'] ?></span> 
		        </div> 
		       </div>
      	<?php } ?>

       <div class="tr"> 
        <div class="td name">
         收货地址
        </div> 
        <div class="td value">
          <?php echo $orderRes[0]['address_text'] ?> <?php echo $orderRes[0]['username'] ?>（收） <?php echo $orderRes[0]['phone'] ?> 
         <a href="javascript:;" class="edit_btn"></a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <form id="paymentForm" method="post" action="<?php echo U('home/order/paysuccess');?>">
	    <div class="tab_panel" id="tabPanel"> 
		    <ul class="btns clearfix"> 
		      <li class="yinhang active">在线支付</li> 
		      <li class="zhifubao">支付宝支付</li> 
          <li class="weixin">微信扫码</li>
		    </ul> 
			
		    <ul class="panels clearfix "> 
		      <li class="tools_choose active" id="yinhang"> 
		       <div style="text-indent:105px;padding-bottom:20px;color:#ea5245;">
		        使用花呗分期，笔笔赢红包，最高999元
		       </div> 
		       	<div class="clearfix"> 
		        <div class="radio-box alipay active" data-bank="alipay" data-val="Alipay">

		        <!-- <div id="drag"></div> -->
				<script type="text/javascript">
					$('#drag').drag();
				</script>
		         <div class="payment_icon"></div> 
		        </div> 
		        </div> 
		        <div class="huabei-select" id="huabeiSelect"> 
		        <div class="header">
		         使用花呗分期
		        </div> 
		         
		        </div> 
		        <div class="bank_detail"> 
		        </div> <a href="javascript:;" class="go_to_pay" id="goToPay">立即支付</a> 
		        </li> 
             <li class="tools_choose active" id="zhifubao" style="display:none"> 
               <div style="text-indent:105px;padding-bottom:20px;color:#ea5245;">
                  <img src="/mz/Public/img/zhifubao.jpg" alt="">
               </div> 
              
            </li> 
            <li class="tools_choose active" id="weixin" style="display:none"> 
               <div style="text-indent:105px;padding-bottom:20px;color:#ea5245;">
                  <img src="/mz/Public/img/weixin.jpg" alt="">
               </div> 
              
            </li> 
		    </ul> 
		    <input type="hidden" name="orderid" value="<?php echo $_GET['id'] ?>">
			<!-- 支付宝 -->
      
	    </div>
    </form> 
   </div> 
  </div> 
  <script type="text/javascript">
  $(function(){
    $('#goToPay').click(function(){
      $('#paymentForm').submit();
    })
  })
  $('.yinhang').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
      $('#yinhang').css('display','inline-block').siblings().css('display','none');
  })
  $('.zhifubao').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
      $('#zhifubao').css('display','inline-block').siblings().css('display','none');
  })
  $('.weixin').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
      $('#weixin').css('display','inline-block').siblings().css('display','none');
  })
 
  

 
  </script>

  <div class="site-footer"> 
   <div class="mzcontainer"> 
    <div class="site-footer-service"> 
     <ul class="clearfix"> 
      <li class="service-item"> <span class="service-icon service-icon-seven"></span> <p class="service-desc"> <span class="service-desc-bold">7天</span> <span class="service-desc-normal">无理由退货</span> </p> </li> 
      <li class="service-split-line"> <span></span> </li> 
      <li class="service-item"> <span class="service-icon service-icon-fifty"></span> <p class="service-desc"> <span class="service-desc-bold">15天</span> <span class="service-desc-normal">换货保障</span> </p> </li> 
      <li class="service-split-line"> <span></span> </li> 
      <li class="service-item"> <span class="service-icon service-icon-one"></span> <p class="service-desc"> <span class="service-desc-bold">1年</span> <span class="service-desc-normal">免费保修</span> </p> </li> 
      <li class="service-split-line"> <span></span> </li> 
      <li class="service-item"> <span class="service-icon service-icon-speed"></span> <p class="service-desc"> <span class="service-desc-bold">百城</span> <span class="service-desc-normal">速达</span> </p> </li> 
      <li class="service-split-line"> <span></span> </li> 
      <li class="service-item"> <span class="service-icon service-icon-by"></span> <p class="service-desc"> <span class="service-desc-bold">全场</span> <span class="service-desc-normal">包邮</span> </p> </li> 
      <li class="service-split-line"> <span></span> </li> 
      <li class="service-item"> <span class="service-icon service-icon-map"></span> <p class="service-desc"> <span class="service-desc-bold">2000多家</span> <span class="service-desc-normal">专卖店</span> </p> </li> 
     </ul> 
    </div> 
    <div class="site-footer-navs clearfix"> 
     <div class="footer-nav-item"> 
      <h4 class="footer-nav-title">帮助说明</h4> 
      <ul> 
       <li><a href="javascript:void()" target="_blank">支付方式</a></li> 
       <li><a href="javascript:void()" target="_blank">配送说明</a></li> 
       <li><a href="javascript:void()" target="_blank">售后服务</a></li> 
       <li><a href="javascript:void()" target="_blank">付款帮助</a></li> 
      </ul> 
     </div> 
     <div class="footer-nav-item"> 
      <h4 class="footer-nav-title">Flyme</h4> 
      <ul> 
       <li><a target="_blank" href="javascript:void()">开放平台</a></li> 
       <li><a target="_blank" href="javascript:void()">固件下载</a></li> 
       <li><a target="_blank" href="javascript:void()">软件商店</a></li> 
       <li><a target="_blank" href="javascript:void()">查找手机</a></li> 
      </ul> 
     </div> 
     <div class="footer-nav-item"> 
      <h4 class="footer-nav-title">关于我们</h4> 
      <ul> 
       <li><a target="_blank" href="javascript:void()">关于魅族</a></li> 
       <li><a target="_blank" href="javascript:void()">加入我们</a></li> 
       <li><a target="_blank" href="javascript:void()">联系我们</a></li> 
       <li><a target="_blank" href="javascript:void()">法律声明</a></li> 
      </ul> 
     </div> 
     <div class="footer-nav-item"> 
      <h4 class="footer-nav-title">关注我们</h4> 
      <ul> 
       <li><a target="_blank" href="javascript:void()">新浪微博</a></li> 
       <li><a target="_blank" href="javascript:void()">腾讯微博</a></li> 
       <li><a target="_blank" href="javascript:void()">QQ空间</a></li> 
       <li> <a class="meizu-footer-wechat"> 官方微信 <img src="./good_detail_files/weixin.png" alt="微信二维码" /> </a> </li> 
      </ul> 
     </div> 
     <div class="footer-nav-custom"> 
      <h4 class="nav-custom-title">24小时全国服务热线</h4> 
      <a href="tel:400-788-3333"><h3 class="nav-custom-number">400-788-3333</h3></a> 
      <a class="nav-custom-btn" href="javascript:void(0);" > <img src="/mz/Public/Home/images/20x21xiaoshi.png" width="20" height="21" /> 24小时在线客服 </a> 
     </div> 
    </div> 
    <div class="site-footer-end"> 
     <p> &copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved. <a target="_blank" href="http://www.miitbeian.gov.cn/" hidefocus="true">备案号：粤ICP备13003602号-2</a> <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" hidefocus="true">经营许可证编号：粤B2-20130198</a> <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true">营业执照</a> <a target="_blank" rel="nofollow" href="http://210.76.65.188/" hidefocus="true"> <img src="/mz/Public/Home/images/footer-copy-1.png" /> </a> <a target="_blank" rel="nofollow" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" hidefocus="true"> <img src="/mz/Public/Home/images/footer-copy-2.png" /> </a> <a target="_blank" rel="nofollow" href="https://credit.szfw.org/CX20151204012550820380.html" hidefocus="true"> <img src="/mz/Public/Home/images/trust-icon.png" /> </a> </p> 
    </div> 
   </div> 
  </div> 
  <script charset="utf-8" src="/mz/Public/Home/js/site-lib.js"></script> 
  <script type="text/javascript" src="/mz/Public/Home/js/site-base.js"></script> 
  <!--  
  <script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script> 
  -->
  <!-- 
  <script type="text/javascript" src="/mz/Public/Home/js/pkg-detail-85e3f9a.js"></script> 
   -->
  <div class="site-gotop" id="siteGotop">
   <a class="gotop-suggest" title="建议反馈" href="javascript:void()" target="_blank"></a>
   <div class="gotop-arrow" title="回到顶部"></div>
  </div>
  </script>
  <script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>
 </body>
</html>