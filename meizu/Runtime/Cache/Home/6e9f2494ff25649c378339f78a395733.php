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


  <link rel="stylesheet" href="/mz/Public/Home/css/order_add_new.css">
<link rel="stylesheet" href="/mz/Public/Home/css/order.css">
<form method="post" action="<?php echo U('home/order/ordercommit');?>" id="realFrom"> 
   <div id="storeContainer"> 
    <div class="mz_content clearfix"> 
    <h1>确认订单</h1>
     <div class="order_nav" style="position:absolute;right:50px;"> 
        <span style="color:#47D3F8">购物车 > 确认订单 ></span> 在线支付 > 完成
     </div><br> <br>
     <div class="order_title">
       <h2 style="color:black;font-size:24px;font-weight:bold">收货人信息</h2> 
      <!--          <div class="update_tips">
                <i class="order_icons tips_icons"></i>
                因配送地址库升级，部分地址需升级后方可使用！
            </div>--> 
      <span class="err_msg address_error_tip"></span> 
     </div> 
     <div class="line"></div> 
     <div class="user_msg"> 
      <div class="address_list" id="addressList">
       <!-- 用户地址列表 --> 
       <?php  foreach ($addrRes as $key => $value) { ?>
          <div style="display:inline-block" class="address_box <?php if($value['isdefault'] == 1) echo 'active' ?>" addrid="<?php echo $value['id'] ?>" data-provinces="14848" data-city="14849" data-area="14850" data-street="14852" data-other="小白楼街道" data-citycn="北京" data-addressdetial="番禺区沙湾镇丽景花苑" data-isold="0"> 
            <div class="top"> 
             <span class="name"><?php echo $value['realname'] ?></span> 
             <span class="phone"><?php echo $value['phone'] ?></span> 
            </div> 
            <div class="bottom">
             <?php echo $value['province'].$value['city'].$value['county'].$value['detail_addr'] ?>
            </div> 
            <div class="control"> 
             <span class="edit" addrid="<?php echo $value['id'] ?>">修改</span> 
             <span class="del" addrid="<?php echo $value['id'] ?>">删除</span> 
            </div> 
            <div class="update_tips"> 
             <div class="order_icons box_triangle"></div> 
             <div class="tips_content">
               因配送地址库升级，提交订单前，请务必完善地址信息，让您享受更好的配送服务。
              <div class="order_btn primary">
               立即完善
              </div> 
             </div> 
            </div> 
           </div>
       <?php } ?>       
      </div> 

    




      <div class="user_address"> 
         <div class="add_address" id="addAddress">
                <div class="add_icon">
                 +
                </div>
                <span class="str">添加新地址</span>
                <span class="err_msg" data-errname="form_validation"></span>
         </div> 
       <div class="add_form" id="addFrom" style="display:none"> 
        <div class="tr"> 
               <div class="th">
                收件人
               </div> 
               <div class="td">
                <input type="text" class="order_input publicuse" name="realname" id="realname" maxlength="12" placeholder="长度不超过12个字" />
                <i class="must" data-errname="consName"></i>
               </div> 
        </div> 
              <div class="tr"> 
               <div class="th">
                手机
               </div> 
               <div class="td">
                <input type="text" class="order_input publicuse" name="phone" id="phone" maxlength="11" placeholder="请输入11位手机号" />
                <i class="must" data-errname="consPhone"></i>
               </div> 
              </div> 
        <div class="tr"> 
         <div class="th">
          地址
         </div>
         <style type="text/css">
            select{
              line-height: 35px;
              width: 190px;
              height: 35px;
              border: 1px solid #e0e0e0;
              padding-left: 10px;
              appearance:none;
              -moz-appearance:none;
              -webkit-appearance:none;
              padding-right: 14px;
              background: #fff url(/mz/Public/home/images/selectIcon.png) no-repeat 180px 25px;
              color: #515151;
              padding-left: 6px;
              }                
            }
        </style> 
         <div class="td" id="citys"> 
            <div class="row clearfix receverAddress"> 
            <!--  <input type="text" readonly="true" class="mzui_select_trigger town" placeholder="乡镇/街道" /> -->
            <!-- 三级联动start -->
            <select id="seachprov" name="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>&nbsp;&nbsp;
            <select id="seachcity" name="homecity" onChange="changeCity(this.value,'seachdistrict','seachdistrict');"></select>&nbsp;&nbsp;
            <select id="seachdistrict" name="seachdistrict"></select>
            <!-- <span id="seachdistrict_div"><select id="seachdistrict" name="seachdistrict"></select></span> -->
            <!-- <input type="button"  value="获取地区" onClick="showAreaID()"/> -->
            <!-- 三级联动end -->
            <div class="mzui_select_other hide"> 
             <input type="text" class="otherAddress _otherAddress errorRed" placeholder="其他" /> 
             <span class="error">必填</span>
            </div> 
         </div>
         </div> 
        </div> 
        <div class="tr"> 
         <div class="th"></div> 
         <div class="td detial_address">
          <span></span>
          <input type="text" class="order_input publicuse" name="detail_addr" id="detail_addr" placeholder="请输入不超过50个字的详细地址，例如：路名、门牌号" />
          <i class="must" data-errname="consAddress"></i>
         </div> 
        </div> 
        <div class="tr"> 
         <div class="th"></div> 
         <div class="td">
          <div class="order_btn primary addrsave" id="saveanduse">
           保存并使用
          </div>
          <div class="order_btn cancel">
           取消
          </div>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 




     <div class="order_others"> 
            <div class="tr"> 
             <div class="th">
              配送方式：
             </div> 
             <div class="td send_type">
              快递配送（免运费）
             </div> 
             <div class="td delivery_tomorrow" id="fastArrival"> 
              <a class="speed_icon" target="_blank" href="http://store.meizu.com/marrive/summary.html"></a> 
              <span class="speed_text"></span>
             </div> 
            </div>


           
     </div> 
     <div class="order_title">
       <h2 style="font-size:24px;font-weight:bold;color:#000000">确认订单信息</h2> 
     </div> 
     <table cellpadding="0" cellspacing="0" class="product_table"> 
      <thead> 
       <tr> 
        <th width="150" style="color:#000000">商品</th> 
        <th width="450" class="supplier"> 
        </th> 
        <th width="100" style="color:#000000">单价</th> 
        <th width="200" style="color:#000000">数量</th> 
        <th style="color:#000000">小计</th> 
        <th style="color:#000000">配送方式</th>
       </tr> 
      </thead>
      <style type="text/css">
        .selfdo{
          display: inline-block;
          position: relative;
          width: 110px;
        }
        .selfminus{
          color: red;
          position: absolute; 
          display: inline-block;
          left: -2px;
          height: 24px;
          top:-1px;
          background-color: #f0f0f0;
          width: 20px;
          font-size: 18px;
          border: 1px solid #e5e5e5;
          cursor: pointer;
        }
        .selfadd{
          color: red;
          position: absolute; 
          display: inline-block;
          top:-1px;
          right: -2px;
          height: 24px;
          background-color: #f0f0f0;
          width: 20px;
          font-size: 18px;
          border: 1px solid #e5e5e5;
          cursor: pointer;
        }
        .selfall:hover{
          background-color: #B0B0B0;
          color: white;
        }
        .good_stocks{
          margin-top: 10px;
          font-family: "微软雅黑","Microsoft Yahei",Arial,Helvetica,sans-serif,"宋体";
         font-size: 14px;
        }
      </style>
      <tbody>
        <?php  $totalprice = 0; foreach ($res as $key => $value) { ?>
              <tr> 
              <!-- 得到商品的总价 -->
              <?php $totalprice = $totalprice + $value['good_price'] * $value['good_num']; ?>

                <input type="hidden" name="carid[]" value="<?php echo $value['carid'] ?>" >
                <input type="hidden" name="gdlist_id[]" value="<?php echo $value['gdlistid'] ?>">
                <input type="hidden" name="good_num[]" value="<?php echo $value['good_num'] ?>">
                <input type="hidden" name="good_id[]" value="<?php echo $value['good_id'] ?>">
                <td class="img"><img src="/mz/<?php echo $value['good_pic'] ?>" /></td> 
                <td class="detial"> <p class="title"> <a target="_blank" href="javascript:void()"> <br><br>
                   <!--如果是套餐则显示套餐--> <?php echo $value['good_name'] ?> <?php echo $value['attr_combine'] ?> </a> </p> </td> 
                <td class="price"> &yen;&nbsp;<?php echo $value['good_price'] ?> </td> 
                <td>
                    <?php echo $value['good_num'] ?>
                </td> 
                <td class="price" style="color:red;font-size:22px;font-weight:bold">&yen;&nbsp;<?php echo $value['good_price'] * $value['good_num'] ?></td> 
                <td>
                    快递配送：运费0.00
                </td>
              </tr>
           <?php  } ?>

      </tbody> 
     </table> 
     <div style="width:1240px;height:110px;background:#F5F5F5;position:relative;margin-top:-49px;font-weight:bold;font-size:22px;color:black;line-height:110px">
          <span style="float:right">合计：<span style="color:red">&yen;&nbsp;<?php echo $value['good_price'] * $value['good_num'] ?></span>&nbsp&nbsp&nbsp&nbsp&nbsp</span>
     </div>
     <div class="order_total"> 
      <div class="tr"> 
       <div class="th">
        总金额
       </div> 
       <div class="td">
        &yen;&nbsp;<?php echo $totalprice ?>
       </div> 
      </div>  
      <div class="tr"> 
       <div class="th">
        运费
       </div> 
       <div class="td">
        &yen;&nbsp;0
       </div> 
      </div> 
      <div class="line"></div> 
      <div class="tr"> 
       <div class="th">
        应付：
       </div> 
       <div class="td total_price" style="color:red;font-size:22px">
        &yen;&nbsp;
        <span id="totalPrice"><?php echo $totalprice ?> <input type="hidden" name="order_price" value="<?php echo $totalprice ?>"></span>
       </div> 
      </div> 
      <div class="tr" style="display: none"> 
       <div class="th">
        可获得商城积分：
       </div> 
       <div class="td">
        0 分
       </div> 
      </div> 
      <div class="tr verifica">
        验证码 
       <input type="text" class="order_input"  id="validCode" ok='' /> 
       <img src="<?php echo U('home/register/verify');?>" style="cursor: pointer;" onClick="this.src=this.src+'?'+Math.random()" /> 
       <i class="must"></i> 
      </div> 
      <div class="tr verifica_tips" id="verificaTips" ></div> 
      <div class="tr"> 
       <div class="order_btn primary" id="commitorder">
        提交订单
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </form>
  <script type="text/javascript" src="/mz/Public/Home/js/jquery-1.10.1.js"></script>
  <!-- 引入三级联动的文件 -->
  <script src="/mz/Public/sanjiliandong/js/Area.js" type="text/javascript"></script>
  <script src="/mz/Public/sanjiliandong/js/AreaData_min.js" type="text/javascript"></script>
   <!-- 引入笑脸哭脸的js -->
  <script type="text/javascript" src="/mz/Public/layer/layer.js"></script>
  <script type="text/javascript">
  $(function (){
    initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array, '44', '0', '0');
  });

  //得到地区码
  function getAreaID(){
    var area = 0;          
    if($("#seachdistrict").val() != "0"){
      area = $("#seachdistrict").val();                
    }else if ($("#seachcity").val() != "0"){
      area = $("#seachcity").val();
    }else{
      area = $("#seachprov").val();
    }
    return area;
  }

  function showAreaID() {
    //地区码
    var areaID = getAreaID();
    //地区名
    var areaName = getAreaNamebyID(areaID) ;
    alert("您选择的地区码：" + areaID + "      地区名：" + areaName);            
  }

  //根据地区码查询地区名
  function getAreaNamebyID(areaID){
    var areaName = "";
    if(areaID.length == 2){
      areaName = area_array[areaID];
    }else if(areaID.length == 4){
      var index1 = areaID.substring(0, 2);
      areaName = area_array[index1] + " " + sub_array[index1][areaID];
    }else if(areaID.length == 6){
      var index1 = areaID.substring(0, 2);
      var index2 = areaID.substring(0, 4);
      areaName = area_array[index1] + " " + sub_array[index1][index2] + " " + sub_arr[index2][areaID];
    }
    return areaName;
  }
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    //修改默认地址
    $(document).on('click', '.address_box', function(event) {
      $('.add_address').attr('id', 'addAddress');            //还原默认的。
      $('.add_address').children('.str').html('添加新地址'); //还原默认的。
      $('.addrsave').attr('id', 'saveanduse');

      if($(this).hasClass('active')) return false;     //如果本身就是默认地址 就直接返回false
      var addrid = $(this).attr('addrid');
      var thisobj = $(this);
      $('#addFrom').slideUp("slow");
      var objArr = $('.publicuse');
      $.each(objArr, function(index, val) {
         $(this).val('');
      });

      $.ajax({
        url: '<?php echo U("home/order/isdefault");?>',
        type: 'POST',
        dataType: 'json',
        data: {addrid: addrid},
        success:function(data){
          if(data.error == 0){
            thisobj.addClass('active').siblings('.address_box').removeClass('active');
          }else{
            alert('修改默认地址出错');
          }
        },  
        error:function(){
          alert('通信错误');
        }
      })
    });
    $('#addAddress').toggle(function(){
      $('#addFrom').slideDown("slow");
    },function(){
      $('#addFrom').slideUp("slow");
    })
    

    $(document).on('click', '#saveanduse', function(event) {
      thisobj = $(this);
       var addInfo = {
          realname : $('#realname').val(),
          phone : $('#phone').val(),
          province : $('#seachprov').find("option:selected").text(), //获取省对的text
          province_num : $('#seachprov').val(),                     //获取到省得编号
          city : $('#seachcity').find("option:selected").text(), //获取到城市的text
          city_num : $('#seachcity').val(),                         //获取到城市的编号
          county : $('#seachdistrict').find("option:selected").text(),    //获取到区的html
          county_num : $('#seachdistrict').val(),                   //获取到区的编号
          detail_addr : $('#detail_addr').val(),          //获取到详细地址
          // isdefault : $('#default').is(':checked'),         //判断是否选中设为默认地址
        };
        //检查用户是否有填写应填写的信息
        if(addInfo.realname == ''){
          layer.msg('姓名不能为空',{icon:5,time:1000});
          return false;
        }
        if(addInfo.phone == ''){
          layer.msg('手机号码不能为空',{icon:5,time:1000});
          return false;
        }
        if(!/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(addInfo.phone)){
          layer.msg('手机号码格式不对',{icon:5,time:1000});
          return false;
        }
        if(addInfo.province_num == 0){
          layer.msg('请选择省',{icon:5,time:1000});
          return false;
        }
        if(addInfo.city_num == 0){
          layer.msg('请选择市',{icon:5,time:1000});
          return false;
        }
        if(addInfo.detail_addr == ''){
          layer.msg('详细地址不能为空',{icon:5,time:1000});
          return false;
        }
        //全部通过以后
        $.ajax({
          url: '<?php echo U("home/order/saveadd");?>',
          type: 'POST',
          dataType: 'json',
          data: {alldata: addInfo},
          success:function(data){
            if(data.error == 0){

              $('#addFrom').slideUp("slow");  //成功之后滑上去 
              var objArr = $('.publicuse');
              $.each(objArr, function(index, val) { //并且清空文本框
                 $(this).val('');
              });

              $('.address_box').removeClass('active');
              $('#addressList').append('<div class="address_box active" addrid="'+data.insertid+'"  data-isold="0"><div class="top"><span class="name">'+addInfo.realname+'</span><span class="phone">'+addInfo.phone+'</span></div> <div class="bottom">'+addInfo.province+addInfo.city+addInfo.county+addInfo.detail_addr+'</div><div class="control"><span class="edit" addrid="'+data.insertid+'">修改</span><span class="del" addrid="'+data.insertid+'">删除</span></div><div class="update_tips"><div class="order_icons box_triangle"></div><div class="tips_content">因配送地址库升级，提交订单前，请务必完善地址信息，让您享受更好的配送服务。<div class="order_btn primary">立即完善</div></div></div></div>');
            }else{
              layer.msg(data.msg,{icon:5,time:1000});
            }
          },
          error:function(){
             layer.msg(通讯错误,{icon:5,time:1000});
          }
        })
        
    });

    //点击了取消
    $(document).on('click', '.cancel', function(event) {

      $('#addFrom').slideUp("slow");
      var objArr = $('.publicuse');
      $.each(objArr, function(index, val) {
         $(this).val('');
      });
      // order_title
      $('html,body').stop().animate({scrollTop: $('.order_title').offset().top}, 500); 

      $('.add_address').attr('id', 'addAddress');            //还原默认的。
      $('.add_address').children('.str').html('添加新地址'); //还原默认的。
      $('.addrsave').attr('id', 'saveanduse');               //还原默认的。
    });

    //点击删除地址
    $(document).on('click', '.del', function(event) {
      var addrid = $(this).attr('addrid');
      var thisobj = $(this);

      $.ajax({
        url: '<?php echo U("home/order/addressDelete");?>',
        type: 'POST',
        dataType: 'JSON',
        data: {addrid: addrid},
        success:function(data){
          if(data.error == 0){
             thisobj.parents('.address_box').remove();
          } 
        },
        error:function(){

        }
      })

      return false; //阻止后面事件的发生。
    });

    //点击编辑地址
    var editindexnum = 0;
    $(document).on('click', '.edit', function(event) {
      addrid = $(this).attr('addrid');
      thisobj = $(this);
      editindexnum =  $(this).parents('.address_box').index();  //保存当前父亲的索引
      $.ajax({
        url: '<?php echo U("home/order/addredit");?>',
        type: 'POST',
        dataType: 'JSON',
        data: {addrid: addrid},
        success:function(data){
          $('#realname').val(data[0].realname);
            $('#phone').val(data[0].phone);
            $('#detailAddress').val(data[0].detail_addr);
            $('#seachprov').val(data[0].province_num);   //省的默认选择
            changeComplexProvince(data[0].province_num, sub_array, 'seachcity', 'seachdistrict');
            $('#seachcity').val(data[0].city_num);       //市的默认选择
            if(data[0].county_num != 0){                 //修复下拉框选择的bug。
              changeCity(data[0].city_num,'seachdistrict','seachdistrict'); //
              $('#seachdistrict').val(data[0].county_num);  //区的默认选择
            }
            $('#detail_addr').val(data[0].detail_addr);
            $('#addAddress').attr('id', 'editaddr');
            $('#editaddr').children('.str').html('修改地址');
            $('.addrsave').attr('id', 'editsave');       //把添加的按钮改成修改的按钮
            $('#editsave').attr('addrid', addrid);
            $('#addFrom').slideDown("slow");

            $('html,body').stop().animate({scrollTop: $('.add_icon').offset().top}, 500); 
        },
        error:function(){

        }
      })
      return false;//阻止后面事件的发生。 因为修改是放在div的大块里面的。
    });
    
    //编辑保存了;
    $(document).on('click', '#editsave', function(event) {
       thisobj = $(this);
       var addrid = $(this).attr('addrid');
       var addInfo = {
          realname : $('#realname').val(),
          phone : $('#phone').val(),
          province : $('#seachprov').find("option:selected").text(), //获取省对的text
          province_num : $('#seachprov').val(),                     //获取到省得编号
          city : $('#seachcity').find("option:selected").text(), //获取到城市的text
          city_num : $('#seachcity').val(),                         //获取到城市的编号
          county : $('#seachdistrict').find("option:selected").text(),    //获取到区的html
          county_num : $('#seachdistrict').val(),                   //获取到区的编号
          detail_addr : $('#detail_addr').val(),          //获取到详细地址
          id : addrid,
          // isdefault : $('#default').is(':checked'),         //判断是否选中设为默认地址
        };
        //检查用户是否有填写应填写的信息
        if(addInfo.realname == ''){
          layer.msg('姓名不能为空',{icon:5,time:1000});
          return false;
        }
        if(addInfo.phone == ''){
          layer.msg('手机号码不能为空',{icon:5,time:1000});
          return false;
        }
        if(!/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(addInfo.phone)){
          layer.msg('手机号码格式不对',{icon:5,time:1000});
          return false;
        }
        if(addInfo.province_num == 0){
          layer.msg('请选择省',{icon:5,time:1000});
          return false;
        }
        if(addInfo.city_num == 0){
          layer.msg('请选择市',{icon:5,time:1000});
          return false;
        }
        if(addInfo.detail_addr == ''){
          layer.msg('详细地址不能为空',{icon:5,time:1000});
          return false;
        }
        //全部通过以后
        $.ajax({
          url: '<?php echo U("home/order/editsave");?>',
          type: 'POST',
          dataType: 'json',
          data: {alldata: addInfo},
          success:function(data){
            if(data.error == 0){
              $('.address_box').eq(editindexnum).replaceWith('<div class="address_box active" addrid="'+addrid+'"  data-isold="0"><div class="top"><span class="name">'+addInfo.realname+'</span><span class="phone">'+addInfo.phone+'</span></div> <div class="bottom">'+addInfo.province+addInfo.city+addInfo.county+addInfo.detail_addr+'</div><div class="control"><span class="edit" addrid="'+addrid+'">修改</span><span class="del" addrid="'+addrid+'">删除</span></div><div class="update_tips"><div class="order_icons box_triangle"></div><div class="tips_content">因配送地址库升级，提交订单前，请务必完善地址信息，让您享受更好的配送服务。<div class="order_btn primary">立即完善</div></div></div></div>');
              $('.address_box').eq(editindexnum).siblings('.address_box').removeClass('active');


              $('html,body').stop().animate({scrollTop: $('.order_title').offset().top}, 500);
              $('#addFrom').slideUp("slow");
              var objArr = $('.publicuse');
              $.each(objArr, function(index, val) {
                 $(this).val('');
              });


              $('#editaddr').attr('id', 'addAddress');
              $('#addAddress').children('.str').html('添加新地址');
              $('.addrsave').attr('id', 'saveanduse');       //把添加的按钮改成修改的按钮
              $('#saveanduse').removeAttr('addrid');
              $('#addFrom').slideUp("slow");

            }else{
              alert('修改失败');
            }
          },
          error:function(){

          }
        });
    });

    //检测验证码
    $(document).on('blur', '#validCode', function(event) {
      var thisobj = $(this);
      var value = $(this).val();
      if(value == ''){
        $('#verificaTips').html('');
        thisobj.attr('ok', '');
        return false;
      }
      $.ajax({
        url: '<?php echo U("home/register/ckeckverify");?>',
        type: 'POST',
        dataType: 'json',
        data: {verifycode: value},
        success:function(data){
          if(data.error == 0){
            thisobj.attr('ok', 'ok');
            $('#verificaTips').html('');
          }else{
            thisobj.attr('ok', '');
            $('#verificaTips').html(data.returnMsg);
          }
        },
        error:function(){

        }
      })
    });


    //提交订单按钮  检查有没有默认地址
    $(document).on('click', '#commitorder', function(event) {
      var allowSubmit = false;
      var addrArr = $('.address_box');
      $.each(addrArr, function(index, val) {
         if($(this).hasClass('active')){
          allowSubmit = true;
         }
      });

      if(!allowSubmit){
        layer.msg('请先设置默认地址',{icon:5,time:1000});
        return false;
      }

      if($('#validCode').attr('ok') == ''){
        layer.msg('请先填写验证码',{icon:5,time:1000});
        $('#validCode').focus();
        return false;
      }

      $('#realFrom').submit();

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