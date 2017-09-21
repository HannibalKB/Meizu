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


  <style>
    .center {
    display: table-cell;
  /*  margin-left: 0px;
    margin-right: 0px;*/
}
</style>
<!-- <link rel="stylesheet" href="/mz/Public/home/css/aio1.css">
<link rel="stylesheet" href="/mz/Public/home/css/site-base1.css"> -->

<div class="store-wrap">
    <div class="crumbs">
        <a href="<?php echo U('home/index/index');?>">
            首页&gt;
        </a>
        <a href="javascript:void()">
            我的商城&gt;
        </a>
        <a href="javascript:void()" class="active">
            我的订单
        </a>
    </div>
    <div class="main clearfix">
        <div class="left-nav f-fl">
            <div class="nav-main"> 
              <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
              <a href="<?php echo U('home/myorder/index');?>" class="ml active">我的订单</a>
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
            <div class="order-main">
                <div class="title">
                    我的订单
                </div>
                <div class="type-tab-btn">
                    <a href="<?php echo U('home/myorder/index');?>" class="allOrder <?php if(ACTION_NAME == 'index') echo 'active' ?>" data-type="-1">
                        全部订单
                        
                    </a>
                    <i class="line">
                        |
                    </i>
                    <a class="waitPay <?php if(ACTION_NAME == 'waitpay') echo 'active' ?>" href="<?php echo U('home/myorder/waitpay');?>" data-type="0">
                        待付款
                    </a>
                    <i class="line">
                        |
                    </i>
                    <a class="waitDeliver <?php if(ACTION_NAME == 'waitdeliver') echo 'active' ?>" href="<?php echo U('home/myorder/waitdeliver');?>" data-type="1">
                        待发货
                    </a>
                    <i class="line">
                        |
                    </i>
                    <a class="hasDeliver <?php if(ACTION_NAME == 'hasdeliver') echo 'active' ?>" href="<?php echo U('home/myorder/hasdeliver');?>" data-type="2">
                        已发货
                    </a>
                    <i class="line">
                        |
                    </i>
                    <!-- <a class="hasDeliver <?php if(ACTION_NAME == 'complete') echo 'active' ?>"  href="<?php echo U('home/myorder/complete');?>" data-type="2">
                        已完成
                    </a>
                    <i class="line">
                        |
                    </i> -->
                    <a class="hascancel <?php if(ACTION_NAME == 'orther') echo 'active' ?>" href="<?php echo U('home/myorder/orther');?>" data-type="2">
                        其他
                    </a>
                </div>
                <div class="list-head">
                    <ul class="clearfix">
                        <li class="w50">
                            订单明细
                        </li>
                        <li class="w125">
                            售后
                        </li>
                        <li class="w125">
                            金额
                        </li>
                        <li class="w125">
                            状态
                        </li>
                        <li class="w125">
                            操作
                        </li>
                    </ul>
                </div>
                
                <?php  if(count($orderRes) > 0){ ?>
                <div id="tableList" class="type-contain ui-load-container">
                    <div class="ui-load-content">
                        <input id="unPayNum" value="1" type="hidden">
                        <table class="orderItem">
                            <tbody>
                            <?php  foreach ($orderRes as $key => $value) { ?>
                                    <tr class="trHead">
                                    <td colspan="5" class="title clearfix">
                                        <div class="f-fl">
                                            下单时间：
                                            <span class="time">
                                                <?php echo $value['order_time'] ?>
                                            </span>
                                            订单号：
                                            <span class="orderNumber">
                                                <?php echo $value['order_code'] ?>
                                            </span>
                                        </div>
                                        
                                    </td>
                                </tr>
                                <tr class="list-box b-l b-r b-b">
                                    <td class="list b-r">
                                    
                                    <?php  foreach ($value['order_sku'] as $k => $v) { ?>
                                            <div class="item clearfix">
                                                <a class="productDetail f-fl nameWidth" href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>"
                                                target="_blank">
                                                    <img src="/mz/<?php echo $v['good_pic'] ?>" class="f-fl">
                                                </a>
                                                <div class="describe f-fl">
                                                    <div class="vertic clearfix">
                                                        <span class="clearfix">
                                                            <a class="productDetail f-fl nameWidth" href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>"
                                                            target="_blank">
                                                                <?php echo $v['good_name']." ".$v['attr_combine']; ?>
                                                            </a>
                                                            <i class="f-fr">
                                                                ￥<?php echo $v['good_price']; ?> × <?php echo $v['good_num']; ?>
                                                            </i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="seeDeliverBox">
                                                    <input class="isOldProduct" value="false" type="hidden">
                                                    <input class="orderSn" value="21080551181114128081" type="hidden">
                                                    <input class="orderSnSon" value="21080551181114129081" type="hidden">
                                                    <div class="content">
                                                    </div>
                                                </div>
                                            </div>
                                     <?php  } ?> 
                                        <!-- 此处子循环结束 --> 
                                    </td>
                                    <td class="b-r w125 center ">
                                        <div class="priceDiv" style="color:red;font-size:16px;font-weight:bold">
                                            ￥ <?php echo $value['order_price']; ?>
                                        </div>
                                    </td>
                                    <td class="b-r w125 center " >
                                        <div class="stateDiv">
                                            <div style="margin-bottom:5px">
                                                <?php  if ($value['status'] == 0) { echo '待付款'; }elseif($value['status'] == 1){ echo '已付款等待发货'; }elseif($value['status'] == 2){ echo '已发货'; }elseif($value['status'] == 3){ echo '已取消'; }elseif($value['status'] == 4){ echo '订单已完成'; } ?>
                                                <br>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="w125 center ">
                                        <ul>
                                            <?php  if ($value['status'] == 0) { ?>
                                                    <li class="goPay">
                                                        <a href="<?php echo U('home/order/payment',array('id'=>$value['order_id']));?>">
                                                            立即付款
                                                        </a>
                                                    </li>
                                             <?php } ?>

                                            <?php  if ($value['status'] == 0) { ?>
                                                    <li class="cancel" orderid="<?php echo $value['order_id'] ?>">
                                                        取消订单
                                                    </li>
                                             <?php }elseif($value['status'] == 1 || $value['status'] == 2){ ?>
                                                    <li class="cants" style="cursor: default;">
                                                        <span style="color:red">无法取消订单</span>
                                                    </li>
                                                <?php
 } ?>
                                            <li class="more">
                                                <a href="<?php echo U('home/myorder/orderdetail',array('orderid'=>$value['order_id']));?>">
                                                    查看详情
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="empty">
                                    <td>
                                    </td>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php }else{ ?>
                        <div class="backCoupon-main" style="height:220px;">
                            <div id="tableList"  class="type-contain ui-load-container"><div class="ui-load-content J_no_data" ><p class="J_no_data_des"><a href="<?php echo U('home/index/index');?>" class="add_address" >还没有该类订单！ </a></p></div></div>
                        </div> 
                    <?php
 } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/mz/Public/Home/js/jquery-1.7.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.cancel', function(event) {
            if(confirm('您确定要取消订单吗?')){
                var orderid = $(this).attr('orderid');
                location.href='http://<?php echo $_SERVER["HTTP_HOST"] ?>/mz/index.php/Home/Myorder/cancelorder/orderid/'+orderid+'';
            }
        });
    });

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