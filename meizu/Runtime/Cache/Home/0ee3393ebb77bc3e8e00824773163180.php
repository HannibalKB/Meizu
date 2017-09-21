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

  
  <!-- 引入三级联动的文件 -->
  <script src="/mz/Public/sanjiliandong/js/jquery-1.7.min.js" type="text/javascript"></script>
  <script src="/mz/Public/sanjiliandong/js/Area.js" type="text/javascript"></script>
  <script src="/mz/Public/sanjiliandong/js/AreaData_min.js" type="text/javascript"></script>
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
  <div class="store-wrap"> 
   <div class="crumbs"> 
    <a href="http://store.meizu.com/">首页&gt;</a> 
    <a href="http://me.meizu.com/member/index">我的商城&gt;</a> 
    <a href="<?php echo U('home/address/addressmanage');?>" class="active">地址管理</a> 
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
     <div class="address-main"> 
      <div class="main"> 
       <div class="row"> 
        <span class="title rollit">新增收货地址</span> 
        <span class="gray">（您目前已有地址<i class="already"><?php echo $count; ?></i>个，最多还可以增加<i class="settle"><?php echo 10-$count ?></i>个）</span> 
       </div> 
       <form id="valid-form"> 
        <!-- 修改地址时要用的地址id --> 
        <input class="addressId" type="hidden" value="" /> 
        <div class="content"> 
         <div class="row namePhone clearfix"> 
          <div class="f-fl addressName"> 
           <span>收货人姓名<i class="mark">*</i></span> 
           <input class="varify" id="realname" name="realname" type="text" placeholder="长度不超过12个字" maxlength="12" /> 
          </div> 
          <div class="f-fl addressPhone"> 
           <span>收货人手机号<i class="mark">*</i></span> 
           <input id="phone" name="phone" class="varify" type="text" placeholder="请输入11位手机号" maxlength="11" /> 
          </div> 
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
         <div class="row clearfix receverAddress"> 
          <span class="f-fl">收货人地址<i class="mark">*</i></span> 
          
          <select id="seachprov" name="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>&nbsp;&nbsp;
          <select id="seachcity" name="homecity" onChange="changeCity(this.value,'seachdistrict','seachdistrict');"></select>&nbsp;&nbsp;
          <select id="seachdistrict" name="seachdistrict"></select>
          
          <div class="mzui_select_other hide"> 
           <input type="text" class="otherAddress _otherAddress errorRed" placeholder="其他" /> 
           <span class="error">必填</span>
          </div> 
         </div> 
         <div class="row  detailAddress"> 
          <span>详细地址<i class="mark">*&nbsp;&nbsp;&nbsp;</i></span> 
          <input id="detailAddress" name="address" class="varify" type="text" placeholder="请输入不超过50个字的详细地址，例如：路名，门牌号" maxlength="50" /> 
         </div> 
         <div class="opreat"> 
          <label for="default"> <input id="default" class="setDefault" type="checkbox" name="isDefault" />设为默认 </label> 
          <a href="javascript:;" class="saveAddress" id="addsave">保存</a> 
         </div> 
        </div> 
       </form> 
       <div class="list"> 
        <div class="row"> 
         <div class="title"> 
          <div>
           已有地址
          </div> 
          <div class="upload hide"> 
           <i class="iconfont icon-zhuyi"></i> 
           <span>因配送地址库数据升级，请点击地址进行升级，让您享受更好的配送服务！</span> 
          </div> 
         </div> 
        </div> 
        <div class="listHead"> 
         <span class="center w15">收货人姓名</span>
         <span class="center w35">收货人地址</span>
         <span class="center w25">收货人手机号</span>
         <span class="center w10">操作</span> 
        </div> 
        <ul id="tableList" class="">
        <?php  foreach ($res as $key => $value) { ?>
                <li class="addressli" id="addliid">
                  <input class="addressId" type="hidden" value="<?php echo $value['id']; ?>">
                  <input class="isOld" type="hidden" value="0">

                  <span class="center w15"><?php echo $value['realname']; ?></span>
                  <span class="completeAddress center w35">
                    <?php echo $value['province'].$value['city'].$value['county'].$value['detail_addr']; ?>                    
                  </span>
                  <span class="center w25"><?php echo $value['phone'] ?></span>
                  <span class="center w10">
                    <a class="edit" addrid="<?php echo $value['id'] ?>" href="javascript:;">修改</a>
                    <a class="delete" addrid="<?php echo $value['id'] ?>" href="javascript:;">删除</a>
                  </span>
                  <?php  if ($value['isdefault'] == 0) { ?>
                        <span class="left w15">
                          <a class="beDefault hide setdefault" href="javascript:;" addrid="<?php echo $value['id'] ?>">设为默认</a>
                        </span>
                      <?php
 }elseif($value['isdefault'] == 1){ ?>
                        <span class="left w15">
                          <!-- <i class="iconfont icon-default"></i> -->
                          <!-- <i class="iconfont defaultaddr"></i> -->
                          <i class="defaultAddress isdefaultaddr" addrid="<?php echo $value['id'] ?>">√默认地址</i>
                        </span>
                      <?php
 } ?>
                    
                </li>
            <?php
 } ?>
         </ul>
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
  
  <script type="text/javascript" src="/mz/Public/layer/layer.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
     $(document).on('click', '#addsave', function(event)  {
        var addInfo = {
          realname : $('#realname').val(),
          phone : $('#phone').val(),
          province : $('#seachprov').find("option:selected").text(), //获取省对的text
          province_num : $('#seachprov').val(),                     //获取到省得编号
          city : $('#seachcity').find("option:selected").text(), //获取到城市的text
          city_num : $('#seachcity').val(),                         //获取到城市的编号
          county : $('#seachdistrict').find("option:selected").text(),    //获取到区的html
          county_num : $('#seachdistrict').val(),                   //获取到区的编号
          detail_addr : $('#detailAddress').val(),          //获取到详细地址
          isdefault : $('#default').is(':checked'),         //判断是否选中设为默认地址
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
          url: '<?php echo U("home/address/addressAdd");?>',
          type: 'POST',
          dataType: 'json',
          data: {alldata: addInfo},
          success:function(data){
            
            if(data.error == 0 && data.isdefault == 1){
              //如果是默认地址的还要删除其他显示的默认地址的显示 显示当前的默认选中地址
              $('.isdefaultaddr').replaceWith('<a class="beDefault hide setdefault" addrid="'+data.oldaddrid+'" href="javascript:;">设为默认</a>');
              $('#tableList').append('<li class="addressli"> <input class="addressId" type="hidden" value="'+data.addressid+'"> <input class="isOld" type="hidden" value="0"> <span class="center w15">'+data.realname+'</span> <span class="completeAddress center w35">'+data.address+'</span> <span class="center w25">'+data.phone+'</span> <span class="center w10"> <a class="edit" addrid="'+data.addressid+'"  href="javascript:;">修改</a> <a class="delete" addrid="'+data.addressid+'" href="javascript:;">删除</a> </span> <span class="left w15">  <i class="defaultAddress isdefaultaddr" addrid="'+data.addressid+'">√默认地址</i> </span> </li>');
              $('.already').html(data.count);
              $('.settle').html(10 - data.count);
            }else if(data.error == 0){
              $('#tableList').append('<li class="addressli"> <input class="addressId" type="hidden" value="'+data.addressid+'"> <input class="isOld" type="hidden" value="0"> <span class="center w15">'+data.realname+'</span> <span class="completeAddress center w35">'+data.address+'</span> <span class="center w25">'+data.phone+'</span> <span class="center w10"> <a class="edit" addrid="'+data.addressid+'"  href="javascript:;">修改</a> <a class="delete" addrid="'+data.addressid+'" href="javascript:;">删除</a> </span> <span class="left w15">   <a class="beDefault hide setdefault" addrid="'+data.addressid+'" href="javascript:;">设为默认</a></span></li>');
              $('.already').html(data.count);
              $('.settle').html(10 - data.count);
            }else if(data.error == 2){
               layer.msg(data.msg,{icon:5,time:2000});
            }
          },
          error:function(){
          }
        })
      });
      
      //未来追加的元素点击删除按钮事件
      $(document).on('click', '.delete', function(event) {
        var currentaddrid = $(this).attr('addrid');
        var parentObj = $(this).parents('li');    //获取到当前元素的父级也就是li 等等做删除
        $.ajax({
          url: '<?php echo U("home/address/addressDelete");?>',
          type: 'POST',
          dataType: 'json',
          data: {addrid: currentaddrid},
          success:function(data){
            if(data.error == 0){
              parentObj.remove();
              $('.already').html(data.count);
              $('.settle').html(10 - data.count);
            }else{
              return false;
            }
          },
          error:function(){
             layer.msg('通信错误',{icon:5,time:1000});
          }
        });
      });

      //鼠标经过显示默认地址的几个字
      $(document).on('mouseover', '.addressli', function(event) {
        $(this).find('.setdefault').removeClass('hide');
      });
      //鼠标移出消失默认地址的几个字
      $(document).on('mouseout', '.addressli', function(event) {
        $(this).find('.setdefault').addClass('hide');
      });

      $('.addressli').hover(function(){
        $(this).css('border','1px solid #00C3F5');
      },function(){
        $(this).css('border','none');
      })

      //设为默认地址的按钮点击
      $(document).on('click', '.setdefault', function(event) {
         
         var currentobj = $(this);    //获得当前对象;
         // alert(currentobj.attr('href'));
         // return false;
         //json数据传输 
         var needdata = {
            newaddrid : $(this).attr('addrid'),    //获得当前点击的数据库地址的id
            oldaddrid  : $('.isdefaultaddr').attr('addrid'), //获得老的地址的id
         };
         $.ajax({
           url: '<?php echo U("home/address/addressDefault");?>',
           type: 'POST',
           dataType: 'json',
           data: {addrdata: needdata},
           success:function(data){
            if(data.error == 0){
              //替换原来的默认选中的东西 变成设为默认
              $('.isdefaultaddr').replaceWith('<a class="beDefault hide setdefault" addrid="'+data.oldaddrid+'" href="javascript:;">设为默认</a>');
              //当前的设为默认变成默认选中
              currentobj.replaceWith('<i class="defaultAddress isdefaultaddr" addrid="'+data.newaddrid+'">√默认地址</i>');
            }else{
              alert('执行失败');
            }
           },
           error:function(){

           },
         })
      });
      editindexnum = 0;
      //异步点击地址编辑事件
      $(document).on('click', '.edit', function(event) {
        //把原来的添加的按钮属性改变 改成id = "tmpeditsave"
        //得到点击的id
        editindexnum =  $(this).parent('span').parent('li').index();
        
        $('.saveAddress').attr('id', 'tmpeditsave');
        //得到当前对应的值
        var addressid = $(this).attr('addrid'); 
        $('.saveAddress').attr('addrid', addressid);
        var currentobj = $(this);
        $.ajax({
          url: '<?php echo U("home/address/addredit");?>',
          type: 'POST',
          dataType: 'json',
          data: {oldaddressid: addressid},
          success:function(data){
            if(data[0].isdefault == 1){
              $('#default').attr('checked',true);
              
            }else{
              $('#default').attr('checked',false);
            }
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
            
            
            $('.rollit').html('修改收获地址');
            $('html,body').stop().animate({scrollTop: $('.rollit').offset().top}, 500);
          },
          error:function(){

          }
        });
      });

      
      //异步地址修改保存事件
      $(document).on('click', '#tmpeditsave', function(event) {
        var addInfo = {
          realname : $('#realname').val(),
          phone : $('#phone').val(),
          province : $('#seachprov').find("option:selected").text(), //获取省对的text
          province_num : $('#seachprov').val(),                     //获取到省得编号
          city : $('#seachcity').find("option:selected").text(), //获取到城市的text
          city_num : $('#seachcity').val(),                         //获取到城市的编号
          county : $('#seachdistrict').find("option:selected").text(),    //获取到区的html
          county_num : $('#seachdistrict').val(),                   //获取到区的编号
          detail_addr : $('#detailAddress').val(),          //获取到详细地址
          isdefault : $('#default').is(':checked'),         //判断是否选中设为默认地址
          id : $(this).attr('addrid'),                      //得到当前地址的id
        };
        //检查用户是否有填写应填写的信息
        if(addInfo.realname == ''){
          layer.msg('姓名不能为空1',{icon:5,time:1000});
          return false;
        }
        if(addInfo.phone == ''){
          layer.msg('手机号码不能为空1',{icon:5,time:1000});
          return false;
        }
        if(!/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(addInfo.phone)){
          layer.msg('手机号码格式不对1',{icon:5,time:1000});
          return false;
        }
        if(addInfo.province_num == 0){
          layer.msg('请选择省1',{icon:5,time:1000});
          return false;
        }
        if(addInfo.city_num == 0){
          layer.msg('请选择市1',{icon:5,time:1000});
          return false;
        }
        if(addInfo.detail_addr == ''){
          layer.msg('详细地址不能为空1',{icon:5,time:1000});
          return false;
        }
        //全部通过以后
        var currentobj = $(this);
        
        
        $.ajax({
          url: '<?php echo U("home/address/editsave");?>',
          type: 'POST',
          dataType: 'json',
          data: {alldata: addInfo},
          success:function(data){
            //如果追加过来的有选中默认地址的checkbox,就是有选中默认地址相对应的也要做改变
            if(data.error == 0 && data.isdefault == 1){
              //如果是默认地址的还要删除其他显示的默认地址的显示 显示当前的默认选中地址
              $('.isdefaultaddr').replaceWith('<a class="beDefault hide setdefault" addrid="'+data.oldaddrid+'" href="javascript:;">设为默认</a>');
              $('.addressli').eq(editindexnum).replaceWith('<li class="addressli"> <input class="addressId" type="hidden" value="'+data.addressid+'"> <input class="isOld" type="hidden" value="0"> <span class="center w15">'+data.realname+'</span> <span class="completeAddress center w35">'+data.address+'</span> <span class="center w25">'+data.phone+'</span> <span class="center w10"> <a class="edit" addrid="'+data.addressid+'"  href="javascript:;">修改</a> <a class="delete" addrid="'+data.addressid+'" href="javascript:;">删除</a> </span> <span class="left w15">  <i class="defaultAddress isdefaultaddr" addrid="'+data.addressid+'">√默认地址</i> </span> </li>');
            }else{
                $('.addressli').eq(editindexnum).replaceWith('<li class="addressli"> <input class="addressId" type="hidden" value="'+data.addressid+'"> <input class="isOld" type="hidden" value="0"> <span class="center w15">'+data.realname+'</span> <span class="completeAddress center w35">'+data.address+'</span> <span class="center w25">'+data.phone+'</span> <span class="center w10"> <a class="edit" addrid="'+data.addressid+'"  href="javascript:;">修改</a> <a class="delete" addrid="'+data.addressid+'" href="javascript:;">删除</a> </span> <span class="left w15">   <a class="beDefault hide setdefault" addrid="'+data.addressid+'" href="javascript:;">设为默认</a></span></li>');
            }
            currentobj.attr('id', 'addsave');    //点击了编辑保存以后还要将原来的id重置回原来的模样
            $('#realname').val('');
            $('#phone').val('');
            $('#detailAddress').val('');
            $('#seachprov').val(addInfo.province_num);   //省的默认选择
            changeComplexProvince(addInfo.province_num, sub_array, 'seachcity', 'seachdistrict');
            $('#seachcity').val(0);       //市的默认选择
            changeCity(0,'seachdistrict','seachdistrict'); //
            $('#seachdistrict').val(0);  //区的默认选择
          },
          error:function(){
          }
        });
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