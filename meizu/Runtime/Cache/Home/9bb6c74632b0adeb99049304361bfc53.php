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

  
<script charset="utf-8" type="text/javascript" src="/mz/Public/Home/js/index.js"></script>
    <div class="home-category-wrap">
        <div class="mzcontainer home-category-position">
        <!-- 侧边导航 -->
            <div class="home-category-list"> 
                 <ul class="home-category-nav" style="background:#B6B4B6"> 
                  <li class="home-category-nav-item"> <a class="category-nav-link" data-mtype="store_index_cdh_1" data-mdesc="侧边导航中第1个分类" href="<?php echo U('home/category/index');?>"> <span>全部商品</span> </a> </li>

                   
                  <?php  foreach ($cateRes as $key => $value){ ?>
                        <li class="home-category-nav-item"> 
                          <a class="category-nav-link" data-mtype="store_index_cdh_2" data-mdesc="侧边导航中第2个分类" href="<?php echo U('home/category/index',array('cateid'=>$value['cid']));?>"> 
                          <span><?php echo $value['cname'] ?></span> 
                          </a> 
                          <div class="category-nav-children nav-wrap-col-2" style="width:430px;"> 
                          <div class="nav-children-wrap"> 
                           <ul class="nav-children-left">
                           <?php  foreach ($value['goods'] as $k => $v) if($k <= 4){ ?>
                                  <li class="nav-children-item"> 
                                    <a href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>" target="_blank" data-mtype="store_index_cdh_2_1" data-mdesc="侧边导航中第2个分类第1个产品"> <img src="/mz/<?php echo $v['good_pic'] ?>"  width="50" height="50" alt="魅族MX6" /> 
                                     <span><?php echo $v['good_name'] ?></span> 
                                    </a> 
                                  </li>
                                <?php
 } ?> 
                           </ul>
  
                            <ul class="nav-children-left">
                           <?php  foreach ($value['goods'] as $k => $v) if($k > 4 ){ ?>
                                  <li class="nav-children-item"> 
                                    <a href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>" target="_blank" data-mtype="store_index_cdh_2_1" data-mdesc="侧边导航中第2个分类第1个产品"> <img src="/mz/<?php echo $v['good_pic'] ?>"  width="50" height="50" alt="魅族MX6" /> 
                                     <span><?php echo $v['good_name'] ?></span> 
                                    </a> 
                                  </li>
                                <?php
 }elseif($k >= 8){ break; } ?> 
                           </ul>

                          </div> 
                         
                         </div> 
                        </li>
                      <?php  }?>  
                 </ul> 
                </div>
        </div>
    </div>
    <!-- 轮播 -->
    <div id="MzHomeSlider" class="home-slider">
        <div class="home-slider-items">
            <div style="max-width: 100%;" class="bx-wrapper">
                <div style="width: 100%; overflow: hidden; position: relative; height: 480px;"
                class="bx-viewport">
                    <ul style="width: auto; position: relative;" class="bxslider">
                      <?php  foreach ($bannerRes as $v) { ?>
                            <li class="home-slider-box" data-bgcolor="#faf4e3" style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none; "> <a class="home-slider-image" style="width: 1920px; margin-left: -620px;position:absolute;left:780px;overflow:hidden;" href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>" target="_blank" data-mtype="store_index_ba_5" data-mdesc="第5屏banner"> <img src="/mz/<?php echo $v['img_url'] ?>"  height="480" style="position:absolute;width:100%;left:-360px;overflow:hidden;z-index:-1;"/> </a> 
                            </li>
                          <?php
 } ?>
                    </ul>
                </div>
                <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager bx-default-pager">
                      <?php  foreach ($bannerRes as $key => $value) { ?>
                          <div class="bx-pager-item">
                              <a href="javascript:void()" data-slide-index="0" class="bx-pager-link">
                                  1  
                              </a>
                          </div>
                        <?php
 } ?>
                        

                    </div>
                    <div class="bx-controls-direction">
                       <a class="bx-prev" href="javascript:void()">Prev</a>
                       <a class="bx-next" href="javascript:void()">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 下部 -->
    <div class="mzcontainer">
        <div class="home-mzad">
            <div class="home-box home-service">
                <div class="service-module-2">
                    <a href="javascript:void()" target="_blank" data-mtype="store_index_gd_1"
                    data-mdesc="固定资源位中第1个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="http://storeimg.meizu.com/product/1450855246-61162.png" alt="M码通道"
                            height="24" width="24">
                        </span>
                        <p>
                            M码通道
                        </p>
                    </a>
                </div>
                <div class="service-module-2">
                    <a href="javascript:void()" target="_blank" data-mtype="store_index_gd_2"
                    data-mdesc="固定资源位中第2个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="http://storeimg.meizu.com/product/1450855279-64872.png" alt="以旧换新"
                            height="24" width="24">
                        </span>
                        <p>
                            以旧换新
                        </p>
                    </a>
                </div>
                <div class="service-module-2">
                    <a href="javascript:void()" target="_blank" data-mtype="store_index_gd_3"
                    data-mdesc="固定资源位中第3个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="http://storeimg.meizu.com/product/1450855198-58056.png" alt="补买意外保"
                            height="24" width="24">
                        </span>
                        <p>
                            补买意外保
                        </p>
                    </a>
                </div>
                <div class="service-module-2">
                    <a href="javascript:void()" target="_blank"
                    data-mtype="store_index_gd_4" data-mdesc="固定资源位中第4个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="http://storeimg.meizu.com/product/1451960447-93534.png" alt="回购单查询"
                            height="24" width="24">
                        </span>
                        <p>
                            回购单查询
                        </p>
                    </a>
                </div>
            </div>
            <div class="home-box home-ad-box">
                <a href="javascript:void()" target="_blank"
                data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
                    <img src="/mz/Public/img/z1.jpg" height="140"
                    width="244">
                </a>
            </div>
            <div class="home-box home-ad-box">
                <a href="javascript:void()" target="_blank"
                data-mtype="store_index_xj_2" data-mdesc="小焦中第2个">
                    <img src="/mz/Public/img/z2.jpg" height="140"
                    width="244">
                </a>
            </div>
            <div class="home-box home-ad-box">
                <a href="javascript:void()" target="_blank"
                data-mtype="store_index_xj_3" data-mdesc="小焦中第3个">
                    <img src="/mz/Public/img/z3.jpg" height="140"
                    width="244">
                </a>
            </div>
            <div class="home-box home-ad-box">
                <a href="javascript:void()" target="_blank"
                data-mtype="store_index_xj_4" data-mdesc="小焦中第4个">
                    <img src="/mz/Public/img/z4.jpg" height="140"
                    width="244">
                </a>
            </div>
        </div>
        <div class="home-panel home-rmd home-hot">
            <div class="home-panel-topbar">
                <h2 class="home-panel-title">
                    热品推荐
                </h2>
                <div class="home-panel-tools">
                    <span id="MzRmdSliderLeft" class="panel-slider panel-slider-left panel-slider-disabled"
                    data-mtype="store_main_rp_a" data-mdesc="">
                        <span class="more-arrow">
                        </span>
                    </span>
                    <span id="MzRmdSliderRight" class="panel-slider panel-slider-right" data-mtype="store_main_rp_b"
                    data-mdesc="">
                        <span class="more-arrow">
                        </span>
                    </span>
                </div>
            </div>
            <div class="home-rmd-main">
                <div class="home-rmd-cotent">
                    <div class="rm-box-25">
                        <div style="width: 3720px; left: 0px;" id="MzRmdList" class="rmd-content-list">
                            <?php  foreach ($newGoodsRes as $v) { ?>
                                  <div class="rmd-box rmd-box-product">
                                      <a href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>" target="_blank"
                                      data-mtype="store_index_rp_1_1" data-mdesc="热品推荐第1屏第1个坑">
                                          <div class="rmd-product-detail">
                                              <img src="/mz/<?php echo $v['good_pic'] ?>" alt="魅蓝3s"
                                              height="180" width="180">
                                              <div class="rmd-product-desc">
                                                  <h4 class="rmd-product-title">
                                                      <?php echo $v['good_name'] ?>
                                                  </h4>
                                                  <h6 class="rmd-product-subtitle">
                                                      <?php echo $v['desc'] ?>
                                                  </h6>
                                                  <p class="rmd-product-price">
                                                      <span style="font-size:12px;">
                                                          <?php echo $v['good_desc'] ?>
                                                      </span>
                                                  </p>
                                              </div>
                                          </div>
                                          <?php  if($v['ishot'] == 1){ ?>
                                                <div class="box-product-sign" style="background-color: #f0415f;">
                                                    特惠
                                                </div>
                                              <?php
 } ?>
                                      </a>
                                  </div>
                                <?php
 } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="display: block;" class="site-gotop">
        <a class="gotop-suggest" title="建议反馈" href="/member/suggest/index" target="_blank">
        </a>
        <div class="gotop-arrow" title="回到顶部">
        </div>
    </div>

    
    
    <?php  foreach ($mainGoodRes as $key => $value) { ?>
          <div class="home-full-box" >
            <div class="mzcontainer">
                <div class="home-panel home-rmd home-floor">
                    <div class="home-panel-topbar">
                        <h2 class="home-panel-title">
                            <?php echo $value['cname'] ?>
                        </h2>
                        <h6 class="home-panel-subtitle">
                        </h6>
                        <div class="home-panel-tools home-floor-tools">
                            <a class="home-tool-more" href="<?php echo U('home/category/index',array('cateid'=>$value['cid']));?>"
                            target="_blank" data-mtype="store_index_kwd_1_g" data-mdesc="第1个楼层上方小导航的“更多”按钮">
                                更多
                                <span class="more-arrow more-icon">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="home-rmd-main">
                        <div class="home-rmd-cotent">
                          <?php  foreach ($value['goods'] as $k => $v) { ?>
                                 <div class="rmd-box rmd-box-product">
                                    <a href="<?php echo U('home/shopdetail/index',array('good_id'=>$v['good_id']));?>" target="_blank"
                                    data-mtype="store_index_kw_1_2" data-mdesc="第1个楼层第2个坑">
                                        <div class="rmd-product-detail">
                                            <img style="display: inline;" class="home-img-lazy" 
                                            alt="魅蓝3" src="/mz/<?php echo $v['good_pic'] ?>"
                                            height="180" width="180">
                                            <div class="rmd-product-desc">
                                                <h4 class="rmd-product-title">
                                                    <?php echo $v['good_name'] ?>
                                                </h4>
                                                <h6 class="rmd-product-subtitle red">
                                                    <!-- <span class="rmd-product-subtitle-label">
                                                        现货
                                                    </span> -->
                                                    <?php echo $v['good_desc'] ?>
                                                </h6>
                                                <!-- TODO 替换为内容-->
                                                <p class="rmd-product-price">
                                                    ¥
                                                    <span>
                                                        <?php echo $v['good_marketprice'] ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <?php  if($v['isnew'] == 1){ ?>
                                              <div class="box-product-sign" style="background-color: #00c3f5;">
                                                新品
                                              </div>
                                            <?php
 } ?>
                                        
                                    </a>
                                </div>
                              <?php
 } ?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- 图片开始 -->
          <?php  if ($key != (count($mainGoodRes) - 1)) { ?>
                <div class="home-full-box "> 
                 <div class="mzcontainer"> 
                   
                 </div> 
                </div>
              <?php
 } ?>
          
          <!-- 图片结束 -->
        <?php
 } ?>
    
    <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.10.1.js"></script>
    <script type="text/javascript">
        $(function(){
            //分类进出
            $('.home-category-nav-item ').hover(function() {
                $(this).find('.category-nav-children').show();
                $(this).siblings().find('.category-nav-children').hide();
            }, function() {
                $(this).find('.category-nav-children').hide();
            });

            //banner轮播图
            var change_time = setInterval(run,3000);
            var num = 0 ;
            run();
            //定时器执行方法
            function run() {
                $('.home-slider-box').eq(num).fadeIn("slow").siblings().fadeOut("show");
                $('.bx-pager-link').eq(num).css({"background":"#00c3f5"}).parent('div').siblings().find('.bx-pager-link').css({"background":""});
                if(num == $('.home-slider-box').length-1){
                    num = 0;
                }else{
                    num++;
                }
            }
            //鼠标进入特定区域 轮播停止
            $(".bx-viewport , .bx-prev , .bx-next , .bx-pager-item").mouseover(function(event) {
                clearInterval(change_time);
            });
            //鼠标离开特定区域 从新轮播
            $(".bx-viewport , .bx-prev , .bx-next , .bx-pager-item").mouseout(function(event) {
                change_time = setInterval(run,3000);
            });
            //鼠标点击 小点 切换到对应的banner
            $('.bx-pager-item').click(function(){
                //点击取得当前对象中对应的下标
                num = $(this).index();
                run();
            });
            //点击下一张
            $('.bx-next').click(function(){
                run();
            });
            //点击上一张
            $('.bx-prev').click(function(){
                //最后一张是 num=0 显示倒数第二张 $('.banner li').length-2 = 3
                if(num==0){
                    num=$('.home-slider-box').length-2;
                    run();
                //如果是第一张 num=1  显示最后一张 num=$('.banner li').length-1 =4
                }else if(num==1){
                    num=$('.home-slider-box').length-1;
                    run();
                }else{
                    num-=2;
                    run();
                }
            });
        })
    </script>
    <!-- common footer -->



  

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