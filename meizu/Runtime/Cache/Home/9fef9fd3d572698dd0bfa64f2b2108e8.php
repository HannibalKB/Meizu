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


  <div class="store-wrap"> 
 <div class="crumbs"> 
  <a href="<?php echo U('home/index/index');?>">首页&gt;</a> 
  <a href="javascript()">我的商城&gt;</a> 
  <a href="<?php echo U('home/myorder/index');?>">我的订单&gt;</a> 
  <a href="javascript:void()" class="active"><?php echo $orderRes[0]['order_code'] ?></a> 
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
   <div class="orderDetail-main"> 
    <!--<div class="title">我的订单</div>--> 
    <div class="type-tab-btn"> 
     <a href="javascript:;" class="active">订单详情</a> 
    </div> 
    <div class="process"> 
    <hr class="cercel4">
    <hr class="covering cercel4" style="width:0%;">
     <ul class="line-time clearfix">
     <?php  if($orderRes[0]['status'] == 0){ ?>
          <li class="s-01 active">提交订单<br><?php echo $orderRes[0]['order_time'] ?></li>

          <li class="">买家已付款</li> 
          <li class="">发货中</li> 
          <li class="">交易成功</li>
        <?php
 }elseif($orderRes[0]['status'] == 1){ ?>
          <li class="active">提交订单<br><?php echo $orderRes[0]['order_time'] ?></li> 
          <li class="active">买家已付款</li> 
          <li class="">发货中</li> 
          <li class="">交易成功</li>
        <?php
 }elseif($orderRes[0]['status'] == 2){ ?>
          <li class="active">提交订单</li> 
          <li class="active">买家已付款</li> 
          <li class="active">发货中</li> 
          <li class="">交易成功</li>
        <?php
 }elseif($orderRes[0]['status'] == 3){ ?>
          <li class="">提交订单</li> 
          <li class="">买家已付款</li> 
          <li class="">发货中</li> 
          <li class="">交易成功</li>
        <?php
 }elseif($orderRes[0]['status'] == 4){ ?>
          <li class="active">提交订单</li> 
          <li class="active">买家已付款</li> 
          <li class="active">发货中</li> 
          <li class="active">交易成功</li>
        <?php
 } ?> 
       
     </ul> 
