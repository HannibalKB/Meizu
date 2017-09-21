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

  
  
  
  <input type="hidden" id="good_id" value="<?php echo $_GET['good_id'] ?>">
  <main class="wrapper"> 
   <div class="container"> 
    <section class="crumbs clearfix"> 
     <a data-mtype="store_de_mbx_1" href="<?php echo U('home/index/index');?>">首页</a>&nbsp;&gt;&nbsp; 
     <a class="ellipsis crumbs-title"><?php echo $goodRes[0]['good_name'] ?></a> 
    </section> 
    <section class="row"> 
     <div class="preview" id="preview"> 
      <div class="preview-booth"> 
       <a href="javascript:;" id="J_imgBooth">
        <!-- 默认显示第0张 -->
        <img src="/mz/<?php echo $gooditemsl[0]['good_imgs'][0] ?>" height="450" width="450" alt="" id="bigimages" /> </a> 
      </div> 
      <ul class="preview-thumb clearfix" id="J_previewThumb" style="position:absolute;margin-top:-160px;left:20px">
      <?php  foreach ($gooditemsl[0]['good_imgs'] as $key => $value) { ?>
            <li class="">
              <a data-mtype="store_de_tp_11" href="javascript:void(0)">
                <img src="/mz/<?php echo $value ?>" width="70" height="70" />
              </a>
            </li>
          <?php
 } ?>
      </ul> 
     </div>
     <input type="hidden" value="<?php echo $_SESSION['uid'] ?>" id="setsession">
     <div class="property" id="property" style="position:absolute;margin-left:540px"> 
      <div class="property-hd"> 
       <h1><?php echo $goodRes[0]['good_name'] ?></h1> 
       <p class="mod-info"><?php echo $goodRes[0]['good_desc'] ?></p><br><span style="font-size:12px">价&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp格:</span>&nbsp&nbsp&nbsp&nbsp 
       <p class="mod-price" style="display:inline-block;font-size:26px"><em class="vm-yen" style="font-size:26px">&yen;</em> <span class="vm-price" id="J_price" ><?php  echo $gooditemsl[0]['good_price'] ?></span> </p> 
      </div> 
    <br>
      <span class="selfadd" id="selfadd">
      <?php
 foreach ($skuresArr as $key => $value) { ?>
              <dl class="property-sale"> 
               <dt class="vm-metatit">
                <?php echo $key ?>
               </dt> 
               <dd> 
                <ul data-property="<?php echo $key ?>" class="clearfix" style="position:relative">
                  <?php foreach ($value as $k => $v) { ?>
                          <li data-value="14:18238" 

                           attrid="<?php echo $v['good_attr_id'] ?>" title="<?php echo $v['good_attr_value'] ?>" 
                           class='publicuse  <?php if(in_array($v['good_attr_id'], $gooditemsl[0]['attr_combine'])){ echo 'selected'; } if(!in_array($v['good_attr_id'],$have)){ echo 'disabled' ;} ?> '
                          > 
                            <a data-mtype="store_de_sp_1_1" href="javascript:void(0)" style=""> <span><?php echo $v['good_attr_value'] ?></span> 
                            </a> 
                           </li>
                        <?php } ?>
                </ul> 
               </dd> 
              </dl>
            <?php } ?>
    </span><br>
      <dl class="property-quantity"> 
       <dt class="vm-metatit">
        数量:
       </dt> 
       <dd class="clearfix"> 
        <div class="property-quantity-control"> 
         <a title="减少" href="javascript:;" class="vm-minus">-</a> 
         <input type="text" value="1" id="J_quantity" data-max="<?php echo $gooditemsl[0]['good_stock'] ?>" /> 
         <a title="增加" href="javascript:;" class="vm-plus">+</a> 
        </div> 
        <!-- <span id="J_Stock" class="vm-count">（最大库存量: <span id="stockself"><?php echo $gooditemsl[0]['good_stock'] ?></span> ）</span>  -->
       </dd> 
      </dl> 
      <dl class="property-service"> 
       <dt class="vm-metatit">
        支持:
       </dt> 
       <dd class="clearfix"> 
        <span><i class="icon icon-service"></i>花呗分期 顺丰包邮  7天无理由退货</span> 
       </dd> 
      </dl> 
      
      <dl class="property-service"> 
       <dt class="vm-metatit">
        服务：
       </dt> 
       <dd class="clearfix"> 
        <span><i class="icons icon-invoice"></i>本商品由 魅族 负责发货并提供售后服务</span> 
       </dd> 
      </dl> 
      <dl class="property-info" id="propertyInfo"> 
       
       <dd class="mod-total">
         总计:
        <em class="vm-price" id="J_totalPrice">￥<?php echo $gooditemsl[0]['good_price'] ?></em> 
       </dd> 
      </dl> 
      
      <dl class="property-buy" id="J_BuyOrDiy"> 
       <dt class="vm-message" id="J_message"> 
       </dt>

       
        <dd>
          <a id="J_btnCar" class="btn btn-primary btn-lg" data-mtype="store_de_buy" href="javascript:void(0);" style="color: rgb(255, 255, 255);background-color: rgb(94, 185, 94);border-color: rgb(94, 185, 94);">加入购物车</a>
          <span class="vm-service ml10" id="J_panicBuyingWrap"></span>

           <a id="J_btnBuy" class="btn btn-primary btn-lg" data-mtype="store_de_buy" href="javascript:void(0);" style="background:#2AC4F6">立即购买</a>
          <span class="vm-service ml10" id="J_panicBuyingWrap"></span>

          <a id="J_btnSo" class="btn btn-primary btn-lg" data-mtype="store_de_buy" href="javascript:void(0);" style="background:#64C964">收藏</a>
          

        </dd>
      </dl> 

     </div> 
    </section> <br><br><br>
   </div><br> <br> <br> 
   <section class="row detail" id="detail"> 
    <div style="height:62px;"> 
     <div class="detail-tab" id="detailTabFixed"> 
      <div class="fixed-container"> 
       <ul class="clearfix"> 
        <li class="current switchClick"> <a data-mtype="store_de_xq_1" href="javascript:void(0)">商品详情</a> </li> 
        <li class="switchClick"> <a data-mtype="store_de_xq_2" href="javascript:void(0)">规格参数</a> </li> 
       <!--  <li class="switchClick"> <a data-mtype="store_de_xq_3" href="javascript:void(0)">常见问题</a> </li>  -->
       </ul> 
       <div class="shortcut trans"> 
        <div class="mod-buy"> 
         <a href="javascript:void(0);" id="J_btnBuyShortcut" class="btn btn-primary btn-lg"><i></i>现在购买</a> 
        </div> 
        <div class="mod-total">
          总计:
         <em class="vm-price" id="J_totalPriceShortcut">￥599.00</em> 
        </div> 
        <div class="mod-title">
          魅蓝3 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="detail-content container"> 
     <div class="introduce" id="introduce" style="display:block;text-align:center"> 
        <?php echo $goodRes[0]['good_detail'] ?>
     </div> 
     <div class="standard" id="standard" > 
      <table class="standard-table"> 
       <tbody>
        <?php  foreach ($normNameRes as $key => $value) { ?>
               <tr> 
                 <th style="text-align:center;"> <?php echo $value ?> </th> 
                 <td> <?php echo $goodRes[0]['canshu'][$key] ?> </td> 
              </tr> 
            <?php
 } ?> 
       </tbody> 
      </table> 
     </div> 
     
    </div> 
   </section> 
  </main> 
  <input type="hidden" name="curr_microtime" id="curr_microtime" value="1469759228898" /> 
  
  <script charset="utf-8" src="/mz/Public/Home/js/site-lib.js"></script> 
  <script type="text/javascript" src="/mz/Public/Home/js/site-base.js"></script> 
  <script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script> 
  <!-- 
  <script type="text/javascript" src="/mz/Public/Home/js/pkg-detail-85e3f9a.js"></script> 
   -->

  <script type="text/javascript">
    $(document).ready(function() {
      var licount = $('.property-sale').length; //获取到总数
      //页面加载的时候为第一个li加一个current的class
      $('#J_previewThumb').children('li').eq(0).addClass('current');

      //图片切换
      $('#J_previewThumb').children('li').click(function(event) {
        $(this).addClass('current').siblings().removeClass('current');
        var src = $(this).children().find('img').attr('src');
        $('#bigimages').attr('src', src);
      });

      //当点击li的时候
      $(document).on('click', '.publicuse', function(event) {

        if($(this).hasClass('disabled')){
          return false;
        }

        //如果点击的是自己,那么就去除自己的selected样式
        if($(this).hasClass('selected')){
          $(this).removeClass('selected');
        // 否则就是点击的项
        }else{
          $(this).addClass('selected').siblings().removeClass('selected');
        }
        
       
        var skuStr = '';
        $.each($('.selected'), function(index, val) {
          skuStr = skuStr  + $(this).attr('attrid') + ',';
        });
        
        //如果没有点就不走异步.
        if(skuStr == ''){
          return false;
        }
        var gid = $('#good_id').val();
         $.ajax({
            url: '<?php echo U("home/shopdetail/checksku");?>',
            type: 'POST',
            dataType: 'json',
            data: {sku: skuStr,good_id : gid},
            success:function(data){
              if(data.error == 0){
                $('#selfadd').html(data.strMsg);

                //如果选的sku是完整的就有返回价格
                if(data.good_price){
                  $('#J_price').html(data.good_price);
                  $('#J_totalPrice').html('￥'+data.good_price);
                }
                //如果不是完整的就没有返回价格
                if(data.stock){
                  $('#J_quantity').val(1);
                  $('#J_quantity').attr('data-max', data.stock);
                  $('#stockself').html(data.stock);
                }
              }
            }
          })
      });

      
      //点击商品详情 和 规格参数 切换的
      $(document).on('click', '.switchClick', function(event) {
        $(this).addClass('current').siblings().removeClass('current');
        $('.detail-content').children('div').siblings().css('display', 'none');
        $('.detail-content').children('div').eq($(this).index()).css('display', 'block');
      });

      
      $(document).on('blur', '#J_quantity', function(event) {
        // $(this).val(1);
        if($(this).val() < 0 || !/^[0-9]*$/.test($(this).val())){
            $(this).val(1);
        }

        var stock = $('#J_quantity').attr('data-max');
        if($(this).val() > parseInt(stock)){
          $('#J_quantity').val(stock);
        }
        var price = $('#J_price').html();
        var allprice = parseInt(price) * parseInt($(this).val());
        
        $('#J_totalPrice').html('￥'+allprice);
        
      });

      // 点击+号
      $(document).on('click', '.vm-plus', function(event) {
        var num = $('#J_quantity').val();
        $('#J_quantity').val(parseInt(num) + 1);
        var selectnum = $('#J_quantity').val();
        var stock = $('#J_quantity').attr('data-max');
        if( parseInt(selectnum)  > parseInt(stock)){
          $('#J_quantity').val(stock);
        }
        var price = $('#J_price').html();
        var allprice = parseInt(price) * parseInt($('#J_quantity').val());
        // alert(price);
        $('#J_totalPrice').html('￥'+allprice);
      });


       // 点击-号
      $(document).on('click', '.vm-minus', function(event) {

        var num = $('#J_quantity').val();
        $('#J_quantity').val(parseInt(num) - 1);
        var selectnum = $('#J_quantity').val();
        if( parseInt(selectnum) < 1 ){
          $('#J_quantity').val(1);
        }
        var price = $('#J_price').html();
        var allprice = parseInt(price) * parseInt($('#J_quantity').val());
        // alert(price);
        $('#J_totalPrice').html('￥'+allprice);
      });

      //立即购买
      $(document).on('click', '#J_btnBuy', function(event) {
        var good_id = $('#good_id').val();
         //循环得到有class为selected sku组合其中的值。
        var skuStr = '';                            //获得sku的组合
        $.each($('.selected'), function(index, val) {
          skuStr = skuStr  + $(this).attr('attrid') + ',';
        });
        var skuCount = $('.property-sale').length;  //组合应有的数量
        var skuStrArr = new Array;
        skuStrArr = skuStr.split(",");    //将东西切成数组 用来做判断

        if(skuCount != (skuStrArr.length - 1)){
          alert('请选择完整信息!');
        }else{
          //提交商品的数量
          var BuyNum = $('#J_quantity').val();
          $.ajax({
            url: '<?php echo U("home/shopdetail/checkstock");?>', //检查库存
            type: 'POST',
            dataType: 'json',
            data: {good_id: good_id,combine:skuStr,good_num:BuyNum},
            success:function(data){
              if(data.error == 0){
                
                location.href = '<?php echo U("home/order/confirm");?>';
              }else{
                alert(data.msg);
              }
            },
            error:function(){ 
              alert('网络错误');
            }
          })
          
        }
      });
    



    //点击加入购物车
    $(document).on('click', '#J_btnCar', function(event) {
        if($('#setsession').val() == ''){
          if(confirm('请先登录,确定跳转到登录界面')){
            location.href='<?php echo U("home/login/index");?>';
            return false;
          }else{
            return false;
          }
          
        }
        var good_id = $('#good_id').val();
         //循环得到有class为selected sku组合其中的值。
        var skuStr = '';                            //获得sku的组合
        $.each($('.selected'), function(index, val) {
          skuStr = skuStr  + $(this).attr('attrid') + ',';
        });
        var skuCount = $('.property-sale').length;  
        var skuStrArr = new Array;
        skuStrArr = skuStr.split(",");    

        if(skuCount != (skuStrArr.length - 1)){
          alert('请选择完整信息！');
        }else{
          //提交商品的数量
          var BuyNum = $('#J_quantity').val();
          $.ajax({
            url: '<?php echo U("home/car/entercar");?>', //检查库存
            type: 'POST',
            dataType: 'json',
            data: {good_id: good_id,combine:skuStr,good_num:BuyNum},
            success:function(data){
              if(data.error == 0){
                if(confirm('增加成功,是否跳转到购物车页面?')){
                  location.href="<?php echo U('home/car/index');?>";
                }else{
                  return false;
                }
              }else{
                alert(data.msg);
              }
            },
            error:function(){ 
              // alert('网络错误');
            }
          })
        }
        return false;
    });
    //点击收藏
    $('#J_btnSo').click(function(){
         if($('#setsession').val() == ''){
          if(confirm('请先登录,确定跳转到登录界面')){
            location.href='<?php echo U("home/login/index");?>';
            return false;
          }else{
            return false;
          }
          
        }
         var collect_id = $('#good_id').val();
          $.ajax({
            url: '<?php echo U("home/car/collect");?>', 
            type: 'POST',
            dataType: 'json',
            data: {collect_id: collect_id},
            success:function(data){
              if(data.error == 0){
                alert(data.msg);
              }else{
                alert(data.msg);
              }
            },
            error:function(){ 
             alert('错误！');
            }
          })

          return false;
    })

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