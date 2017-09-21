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


  <link rel="stylesheet" href="/mz/Public/Home/css/order.css" />
<link type='text/css' href='/mz/Public/Home/css/dialog.css' rel='stylesheet' media='screen' />
<link rel="stylesheet" href="/mz/Public/Home/css/citys.css">
<link rel="stylesheet" href="/mz/Public/Home/css/order_add_new.css">
<style type="text/css">
	.property-quantity-control{
		position: relative;
		z-index: 1;
		height: 38px;
		width: 70px;
		border: 1px solid #e5e5e5;
		border-radius: 3px;
		overflow: hidden;
		margin-left: 30%;

	}
	.vm-minus,.vm-plus{
		position: absolute;
		top: 0;
		width: 18px;
		height: 40px;
		line-height: 36px;
		font-size: 26px;
		text-decoration: none;
		text-align: center;
	}
	.vm-minus{
	    left: 0;
        border-right: 1px solid #e5e5e5;
	}
	.vm-plus{
        right: 0;
        border-left: 1px solid #e5e5e5;
    }
	.J_quantity{
        position: absolute;
		top: 0;
		left: 20px;
		width: 30px;
		height: 40px;
		padding: 0;
		line-height: 40px;
		font-size: 18px;
		border: 0;
		text-align: center;
		color: #333;
	}
</style>
<form method="post" action="<?php echo U('home/order/confirm');?>" id="realFrom">
<div id="storeContainer">

	<div class="backCoupon-main" id="nogoods" style="height:220px;display:none">
     	<div id="tableList"  class="type-contain ui-load-container">
     		<div class="ui-load-content J_no_data" style="margin-top: 30px">
     			<p class="J_no_data_des">
     				<a href="<?php echo U('home/index/index');?>" class="add_address" >购物车里还没有产品！去添加一个吧 </a>
				</p>
			</div>
		</div>
	</div>
	<?php
 if (count($res) == 0) { ?>
				<div class="backCoupon-main" style="height:220px">
			     	<div id="tableList"  class="type-contain ui-load-container">
			     		<div class="ui-load-content J_no_data" style="margin-top: 30px">
			     			<p class="J_no_data_des">
			     				<a href="<?php echo U('home/index/index');?>" class="add_address" >购物车里还没有产品！去添加一个吧 </a>
							</p>
						</div>
					</div>
				</div>
			<?php
 }else{ ?>
				<div class="mz_content clearfix">
					
					<style type="text/css">
						.stockdiv{
							margin-top: 15px;
							text-align: center;
							padding-left: 20px;
							color: #515151;
						    font-family: "微软雅黑";
							font-size: 14px;
						}
					</style>
			        <table class="product_table" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
							    <th width="50">序号</th>
								<th width="200">商品</th>
								<th width="400">商品详情</th>
								<th width="200">单价</th>
								<th width="130">数量</th>
								<th width="200">小计</th>
								<th width="80">删除</th>
							</tr>
						</thead>
						<tbody>

						<?php  $totalPrice = 0; foreach ($res as $key => $value) { $totalPrice = $totalPrice + $value['good_price']*$value['good_num']; ?>
								<tr style="border-bottom: 1px solid #e5e5e5;">
					                <td class="carid"><input type="checkbox" class="carclass" name="carid[]" value="<?php echo $value['carid'] ?>" checked="checked" >
									<input type="hidden" name="good_listid[]" value="<?php echo $value['good_listid'] ?>">
					                </td>
					                <td class="img"><img src="/mz/<?php echo $value['good_pic'] ?>"></td>
					                <td class="detial" style="text-align:center;line-height:128px;">
					                    <p class="title">
					                        <a target="_blank" href="123">
					                            <?php echo $value['good_name']." ".$value['attr_combine'] ?>
					                        </a>
					                    </p>
					                </td>
					                <td class="price" style="color:red">
					                   ¥&nbsp;<span class="goodprice"><?php echo $value['good_price'] ?></span>
					                </td>
					                <td>
						                <div class="property-quantity-control">
					                        <a title="减少" href="javascript:;" class="vm-minus">
					                            -
					                        </a>
					                        <input value="<?php echo $value['good_num'] ?>" datamax="<?php echo $value['good_stock'] ?>" class="J_quantity"   type="text">
					                        <a title="增加" href="javascript:;" class="vm-plus">
					                            +
					                        </a>
						                </div>
						                <div class="stockdiv">最大库存:<span class="stock"><?php echo $value['good_stock'] ?></span></div>
					                </td>
					                <td class="smallcount">¥&nbsp;<span class="countprice"><?php echo $value['good_price']*$value['good_num'] ?></span>
				                	</td>
				                	<td class="delcar">
				                		<a href="javascript:void" id="delcar" class="delcarid" carid="<?php echo $value['carid'] ?>" style="font-size:16px;color:#00c3f5;">删除</a>
				                	</td> 
					            </tr>
							<?php  } ?>
			       	  </tbody>
					</table>
					<div class="order_total">
						<div class="tr">
							<div class="th">总计</div>
							<div class="td">¥&nbsp;
								<span style="color:#f40;font-weight:bold;" class="totalcount"><?php echo $totalPrice; ?></span>
							</div>
						</div>
						<div class="tr verifica_tips" id="verificaTips"></div>
						<div class="tr">
							<div class="order_btn" style="border: 1px solid #00c3f5;background: #00c3f5;color: #FFF;" id="submitFrom">进入订单确认页面</div>
						</div>
					</div>
				</div>
			<?php
 } ?>
	

	
