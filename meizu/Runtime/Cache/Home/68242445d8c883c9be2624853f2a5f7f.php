<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0033)http://store.meizu.com/index.html -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>魅族商城-提供魅族 PRO 系列、MX系列、魅蓝note系列、魅蓝metal系列的手机，配件和智能硬件的预约和购买。</title> 
  <meta name="description" content="魅族商城是魅族面向全国服务的官方电商平台，提供魅族 PRO 系列、MX系列、魅蓝note系列和魅蓝metal系列的手机，配件和智能硬件的预约和购买。官方正品，全国联保，全场包邮，7天无理由退货，15天换货保障。" /> 
  <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城、魅族、魅族手机" /> 
  <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon" /> 
  <!-- common css --> 
  <link rel="stylesheet" href="/mz/Public/Home/template/css/site-base.css" /> 
  <link rel="stylesheet" href="/mz/Public/Home/template/css/pkg-home.css" /> 
  <link rel="stylesheet" href="/mz/Public/Home/css/aio.css" />
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
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_3" data-mdesc="页头中第3个">Flyme</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_4" data-mdesc="页头中第4个">专卖店</a> 
     <a href="javascript:void()" target="_blank" data-mtype="store_index_yt_5" data-mdesc="页头中第5个">服务</a> 
     <a href="<?php echo U('Bbs/index/index');?>" target="_blank" data-mtype="store_index_yt_6" data-mdesc="页头中第6个">社区</a> 
    </div>
    
    <div class="topbar-right"> 
      <ul class="topbar-info"> 
      <li class="topbar-order-msg"> 
          <a class="topbar-link" href="" target="_blank">消息
          </a> 
          <span class="msg-tag" id="MzOrderMsgTag"></span> 
        </li>
      <li class="topbar-order-msg"> 
          <a class="topbar-link" href="<?php echo U('home/favorite/index');?>" target="_blank">我的收藏
          </a> 
          <span class="msg-tag" id="MzOrderMsgTag"></span> 
        </li>
        <li class="topbar-order-msg"> 
          <a class="topbar-link" href="<?php echo U('home/myorder/index');?>" target="_blank">我的订单
          </a> 
          <span class="msg-tag" id="MzOrderMsgTag"></span> 
        </li>
      
      <?php  if(!isset($_SESSION['uid'])){ ?>  
            <!-- 登录前的 -->
             
            <li class="mz_login"> 
              <a class="topbar-link" href="<?php echo U('home/login/index');?>">登录
              </a> 
            </li> 
            <li class="mz_login"> 
              <a class="topbar-link" href="<?php echo U('home/register/index');?>" target="_blank">注册</a> 
            </li>
             <!-- 登录前的 -->
          <?php }else{ ?>
          <!-- 登录后的 -->
            <li class="topbar-info-member" > 
              <a class="topbar-link" href="<?php echo U('home/index/index');?>" target="_blank"> 
                <span id="MzUserName" class="site-member-name">用户<?php echo $_SESSION['username'];?></span>的商城
              </a> 
              <div class="site-member-items">
              <!-- <a class="site-member-link" href="<?php echo U('home/myorder/index');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">我的订单</a> --> 
               
                <a class="site-member-link" href="<?php echo U('home/address/addressmanage');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">地址管理</a>
                 <a class="site-member-link" href="<?php echo U('home/car/index');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">我的购物车</a>
                <a class="site-member-link" href="<?php echo U('home/address/addressmanage');?>" target="_blank" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">我的回购卷</a>  
                <a class="site-member-link" href="<?php echo U('home/feedback/index');?>" target="_blank" data-mtype="store_index_yt_9_3" data-mdesc="我的商城下拉框3">问题反馈</a> 
                <a class="site-member-link site-logout" href="<?php echo U('home/login/loginout');?>"  data-mtype="store_index_yt_9_4" data-mdesc="我的商城下拉框4">退出</a> 
             </div> 
            </li> 
          <!-- 登录后的 -->
          <?php } ?>
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
      <li class="menu-product-item"> <a href="http://detail.meizu.com/item/meizu_mx5.html?rc=sd" target="_blank" data-mtype="store_index_dh_3_2" data-mdesc="导航中第3个下第2个坑"> 
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

    <link rel="stylesheet" href="/mz/Public/Home/css/main-37d634f.css">
  <main class="wrapper" id="main"> 
   <div class="container"> 
    <section class="crumbs clearfix"> 
     <a data-mtype="store_list_mbx_1" href="<?php echo U('home/index/index');?>">首页</a> &nbsp;&gt;&nbsp; 
     <span class="crumbs-level" id="crumbsLevel">
    
     <?php echo $catename ?></span> 
    </section> 
    
    <section class="goods-list" id="goodsList"> 
     <ul class="goods-list-wrap clearfix" id="goodsListWrap">
     <?php  foreach ($res as $key => $value) { ?>
          <li class="gl-item"> 
           <dl class="gl-item-wrap"> 
            <dd class="mod-pic"> 
             <a data-mtype="store_list_kw_1" target="_blank" href="<?php echo U('home/shopdetail/index',array('good_id'=>$value['good_id']));?>" title=""> <img width="220" height="220" src="/mz/<?php echo $value['good_pic'] ?>" /> </a> 
            </dd> 
            <dd class="mod-name"> 
             <a data-mtype="store_list_kw_1" target="_blank" href="<?php echo U('home/shopdetail/index',array('good_id'=>$value['good_id']));?>" title=""><?php echo $value['good_name'] ?></a> 
            </dd> 
            <dd class="mod-price"> 
             <em>￥</em> 
             <i><?php echo $value['good_marketprice'] ?></i> 
            </dd> 
           </dl> 
          </li>
        <?php
 } ?> 
     </ul> 
    </section> 
    <section class="empty clearfix" id="empty" style="display:none;"> 
     <div class="empty-bd"> 
      <div class="empty-bd-pic"></div> 
      <div class="empty-bd-info"> 
       <h4 class="yahei">抱歉没有找到相关商品</h4> 
       <p>建议您：<br /> 1.适当减少筛选条件<br /> 2.尝试其他关键字 </p> 
      </div> 
     </div> 
    </section> 
    <section class="pages" id="pages" style="display: none;"> 
     <div class="ui-paginate"> 
      <span class="p-prev disabled p-elem"></span> 
      <span class="current p-elem">1</span> 
      <span class="p-next disabled p-elem"></span> 
     </div> 
    </section> 
    <!-- <section class="recommend" id="recommend"> 
     <div class="recommend-hd"> 
      <h2 class="mod-title">为您推荐</h2> 
      <div class="mod-control" id="recommendDirectionNav"> 
       <a class="vm-prev flex-prev flex-disabled" data-mtype="store_list_tj_a" href="http://lists.meizu.com/page/list?categoryid=76&amp;rc=cb#" id="J_recommendPrev" tabindex="-1"> <i> </i> </a> 
       <a class="vm-next flex-next" data-mtype="store_list_tj_b" href="http://lists.meizu.com/page/list?categoryid=76&amp;rc=cb#" id="J_recommendNext"> <i></i> </a> 
      </div> 
     </div> 
     <div class="recommend-slider" id="J_recommendSlider"> 
      <div class="flex-viewport" style="overflow: hidden; position: relative;"> 
       <ul class="recommend-slider-wrap" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_1" href="http://detail.meizu.com/item/meizu_pro6.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1460440311-70719.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">魅族PRO 6 </h4> 
           <h6 class="vm-subtitle">每日10点起前100名赠EP-31耳机</h6> 
           <p class="vm-price"> &yen;<span>123</span> </p> 
          </div> <span class="mod-sign" style="background-color: #00afbe;"> 赠品 </span> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_2" href="http://detail.meizu.com/item/meizu_mx5e.html?skuid=699" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1452572130-53664.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">魅族MX5e 经典版 </h4> 
           <h6 class="vm-subtitle">标配EP-21HD耳机</h6> 
           <p class="vm-price"> &yen;<span>1499</span> </p> 
          </div> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_3" href="http://detail.meizu.com/item/Misfit_Ray.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1465268938-21192.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">Misfit Ray智能手环运动腕带版 </h4> 
           <h6 class="vm-subtitle">无需充电 来电提醒 音乐自拍</h6> 
           <p class="vm-price"> &yen;<span>599</span> </p> 
          </div> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_4" href="http://detail.meizu.com/item/FiiO_M3.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1468053351-98445.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">飞傲M3 无损音乐播放器 </h4> 
           <h6 class="vm-subtitle">HIFI发烧MP3 随身小神器</h6> 
           <p class="vm-price"> &yen;<span>348</span> </p> 
          </div> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_5" href="http://detail.meizu.com/item/keychain.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1463018844-49000.png@680x680.jpg" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">魅族熊猫金属钥匙扣 </h4> 
           <h6 class="vm-subtitle">能当艺术品的钥匙扣 才是好熊猫</h6> 
           <p class="vm-price"> &yen;<span>39</span> </p> 
          </div> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_6" href="http://store.meizu.com/item/meilan_note2.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1434331338-80202.jpg" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">魅蓝 note2 </h4> 
           <h6 class="vm-subtitle">64位八核 5.5英寸1080P屏幕</h6> 
           <p class="vm-price"> &yen;<span>799</span> </p> 
          </div> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_7" href="http://detail.meizu.com/item/SAMSUNG_SSD750.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1465176533-98619.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">三星 750 EVO SATA3 固态硬盘 </h4> 
           <h6 class="vm-subtitle">买即送铭摩印象第三代自拍杆</h6> 
           <p class="vm-price"> &yen;<span>318</span> </p> 
          </div> <span class="mod-sign" style="background-color: #00afbe;"> 赠品 </span> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_8" href="http://detail.meizu.com/item/lexin_A3.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1463046308-78627.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">乐心体重秤A3 蓝牙传输 微信互联 </h4> 
           <h6 class="vm-subtitle">微信互联 无需下载APP</h6> 
           <p class="vm-price"> &yen;<span>59</span> </p> 
          </div> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_9" href="http://detail.meizu.com/item/lexingtianxia_V5jia.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1467601523-20459.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">乐行天下V5+智能电动独轮车 </h4> 
           <h6 class="vm-subtitle">40公里续航 买即送魅族EP51耳机</h6> 
           <p class="vm-price"> &yen;<span>2899</span> </p> 
          </div> <span class="mod-sign" style="background-color: #00afbe;"> 赠品 </span> </a> </li> 
        <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;"> <a class="rs-item-wrap" data-mtype="sotre_list_tj_10" href="http://detail.meizu.com/item/ORICO_UCH_4U.html" target="_blank"> 
          <div class="mod-pic"> 
           <img src="./category_files/1468064791-68914.png" width="180" height="180" draggable="false" /> 
          </div> 
          <div class="mod-desc"> 
           <h4 class="vm-title">ORICO 4口USB车充头 </h4> 
           <h6 class="vm-subtitle">4个SuperCharge™智能USB</h6> 
           <p class="vm-price"> &yen;<span>79</span> </p> 
          </div> </a> </li> 
       </ul> 
      </div> 
     </div> 
    </section>  -->
   </div> 
  </main>


  

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
     <p> &copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved. <a target="_blank" href="javascript:void()" hidefocus="true">备案号：粤ICP备13003602号-2</a> <a target="_blank" href="javascript:void()" hidefocus="true">经营许可证编号：粤B2-20130198</a> <a target="_blank" href="javascript:void()" hidefocus="true">营业执照</a> <a target="_blank" rel="nofollow" href="javascript:void()" hidefocus="true"> <img src="/mz/Public/Home/images/footer-copy-1.png" /> </a> <a target="_blank" rel="nofollow" href="javascript:void()" hidefocus="true"> <img src="/mz/Public/Home/images/footer-copy-2.png" /> </a> <a target="_blank" rel="nofollow" href="javascript:void()" hidefocus="true"> <img src="/mz/Public/Home/images/trust-icon.png" /> </a> </p> 
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


  <script charset="utf-8" src="/mz/Public/Home/template/js/site-lib.js"></script> 
  <script type="text/javascript" src="/mz/Public/Home/template/js/site-base.js"></script> 
  <script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>
  <script type="text/javascript" src="/mz/Public/Home/template/js/pkg-home.js"></script> 
  <script charset="utf-8">var $=require("common:lib/jquery/jquery-1.11.3");
  $(function(){
      require("home:widgets/settlement-ad/settlement-ad"),
      // require("home:widgets/home-slider/home-slider"),//注释这行
      require("home:widgets/home-recommend/home-recommend"),
      require("home:widgets/home-category/home-category"),
      require("home:widgets/home-gotop/home-gotop"),
      require("home:js/jquery.lazyload/jquery.lazyload"),
      $("img.home-img-lazy").lazyload({})
  });
</script> 
 </body>
</html>