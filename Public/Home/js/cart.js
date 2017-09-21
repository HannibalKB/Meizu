// JavaScript Document
var cNumber=function(value){					// 转成数字型  整型与浮点型  
	if( (!value))	return 0;
	var number	=  Number(value);
	if(isNaN(number)) return 0;
	return number;	
}

var priceChange=function(){
	var pro	= $('.cart_body');
	var pro_leng	= pro.length;
	var total		= 0;	// 总价
	var sum=0;
	var total_package_discount = 0;
	var package_discount_price = 0;
	var buy_price = 0;
	var buy_number = 0;
	var package_discount = 0;
	var dark_discount = 0;
	for(i=0;i<pro_leng;i++){
		 buy_price	= cNumber( $(pro[i]).find('.cart_price i').html() );
		 buy_number	= parseInt($(pro[i]).find('.cart_number_input').val() );
		 package_discount_price = cNumber($(pro[i]).find('.cart_price input:hidden').val());
		 d_discount		= cNumber($(pro[i]).find('.dark_discount_span').html());
		
		 package_discount = package_discount_price * buy_number;
		 total_package_discount += package_discount;
		 sum = buy_price*buy_number;
		 var sum_str = sum.toFixed(2);
		 $(pro[i]).find('.cart_total i').html(sum_str);
		 total		= total + sum;
		 
		 dark_discount	+= (d_discount * buy_number);
		 
	}
	
	// 计算总价
	total = isNaN(total) ? 0 : total;

	
	$('.cart_price_total_number').html("&yen;&nbsp;"+total.toFixed(2));		// 应付总价
	dark_discount = isNaN(dark_discount) ? 0 : dark_discount;
	$('#dark_discount').html("-&nbsp;&yen;&nbsp;"+dark_discount);
	
	
	if(total>0){
		total	= total - dark_discount;
		if(total<0){
			total = 0;
		}
	}
	total -= total_package_discount;
	total = isNaN(total) ? 0 : total;
	$("#total_pay").html("&yen;&nbsp;"+total.toFixed(2));	// 实付总价

	total_package_discount = isNaN(total_package_discount) ? 0 : total_package_discount;
	$("#package_discount i").html(total_package_discount.toFixed(2));
};

var update_cart_num=function(ele, cart_id, num, package_key){
	var self	= this;
	var arr	= new Object();
	var rand=1000000*Math.random();
	var current = ele.val();
	current = parseInt(current);
	arr['product']	= new Object();
	arr['product'][cart_id]	= num - current;
	if(package_key != '') {
		arr['package_key'] = package_key;
	}
	var package_id = ele.attr('data-packageid');
	package_id = package_id == undefined ? '' : package_id;
	if(package_key != '') {
		arr['package_id'] = package_id;
	}
        var insurance_id = ele.attr("data-insuranceid");
        insurance_id = insurance_id == undefined ? '' : insurance_id;
        arr['insurance_id'] = insurance_id;
	$.get('/cart/change_buy_number?v='+rand, arr , function(data){
		if( parseInt(data['status'])==1 ){
			ele.val( num );
                        var insurance = cart_id+'_insurance';
			cart_id += '_package_' + package_key;
			if($(".cart_number_input[cart_id='"+cart_id+"']").length > 0) {
				$(".cart_number_input[cart_id='"+cart_id+"']").val(num);
			}
                        if($(".cart_number_input[cart_id='"+insurance+"']").length > 0){
                                $(".cart_number_input[cart_id='"+insurance+"']").val(num);
                        }
			$("#cart_error").html('');
		}else{
			$("#cart_error").html(data['error']);
			ele.val(parseInt(num)-1);
			$("#cart_error").html(data['error']);
		}
		priceChange();
	},"json");
}

var cart_total_price=function(){
	var pro	= $('.cart_body');
	var pro_leng	= pro.length;
	var total		= 0;
	var total_package_discount = 0;
	var package_discount = 0;
	
	var dark_discount	= 0;
	for(i=0;i<pro_leng;i++){
		 buy_price	= cNumber( $(pro[i]).find('.cart_price i').html() );
		 buy_number	= parseInt($(pro[i]).find('.cart_number_input').val() );
		 package_discount_price = cNumber($(pro[i]).find('.cart_price input:hidden').val());
		 d_discount	= cNumber($(pro[i]).find('.dark_discount_span').html());
		 
		 package_discount = package_discount_price * buy_number;
		 total_package_discount += package_discount;
		 total		= total + buy_price*buy_number;
		 dark_discount  += (d_discount*buy_number);
	}

	total = isNaN(total) ? 0 : total;
	$('.cart_price_total_number').html("&yen;&nbsp;"+total.toFixed(2));		// 用付总价
	dark_discount = isNaN(dark_discount) ? 0 : dark_discount;
	$('#dark_discount').html("-&nbsp;&yen;&nbsp;"+dark_discount);
	
	if(total>0){
		total	= total - dark_discount;
		if(total<0){
			total = 0;
		}
	}
	total -= total_package_discount;
	total = isNaN(total) ? 0 : total;
	$("#total_pay").html("&yen;&nbsp;"+total.toFixed(2));	// 实付总价

	total_package_discount = isNaN(total_package_discount) ? 0 : total_package_discount;
	$("#package_discount i").html(total_package_discount.toFixed(2));
};