<!--      <ul class="line-time clearfix"> 
      <li class="active">2016-08-01 10:42:21</li> 
      <li class=""></li> 
      <li class=""></li> 
      <li class=""></li> 
     </ul>  -->
    </div>
    <?php
 if($orderRes[0]['status'] == '0'){ ?>
           <div class="item info status"> 
             <div class="goPay clearfix order-item" > 
              <div class="left f-fl"> 
                <p>
                  <span class="order-status">订单状态：</span>
                  <span class="red">未付款</span>&nbsp;&nbsp;&nbsp;&nbsp;
                  <span>应付金额：<i class="red">￥599.00</i>
                  </span><br>
                  <span style="font-size:15px;color:red">23小时56分钟37秒 <span style="font-size:15px;color:black">内未付款，将自动取消订单</span></span>
                </p> 
              </div> 
              <div class="right f-fr"> 
               <a class="payNow opreat-btn" target="_blank" href="<?php echo U('home/order/payment',array('id'=>$orderRes[0]['order_id']));?>">立即付款</a> 
               <a class="cancel right opreat-btn" href="javascript:;">取消订单</a> 
              </div> 
             </div>
            </div>
        <?php
 }elseif($orderRes[0]['status'] == '1'){ ?>
          <div class="item info status"> 
           <div class="goPay clearfix order-item" style="background: #fafafc;border-color: #eee;"> 
            <div class="left f-fl"> 
              <p>
                <span class="order-status">订单状态：</span>
                <span class="red">已付款等待发货</span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>金额：<i class="red">￥<?php echo $orderRes[0]['order_price'] ?>.00</i>
                </span>
              </p> 
            <!--  <p class="line2"> <span class="gray"><span class="contents _timer red"> 23小时55分钟38秒 </span>内未付款，将自动取消订单。</span> </p> --> 
            </div> 
            
           </div>
          </div>
        <?php
 }elseif($orderRes[0]['status'] == '2'){ ?>
          <div class="item info status"> 
           <div class="goPay clearfix order-item" style="background: #fafafc;border-color: #eee;"> 
            <div class="left f-fl"> 
              <p>
                <span class="order-status">订单状态：</span>
                <span class="red">商品已发货</span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>金额：<i class="red">￥<?php echo $orderRes[0]['order_price'] ?>.00</i>
                </span>
              </p> 
            
            </div> 
            <div class="right f-fr"> 
            
             <a class="payNow opreat-btn"  href="javascript:void()" onclick="if(confirm('已收到货，请点击确认！')){ this.href='<?php echo U('home/myorder/confirmget',array('orderid'=>$orderRes[0]['order_id']));?>' }">确认收货</a> 
            </div> 
           </div>
          </div>
        <?php
 }elseif($orderRes[0]['status'] == '3'){ ?>
          <div class="item info status"> 
           <div class="goPay clearfix order-item" style="background: #fafafc;border-color: #eee;"> 
            <div class="left f-fl"> 
              <p>
                <span class="order-status">订单状态：</span>
                <span class="red">订单已取消</span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>金额：<i class="red">￥<?php echo $orderRes[0]['order_price'] ?>.00</i>
                </span>
              </p> 
            </div> 
           </div>
          </div>
        <?php
 }elseif($orderRes[0]['status'] == '4'){ ?>
          <div class="item info status"> 
           <div class="goPay clearfix order-item" style="background: #fafafc;border-color: #eee;"> 
            <div class="left f-fl"> 
              <p>
                <span class="order-status">订单状态：</span>
                <span class="red">订单已完成,收货成功</span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>金额：<i class="red">￥<?php echo $orderRes[0]['order_price'] ?>.00</i>
                </span>
              </p> 
            </div> 
           </div>
          </div>
        <?php
 } ?>
      


    <div class="item product" id="products"> 
     <div class="title clearfix">
       &nbsp;&nbsp;&nbsp;&nbsp;订单号： 
      <span><?php echo $orderRes[0]['order_code'] ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下单时间： <?php echo $orderRes[0]['order_time'] ?>
      <span></span> 
       
     </div> 
     <table> 
      <tbody>
         <tr> 
          <td colspan="2"></td> 
          <td class="product">商品</td> 
          <td>状态</td> 
          <td>单价</td> 
          <td>购买数量</td> 
          <td colspan="2" class="back-two">小计</td> 
         </tr> 
         

        <?php  foreach ($orderRes[0]['order_sku'] as $key => $value) { ?>
          <tr>
            <td colspan="2">
              <a href="<?php echo U('home/shopdetail/index',array('good_id'=>$value['good_id']));?>" target="_blank"><img src="/mz/<?php echo $value['good_pic'] ?>" />
              </a>
            </td> 
            <td class="product">
              <span><a href="<?php echo U('home/shopdetail/index',array('good_id'=>$value['good_id']));?>" target="_blank"><?php echo $value['good_name'].$value['attr_combine'] ?></a>
              </span>
            </td> 
            <td>
              <i class="wuliu seeDeliverBox">
                <?php  switch ($orderRes[0]['status']) { case '0': echo '待付款'; break; case '1': echo '待发货'; break; case '2': echo '已发货'; break; case '3': echo '订单已取消'; break; } ?>

              </i> 
              <i class="iconfont"></i><br /> 
            </td> 
            <td class="price">
              <span>￥<?php echo $value['good_price'] ?>.00</span> 
            </td> 
            <td>1</td> 
            <td class="bold back-two" colspan="2">￥<?php echo $value['good_price']*$value['good_num'] ?>.00</td> 
         </tr>
        <?php } ?> 
           
      </tbody> 
     </table> 
    </div>

    <div class="item makeOrder"> 
     <ul> 
      <li><span>总金额</span><span>￥<?php echo $orderRes[0]['order_price'] ?>.00</span></li> 
      <li><span>运费</span><span>￥0.00</span></li> 
      <li class="end"><span>
      <?php  if($orderRes[0]['status'] == 0){ echo '应付'; }else{ echo '金额'; } ?>
      </span><span class="total big-red">￥<?php echo $orderRes[0]['order_price'] ?>.00</span></li> 
     </ul> 
    </div> 

    <div class="editBox title"> 
     <span class="title">收货人信息&nbsp;&nbsp;</span> 
     <!-- <a class="edit blue" href="javascript:;">修改</a>  -->
    </div> 
    <div class="address"> 
     <p>收货人：<?php echo $orderRes[0]['username'] ?></p> 
     <p>地址：<?php echo $orderRes[0]['address_text'] ?></p> 
     <p>电话：<?php echo $orderRes[0]['phone'] ?></p> 
     <!-- <p>邮编：511400</p>  -->
    </div> 
   <!--  <div class="item ticket"> 
     <span class="title">发票信息</span> 
     <p class="specail"> <span class="space">发票类型：</span><span><b class="text"><span class="blue">电子发票</span> <i class="iconfont icon-question"></i> </b> </span> </p> 
     <p><span class="space">发票抬头：</span><span>黄镇江</span></p> 
    </div>  -->
    <div class="item remark"> 
     <span class="title">订单备注</span> 
     <p><span class="space">买家留言：</span><span><?php echo $orderRes[0]['user_message'] ?></span></p> 
    </div> 
   </div> 
  </div> 
 </div> 
</div>


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