</div>
</form>
<script type="text/javascript" src="/mz/Public/Home/js/jquery-1.10.1.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//点击减号
		$(document).on('click', '.vm-minus', function(event) {
			//最大库存量
			var stock = $(this).siblings('input').attr('datamax');
			// 文本框的值
			var value = parseInt($(this).siblings('input').val());
			//获得carid 为了走异步
			var carid = $(this).parents('td').siblings('.carid').children('.carclass').val();
			//获得当前的对象
			var thisobj = $(this);
			//如果值等于1了 就不能剪了。
			if(value == 1){	
				return false;
			}else{
				$.ajax({
					url: '<?php echo U("home/car/mincar");?>',
					type: 'POST',
					dataType: 'json',
					data: {carid: carid},
					success:function(data){
						if(data.error == 0){
							thisobj.siblings('input').val( value - 1); //文本框减1
							// 得到对应商品的单价
							var goodprice = thisobj.parents('td').siblings('.price').children('.goodprice').html();
							//得到原先对应的小计的值先
							var smallcount =  parseInt(thisobj.parents('td').siblings('.smallcount').children('.countprice').html());
							//对应行的小计要改一下
							var changesmallcount = smallcount - parseInt(goodprice);

							thisobj.parents('td').siblings('.smallcount').children('.countprice').html(changesmallcount);

							//总计的地方也要减
							//先得到原先总计的html
							if(thisobj.parents('td').siblings('.carid').children('.carclass').is(':checked')){
								var totalcount = parseInt($('.totalcount').html());
								var changetotlecount = totalcount - parseInt(goodprice);
								$('.totalcount').html(changetotlecount);
							}else{
								return false;
							}
						}else{
							alert(data.msg);
						}
					},
					error:function(){
						alert('通信错误');
					}
				})
			}
		});


		//点击减号
		$(document).on('click', '.vm-plus', function(event) {
			//最大库存量
			var stock = $(this).siblings('input').attr('datamax');
			// 文本框的值
			var value = parseInt($(this).siblings('input').val());
			
			//如果说值等于等于库存了 就不能再加了
			if( value >= parseInt(stock)){
				return false;
			}else{

				//获得carid 为了走异步
				var carid = $(this).parents('td').siblings('.carid').children('.carclass').val();
				//获得当前的对象
				var thisobj = $(this);
				$.ajax({
					url: '<?php echo U("home/car/pluscar");?>',
					type: 'POST',
					dataType: 'json',
					data: {carid: carid},
					success:function(data){
						if(data.error == 0){
							thisobj.siblings('input').val( value + 1); //文本框加1
							// 得到对应商品的单价
							var goodprice = thisobj.parents('td').siblings('.price').children('.goodprice').html();
							//得到原先对应的小计的值先
							var smallcount =  parseInt(thisobj.parents('td').siblings('.smallcount').children('.countprice').html());
							//对应行的小计要改一下
							var changesmallcount = smallcount + parseInt(goodprice);

							thisobj.parents('td').siblings('.smallcount').children('.countprice').html(changesmallcount);

							//总计的地方也要减
							//先得到原先总计的html
							if(thisobj.parents('td').siblings('.carid').children('.carclass').is(':checked')){
								var totalcount = parseInt($('.totalcount').html());
								var changetotlecount = totalcount + parseInt(goodprice);
								$('.totalcount').html(changetotlecount);
							}else{
								return false;
							}
						}else{
							alert('更新失败');
						}
					},
					error:function(){
						alert('通信错误');
					}
				})
			}
		});
	
		//取消点击事件发生
		


	 	// var stock = $('#J_quantity').val();
      $(document).on('blur', '.J_quantity', function(event) {
        // $(this).val(1);
        //如果不是正确的输入格式就给还原默认值。

        if($(this).val() <= 0 || !/^[1-9]*$/.test($(this).val())){
            $(this).val(1);
        }
        //最大库存量
		var stock = $(this).attr('datamax');
        if($(this).val() > parseInt(stock)){
          	$(this).val(stock);
        }
        //得到当品文本框的商品数量
        var goodnum =  $(this).val();
        //获得carid 为了走异步
		
        // 得到对应商品的单价
		var goodprice = $(this).parents('td').siblings('.price').children('.goodprice').html();
		//对应行的小计要改一下
		var changesmallcount = goodnum * parseInt(goodprice);

		var carid = $(this).parents('td').siblings('.carid').children('.carclass').val();
		var thisobj = $(this);
		//走异步了。

		$.ajax({
			url: '<?php echo U("home/car/changenum");?>',
			type: 'POST',
			dataType: 'json',
			data: {carid: carid, num: goodnum},
			success:function(data){
				if(data.error == 0){
					thisobj.parents('td').siblings('.smallcount').children('.countprice').html(changesmallcount);
					//总计的地方也要改变
					//可以得到所有的html 然后相加;
					if(thisobj.parents('td').siblings('.carid').children('.carclass').is(':checked')){
						var countPriceArr = $('.countprice');
						var changetotlecount = 0;
						$.each(countPriceArr, function(index, val) {
							changetotlecount = changetotlecount + parseInt($(this).html());
						});
						$('.totalcount').html(changetotlecount);
					}else{
						return false;
					}

				}else{
					alert('修改错误');
				}
			},
			error:function(){
				alert('通信错误');
			}
		})

		
		
      }); 

      	// 判断checkbox
	   $(document).on('click', '.carclass', function(event) {
	        if($(this).is(':checked')){
	         	//否则就是选中了
	         	//如果有当前的价格然后总计那里加一下
	         	var smallcount = parseInt($(this).parents('tr').find('.countprice').html());
	         	//总计的地方也要减
				//先得到原先总计的html
				var totalcount = parseInt($('.totalcount').html());
				var changetotlecount = totalcount + smallcount;
				$('.totalcount').html(changetotlecount);
	        }else{
	         	//如果就是没有选中
	         	//如果有当前的价格然后总计那里减一下
	         	var smallcount = parseInt($(this).parents('tr').find('.countprice').html());
	         	//总计的地方也要减
				//先得到原先总计的html
				var totalcount = parseInt($('.totalcount').html());
				var changetotlecount = totalcount - smallcount;
				$('.totalcount').html(changetotlecount);
	        }
	    });

	   //点击删除触发事件
	   $(document).on('click', '.delcarid', function(event) {
	   		if(!confirm('确定要删除吗?')) return false;
		   	var carid = $(this).attr('carid');
		   	var thisobj = $(this);
		   	//获得当前行的小计
		   	var smallcount = parseInt($(this).parents('td').siblings('.smallcount').children('.countprice').html());
		   	//获得原先的总计
		   	var totalcount = parseInt($('.totalcount').html());
		   	$.ajax({
		   		url: '<?php echo U("home/car/delcar");?>',
		   		type: 'POST',
		   		dataType: 'json',
		   		data: {carid: carid},
		   		success:function(data){
		   			if(data.error == 0){
		   				//如果删除成功了。移除当前行 并且总计的地方就要减去当前行的小计 
		   				thisobj.parents('tr').remove();
		   				$('.totalcount').html( totalcount - smallcount);
		   				var allprice = parseInt($('.totalcount').html());
		   				if(allprice == 0){
		   					$('.mz_content').remove();
		   					$('#nogoods').css('display', 'block');
		   				}
		   			}
		   		},
		   		error:function(){

		   		},
		   	});
	   });

	   //当点击提交表单
	   $(document).on('click', '#submitFrom', function(event) {
	   	    //获得总计的价格 如果是为0 就不给提交表单
	   	    var totalcount =  parseInt($('.totalcount').html());
	   	    if(totalcount <= 0){
	   	    	alert('请选择商品或者先添加商品先咯');
	   	    }else{
	   	    	//提交表单
	   	    	$('#realFrom').submit();
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