/*购物车 更改商品数量*/
var cartInit=function(){
	cart_total_price();
	$(".cart_number_addition").click(function(){
		var IsDiscount=0;
		var count 	= $(this).prev("input");
		var current_num = count.val();
		current_num = parseInt(current_num);
		current_num = isNaN(current_num) ? 1 : current_num; 
		var thisDiscount= count.attr('IsDiscount');
		var cart_id	= count.attr('cart_id');
		var ext_id = count.attr('ext_id');
		$('.buy_number').each(function(){
			if( $(this).attr('IsDiscount')==1){
				IsDiscount+=parseInt($(this).val());	
			}	  
		});
		
		if(thisDiscount==1 && IsDiscount>1){
			$(this).addClass('disable');
			return;
		}
		var sum_num = 0;
		// 判断所有的数目是否超出总限制数
		$(".cart_number_input[ext_id='"+ ext_id +"']").each(function(){
			var num = $(this).val();
			num = parseInt(num);
			num = isNaN(num) ? 1 : num;
			sum_num += num;
		});
		var org_oldNum	= sum_num;
		
		var maxbuy = parseInt(count.attr('maxbuy'));
		if(sum_num + 1 >= maxbuy) {
			$(this).parent().find('.cart_number_addition').addClass('disable');
		}
		// return false;
		if(sum_num >= maxbuy && maxbuy != 0){
			$(".cart_number_input[cart_id='"+ cart_id +"']").addClass('disable');
			return false;
		} 

		$(this).parent().find('.cart_number_subtraction').removeClass('disable');
		var change_num = current_num + 1;
		if(change_num < 1){
			change_num = 1;	
		}
		
		if(change_num == 1){
			$(this).parent().find('.cart_number_subtraction').addClass('disable');	
		}
		
		var package_key = count.attr('data-key');
		package_key = package_key != undefined && package_key != '' ? package_key : '';
		update_cart_num(count, cart_id, change_num, package_key);
	});
	
	$(".cart_number_subtraction").click(function(){
		var count = $(this).next("input");
		var oldNum = parseInt(count.val());
		var org_oldNum 	= oldNum;

		if(oldNum <= 1){
			oldNum	= 1;
			return;
		}else{
			oldNum	= oldNum-1;
		}
		$(this).parent().find('.cart_number_addition').removeClass('disable');
		if(oldNum<=1){
			$(this).addClass('disable');
		}
		
		var maxbuy = parseInt(count.attr('maxbuy'));
		if(oldNum>=maxbuy && maxbuy!=0){
			$(this).parent().find('.cart_number_addition').addClass('disable');
		}
		
		if(org_oldNum!=oldNum){
			cart_id	= count.attr('cart_id');
			var package_key = count.attr('data-key');
			package_key = package_key != undefined && package_key != '' ? package_key : '';
			update_cart_num(count, cart_id , oldNum, package_key);	// 更新购物车
		}
		
	});
	
	var deleteGoodsClickLock	= 0;
	$(".cart_total .opration").click(function(){
		var self = $(this);
		if(deleteGoodsClickLock==1){
			return ;
		}
		deleteGoodsClickLock	= 1;
		var del	= $(this).attr('cart_id');
		var rand=1000000*Math.random();
		var package_key = $(this).attr('data-key');
		package_key = package_key == undefined ? '' : package_key;

		var package_id = $(this).attr('data-packageid');
		package_id = package_id == undefined ? '' : package_id;
                
                var insurance_id = $(this).attr("data-insuranceid");
                insurance_id = insurance_id == undefined ? '' : insurance_id;
        
		var num = $(this).parent().siblings('.cart_number').find(".cart_number_input").val();
		num = parseInt(num);
		num = isNaN(num) ? 1 : num;

		$.get('/cart/del?v='+rand, {del:del,num:num,package_key:package_key,package_id:package_id,insurance_id:insurance_id} , function(data){
			if( parseInt(data['status'])==1 ){	// 成功
				self.parent().parent("tr").remove();
				if(package_key != '') {
					var package_ele = $('tr.cart_body[cart_id="'+ del +'_package_'+ package_key +'"]');
					if(package_ele.length > 0) {
						package_ele.remove();
					}
				}
                                var insurance = del+'_insurance';
                                if($("tr.cart_body[cart_id='"+insurance+"']").length > 0) {
                                        $("tr.cart_body[cart_id='"+insurance+"']").remove();
                                }
				var buy_product_obj	= $('.cart_body');
				if(buy_product_obj.length < 1){
					html = '<tr class="cart_body"><td colspan="4" align="center" style="padding: 110px 0;"><div class="empty_data">';
					html += '<span class="cart_icon"></span><h1 class="tips">';
					html += '您的购物车中还没有商品，快<a href="http://store.meizu.com/" style="color: #515151;">选购</a>吧！</h1></div></td></tr>';
					$(".cart_head").after(html);
				}
			}
			deleteGoodsClickLock	= 0;
			priceChange();
		},"json");
	});
	
	
	$(".cart_go_to_checkout").click(function(){
		var self	= this;
		var pro		= $('.cart_body');
		var pro_leng= pro.length;
		if(pro_leng>0){
			window.location.href=$('.cart_go_to_checkout').attr('href_data');
		}
	});
};
