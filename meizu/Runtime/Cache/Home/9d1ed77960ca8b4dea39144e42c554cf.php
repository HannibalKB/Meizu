<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0040)http://me.meizu.com/member/address/index -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $title; ?></title> 
  <meta name="description" content="会员中心，地址管理" /> 
  <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城、魅族、魅族手机" /> 
  <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon" /> 
  <!-- common css --> 
  <link rel="stylesheet" href="/mz/Public/home/usercenter/addrmanage/css/site-base.css" /> 
  <link rel="stylesheet" href="/mz/Public/home/usercenter/addrmanage/css/aio.css" /> 
 </head> 
 <body> 
  <!-- common header --> 
 <div class="site-topbar clearfix"> 
   <div class="mzcontainer"> 
    <div class="topbar-nav"> 
     <a href="<?php echo U('home/index/index');?>" target="_blank" data-mtype="store_index_yt_1" data-mdesc="页头中第1个">魅族官网</a> 
     <a href="<?php echo U('home/index/index');?>" data-mtype="store_index_yt_2" data-mdesc="页头中第2个">魅族商城</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_3" data-mdesc="页头中第3个">Flyme</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_4" data-mdesc="页头中第4个">专卖店</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_5" data-mdesc="页头中第5个">服务</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_6" data-mdesc="页头中第6个">社区</a> 
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
              <a class="topbar-link" href="<?php echo U('home/login/index');?>">登录
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
              <span id="MzUserName" class="site-member-name"><?php echo $_SESSION['username'];?></span>的商城 
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
     <a href="http://store.meizu.com/cart" target="_blank"> 
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

  <div class="store-wrap"> 
   <div class="crumbs"> 
    <a href="http://store.meizu.com/">首页&gt;</a> 
    <a href="http://me.meizu.com/member/index">我的商城&gt;</a> 
    <a href="http://me.meizu.com/member/repo/index" class="active">建议反馈</a> 
   </div> 
   <div class="main clearfix"> 
    <div class="left-nav f-fl"> 
     <div class="nav-main"> 
      <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
      <a href="<?php echo U('home/myorder/index');?>" class="ml ">我的订单</a>
      <a href="<?php echo U('home/car/index');?>" class="ml" target="_blank">我的购物车</a> 
      <a href="javascript:void()" class="ml ">我的意外保</a> 
      <a href="javascript:;" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a> 
      <a href="<?php echo U('home/address/addressmanage');?>" class="ml">地址管理</a> 
      <a href="javascript:;" class="ml ">我的收藏</a> 
      <a href="javascript:;" class="ml ">消息提醒</a> 
      <a href="<?php echo U('home/feedback/index');?>" class="ml">建议反馈</a> 
      <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>资产中心</a> 
      <a href="javascript:;" class="ml ">我的优惠卷</a>
      <a href="javascript:;" class="ml ">消息红包</a>
      <a href="javascript:;" class="ml ">我的回购卷</a>
      <a href="javascript:;" class="type-title"><i class="iconfont icon-serverCenter"></i>服务中心</a>
      <a href="javascript:;" class="ml ">退款</a> 
     
     </div>  
    </div> 
    <div class="right-content f-fr"> 
     <div class="suggest-main"> 
      <img src="/mz/Public/home/usercenter/feedback/images/advice-banner.jpg" alt="建议反馈"> 
      <div class="kf"> 
       <p>如果您的问题急需处理，请咨询我们<br> 24小时全国服务热线或在线客服！</p> 
       <p class="text">24小时全国服务热线</p> 
       <p class="tel">400-788-3333</p> 
       <a class="online" href="javascript:;" target="_blank"> <i class="icon"><img class="lineKf" src="/mz/Public/home/usercenter/feedback/images/kfbg.jpg"></i><i class="text">24小时在线客服</i></a> 
      </div> 
      <!-- <p class="Big-title">您的建议反馈是我们改进的最大动力</p> --> 
    
      <form action="<?php echo U('home/feedback/feedBackSubmit');?>" id="mainform" method="post">
        <div class="content"> 
         <div class="type"> 
          <span class="title">您想对哪一方面提出建议</span> 
          <div class="mzui_select"> 
           <input type="text" readonly="true" name="cate" id="catename"  class="mzui_select_trigger" placeholder="请选择问题分类"> 
          <select class="select varify" id="cateid" name="classical">
            <option data-value="0" style="display:none" value="0" selected></option>
            <?php  foreach ($res as $key => $value) { ?>
                  <option data-value="<?php echo $value['id']; ?>" value="<?php echo $value['id'] ?>"><?php echo $value['type_name']; ?></option> 
                <?php
 } ?> 
            
          </select> 
          </div> 
         </div> 
         <style type="text/css">
            .feedbackcontent{
                display: block;
                width: 480px;
                height: 160px;
                resize: none;
                padding: 10px;
                border: 1px #e0e0e0 solid;
                color: #515151;
                outline: 0;
                overflow: auto;
                vertical-align: top;
                font-family: inherit;
                font-size: 100%;
                margin: 0;
            }
            .emailclass{
              width: 180px;
              height: 35px;
              padding: 0 10px;
              border: 1px #e0e0e0 solid;
              color: #515151;
              outline: 0;
            }
         </style>
         <div class="question"> 
          <span class="title">请详细描述您的问题</span> 
          <textarea class="feedbackcontent" name="feedbackcontent" id="feedbackcontent"></textarea> 
          
         </div> 
         <div class="email"> 
          <span class="title">邮箱（选填）</span> 
          <input type="text" class="emailclass" id="usremail" name="useremail" maxlength="30"> 
         </div> 
         <a id="submitSuggests" href="javascript:;" class="submit-btn">提交</a> 
        </div> 
      </form>

     </div> 
    </div> 
   </div> 
  </div>

  <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.10.1.js"></script> 
  <!-- 引入笑脸的js文件 -->
  <script type="text/javascript" src="/mz/Public/layer/layer.js"></script>
  <script charset="utf-8" src="/mz/Public/home/usercenter/feedback/js/site-lib.js"></script> 
  <script type="text/javascript" src="/mz/Public/home/usercenter/feedback/js/memberCommon.js"></script> 
  <script type="text/javascript" src="/mz/Public/home/usercenter/feedback/js/suggest.js"></script> 
  <script>
    require('member:app/script/page/suggest');
  </script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#submitSuggests').click(function(event) {
          var feedbackinfo = {
            cateid : $('#cateid').val(),
            feedbackcontent : $('#feedbackcontent').val(),
            usremail : $('#usremail').val()
          };
          if(feedbackinfo.cateid == 0){
            layer.msg('请选择类型',{icon:5,time:1000});
            return false;
          }
          if(feedbackinfo.feedbackcontent == ''){
            layer.msg('请描述您的问题',{icon:5,time:1000});
            return false;
          }
          // if(feedbackinfo.usremail == ''){
          //   layer.msg('请输入邮箱',{icon:5,time:1000});
          //   return false;36
          // }
          // if(!/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(feedbackinfo.usremail)){
          //   layer.msg('请输入正确邮箱',{icon:5,time:1000});
          //   return false;
          // }
          $.ajax({
            url: '<?php echo U("home/feedback/feedbacksubmit");?>',
            type: 'POST',
            dataType: 'json',
            data: {alldata: feedbackinfo},
            success:function(data){
              if(data.error == 0){
                layer.msg('多谢您的建议反馈',{icon:6,time:1000});
                $('#cateid').val(0);
                $('#feedbackcontent').val('');
                $('#usremail').val('');
                $('#catename').val('');
              }else{
                 layer.msg('反馈失败',{icon:5,time:1000});
              };
            },
            error:function(){

            }
          })
      });


    });
  </script>


    <!-- common footer --> 
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
       <li> <a class="meizu-footer-wechat"> 官方微信 <img src="./dizhiguanli_files/weixin.png" alt="微信二维码" /> </a> </li> 
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
  
  
  <script charset="utf-8" src="/mz/Public/home/usercenter/addrmanage/js/site-lib.js"></script> 
  <script type="text/javascript" src="/mz/Public/home/usercenter/addrmanage/js/site-base.js"></script> 
  <script>
    var $=require("common:lib/jquery/jquery-1.11.3");
    require("common:lib/jquery/jquery-migrate-1.2.1"),
    window.$=$,window.jQuery=$,window.jquery=$,
    $(function(){require("common:widgets/site-topbar/topbar"),
    require("common:widgets/site-header/header")});
  </script> 
</body>
</html>