<?php
namespace Home\Controller;
use Think\Controller;
class ShopdetailController extends NologinCommonController {
	public function index(){
		layout('indexlayout');
		if(IS_GET){

			$good_id = $_GET['good_id'];

			$sql = "select * from shop_goods_attr where good_id = {$good_id}";
			
			$res = M()->query($sql);
			$tempArr = array();
			
			foreach ($res as $key => $value) {
				$tempArr[$value['shop_type_attr_id']][] = $value;
			}
			
			$sql = "select * from shop_type_attr where isbeselected = 1";
			$res = M()->query($sql);
			
			$skuresArr = array();
			// ksort($tempArr);    
			foreach ($tempArr as $key => $value) {
				foreach ($res as $k => $v) {
					if($v['attr_id'] == $key){
						$skuresArr[$v['attr_name']] = $value;
					}
				}
			}
			//查询默认的sku
			$goodlistOneSql = "select * from shop_goods_list where good_id = {$good_id} and good_stock > 0 limit 1";
			$gooditemsl = M()->query($goodlistOneSql);
			$defaultSku = $gooditemsl[0]['attr_combine'];         
			$gooditemsl[0]['good_imgs'] = explode(',', $gooditemsl[0]['good_imgs']);  //拆图片
			$gooditemsl[0]['attr_combine'] = explode(',', $gooditemsl[0]['attr_combine']);
			$like = '';
			$tempSku = explode(',', $defaultSku);
			
			foreach ($tempSku as $key => $value) {

				
				if(count($tempSku) == 1){
					
					$thesql = "select attr_combine from shop_goods_list where good_id = '{$good_id}'";
					$theRes = M()->query($thesql);
					foreach ($theRes as $k => $v) {
						if($k == count($theRes) -1 ){
							$like .= "attr_combine = '".$v['attr_combine']."'";
						}else{
							$like .= "attr_combine = '".$v['attr_combine']."' or ";
						}
					}
				}else{
					$tempSku[$key] = '%';
					if($key == count($tempSku) - 1){
						$like.= "attr_combine like '".implode(',', $tempSku)."'";
					}else{
						$like.= "attr_combine like '".implode(',', $tempSku)."' or ";
					}
					$tempSku = explode(',', $defaultSku);
				}
			}
			//	
			$allowSkuSql  = "select * from shop_goods_list where (good_id = {$good_id} and good_stock != 0) and ({$like})";
			// echo $allowSkuSql;
			$allowSkuRes = M()->query($allowSkuSql);
			foreach ($allowSkuRes as  $value) {
				//拆除里面的 attr_combine  用来前端做判断是否放出 放其点击
				$combineArr = explode(',', $value['attr_combine']);
				foreach ($combineArr as $v) {
					$have[] = $v;
				}
			}

			$goodSql = "select * from shop_goods where good_id = {$good_id}";	
			$goodRes = M()->query($goodSql);
			//把商品数据的详情参数切成数组
			$goodRes[0]['canshu'] = explode(',', $goodRes[0]['canshu']);
			//获取到shop_type_attr表的详情的的名称 并且切成数组
			$normNameSql = "select attr_value from shop_type_attr where attr_name = '规格参数' and type_id = '{$goodRes[0]['type_id']}'";
			$normNameRes = M()->query($normNameSql)[0]['attr_value'];
			$normNameRes = explode(',', $normNameRes);

			//have代表 可以放出的就不加disbaled属性
			$this->assign('have',$have);
			$this->assign('normNameRes',$normNameRes);
			$this->assign('gooditemsl',$gooditemsl);
			$this->assign('goodRes',$goodRes);
			$this->assign('skuresArr',$skuresArr);
			$this->display();
		}
		
	}

	public function index2(){
		layout(false);
		$this->display();
	}

	public function checksku(){
		if(IS_POST && IS_AJAX){
			layout(false);
			//查询商品对应的属性的值查询出来。
			$good_id = $_POST['good_id'];
			$sql = "select * from shop_goods_attr where good_id = {$good_id}";
			$res = M()->query($sql);
			$tempArr = array();
			//对shop_goods_attr 进行分类
			foreach ($res as $key => $value) {
				$tempArr[$value['shop_type_attr_id']][] = $value;
			}
			// ksort($tempArr);    //解决排序的问题
			//查询出shop_goods_attr 中shop_type_attr_id 对应shop_type_attr的分类名称
			$sql = "select * from shop_type_attr where isbeselected = 1";
			$res = M()->query($sql);
			//定义一个新数组 用来把键为数字的变成文字的。是最后要用的
			$skuresArr = array();
			foreach ($tempArr as $key => $value) {
				foreach ($res as $k => $v) {
					if($v['attr_id'] == $key){
						$skuresArr[$v['attr_name']] = $value;
					}
				}
			}
			//最后的sql
			$like = '';
			$attr_combine = rtrim($_POST['sku'],',');

			$tempSku = explode(',', $attr_combine);
			// sort($tempSku);        //数组重新排序  去匹配查sku
			foreach ($tempSku as $key => $value) {
				//如果拆出来的sku只有项 那么就不用like了 直接等于就好了。
				if(count($tempSku) == 1){
					$thesql = "select attr_combine from shop_goods_list where good_id = '{$good_id}'";
					$theRes = M()->query($thesql);
					foreach ($theRes as $k => $v) {
						if($k == count($theRes) - 1 ){
							$like .= "attr_combine = '".$v['attr_combine']."'";
						}else{
							$like .= "attr_combine = '".$v['attr_combine']."' or ";
						}
					}
				}else{
					$tempSku[$key] = '%';
					if($key == count($tempSku) - 1){
						$like.= "attr_combine like '".implode(',', $tempSku)."'";
					}else{
						$like.= "attr_combine like '".implode(',', $tempSku)."' or ";
					}
					$tempSku = explode(',', $attr_combine);
					// sort($tempSku);						//数组重新排序  去匹配查sku
				}
			}
			
			// 用来前端做判断是否放出 让其可点击
			$allowSkuSql  = "select * from shop_goods_list where (good_id = {$good_id} and good_stock != 0) and ({$like})";
			$allowSkuRes = M()->query($allowSkuSql);

			foreach ($allowSkuRes as  $value) {
				//拆除里面的 attr_combine  用来前端做判断是否放出 让其可点击
				$combineArr = explode(',', $value['attr_combine']);
				foreach ($combineArr as $v) {
					$have[] = $v;
				}
			}

			$str = '';
			foreach ($skuresArr as $key => $value) {
				$str.='<dl class="property-sale 123"> 
              			 <dt class="vm-metatit">
               				 '.$key.'
             			 </dt> 
         			 	<dd>
         			 	<ul data-property="'.$key.'" class="clearfix">';
         			 	foreach ($value as $k => $v) {
         			 		$str.='<li data-value="14:18238" attrid="'.$v['good_attr_id'].'"  title="'.$v['good_attr_value'].'" class="publicuse';
         			 		if(in_array($v['good_attr_id'], $tempSku)){
         			 			$str.=" selected";
         			 		}elseif(!in_array($v['good_attr_id'], $have)){
         			 			$str.=" disabled";
         			 		}
         			 		$str.='">';
         			 		$str.='<a data-mtype="store_de_sp_1_1" href="javascript:void(0)"> <span>'.$v['good_attr_value'].'</span> 
                            		</a>
                            	</li>' ;
         			 	}
         			 	$str.='</ul> 
              				 </dd> 
              				</dl>';
			}

			$priceStocksql = "select * from shop_goods_list where good_id = {$good_id} and attr_combine = '{$attr_combine}'";
			$priceStockRes = M()->query($priceStocksql);
			$price = $priceStockRes[0]['good_price'];
			$stock = $priceStockRes[0]['good_stock'];
			
			$returnMsg = array(
				'error'	  => 0,
				'strMsg'  => $str,
				'good_price' => $price,
				'stock'	=> $stock,
				'sql'	=> $allowSkuSql,
			);
			$this->ajaxReturn($returnMsg);

		}else{
			$this->error('非法访问');
		}
	}

	public function index3(){
		//测试
		layout(false);
		//查询商品对应的属性的值查询出来。
		$sql = "select * from shop_goods_attr where good_id = 10";
		$res = M()->query($sql);
		$tempArr = array();
		//对shop_goods_attr 进行分类
		foreach ($res as $key => $value) {
			$tempArr[$value['shop_type_attr_id']][] = $value;
		}
		//查询出shop_goods_attr 中shop_type_attr_id 对应shop_type_attr的分类名称
		$sql = "select * from shop_type_attr where isbeselected = 1";
		$res = M()->query($sql);
		//定义一个新数组 用来把键为数字的变成文字的。是最后要用的
		$skuresArr = array();
		foreach ($tempArr as $key => $value) {
			foreach ($res as $k => $v) {
				if($v['attr_id'] == $key){
					$skuresArr[$v['attr_name']] = $value;
				}
			}
		}
		//查询默认的sku
		$goodlistOneSql = "select * from shop_goods_list where good_id = 10 and good_stock > 0 limit 1";
		$gooditemsl = M()->query($goodlistOneSql);
		$gooditemsl[0]['good_imgs'] = explode(',', $gooditemsl[0]['good_imgs']);  //拆图片
		$gooditemsl[0]['attr_combine'] = explode(',', $gooditemsl[0]['attr_combine']);//拆结合
		// var_dump($gooditemsl);

		$goodSql = "select * from shop_goods where good_id = 10";	
		$goodRes = M()->query($goodSql);
		//把商品数据的详情参数切成数组
		$goodRes[0]['canshu'] = explode(',', $goodRes[0]['canshu']);
		//获取到shop_type_attr表的详情的的名称 并且切成数组
		$normNameSql = "select attr_value from shop_type_attr where attr_name = '规格参数' and type_id = '{$goodRes[0]['type_id']}'";
		$normNameRes = M()->query($normNameSql)[0]['attr_value'];
		$normNameRes = explode(',', $normNameRes);

		$this->assign('normNameRes',$normNameRes);
		$this->assign('gooditemsl',$gooditemsl);
		$this->assign('goodRes',$goodRes);
		$this->assign('skuresArr',$skuresArr);
		$this->display();
	}

	//检查sku是否有库存
	public function checkstock(){
		if(IS_AJAX && IS_POST){
			$good_num = $_POST['good_num'];
			$good_id = $_POST['good_id'];		//
			$attr_combine = rtrim($_POST['combine'],",");   //把post过来的值去掉右边的符号。
			$sql = "select * from shop_goods_list where good_id = '{$good_id}' and attr_combine = '{$attr_combine}' and good_stock >= {$good_num}";
			$res = M()->query($sql);
			//如果有库存
			if($res){
				cookie('good_id',$good_id);
				cookie('good_listid',$res[0]['good_listid']);
				cookie('good_num',$_POST['good_num']);
				if($_COOKIE['good_id'] && $_COOKIE['good_listid'] && $_COOKIE['good_num']){
					$returnMsg = array(
						'error'	=> 0,
						
					);
				}
			}else{
				$returnMsg = array(
					'error'	=> 1,
					'msg' => '不够库存了,不好意思',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	public function sku(){
		layout(false);
		$good_id = 24;
		// combine=>3,5,8	good_stock=>0  good_id => 24
		//查询商品对应的属性的值查询出来。
		$sql = "select * from shop_goods_attr where good_id = {$good_id}";
		$res = M()->query($sql);
		$tempArr = array();
		//对shop_goods_attr 进行分类
		foreach ($res as $key => $value) {
			$tempArr[$value['shop_type_attr_id']][] = $value;
		}
		//查询出shop_goods_attr 中shop_type_attr_id 对应shop_type_attr的分类名称
		$sql = "select * from shop_type_attr where isbeselected = 1";
		$res = M()->query($sql);
		//定义一个新数组 用来把键为数字的变成文字的。是最后要用的
		$skuresArr = array();
		// ksort($tempArr);    	//解决排序的问题
		foreach ($tempArr as $key => $value) {
			foreach ($res as $k => $v) {
				if($v['attr_id'] == $key){
					$skuresArr[$v['attr_name']] = $value;
				}
			}
		}
		$AttrSql = "select t1.good_attr_id,t2.attr_name,t1.good_attr_value from shop_goods_attr t1 left join shop_type_attr t2 on t1.shop_type_attr_id = t2.attr_id where t1.good_id = {$good_id}";
		$AttrRes = M()->query($AttrSql);
		$EndAttrRes = array();

		foreach ($AttrRes as $key => $value) {
			$EndAttrRes[$value['attr_name']][$value['good_attr_id']] = $value['good_attr_value'];
		}
		var_dump($EndAttrRes);
		$EndAttrResList = json_encode($EndAttrRes);
		
		$skuSql = "select  attr_combine,good_stock,good_price from shop_goods_list where good_id = {$good_id} and good_stock > 0" ;
		$SkuRes = M()->query($skuSql);
		$SkuResJson = json_encode($SkuRes);

		//默认的sku
		// $defaultSku = "select  attr_combine,good_stock from shop_goods_list where good_id = {$good_id} and good_stock > 0 limit 1" ;
		// $defaultRes = M()->query($defaultSku);
		// $defaultRes = explode(',', $$defaultRes[0]['attr_combine']);

		$this->assign('EndAttrResList',$EndAttrResList);
		$this->assign('SkuResJson',$SkuResJson);
		// var_dump(json_encode($EndAttrRes));
		$this->display();
	}

	public function IndexAction(){
    	// 走前台组html
    	$id = I('get.good_id','');

    	$sql = "select attr_combine,good_stock from product_goods_list where good_id = {$id} ";
		$lists = M()->query($sql);
		$lists = json_encode($lists);

		$this->assign('lists',$lists);


		$sql = "select t1.good_attr_id,t2.attr_name,t1.good_attr_value from product_goods_attr t1 left join product_type_attr t2  on t1.shop_type_attr_id = t2.attr_id where t1.good_id = {$id}";

		$attrs = M()->query($sql);

		$attrstemp = array();

		foreach ($attrs as  $row) {
			$attrstemp[$row['attr_name']][$row['good_attr_id']]=$row['good_attr_value'];
		}

		$attrstemp = json_encode($attrstemp);

		$this->assign('attrs',$attrstemp);

    	
  		// $sql = "select * from product_goods_list where good_id ='{$id}' and good_stock >0 limit 1";
  		// $listres = M()->query($sql);
  		
		$sql = "select * from product_goods where good_id='{$id}'";

		$res = M()->query($sql);

		$this->assign('listres',$listres);
    	$this->assign('res',$res);
		$this->display();

	}
	
	public function testsku(){
		layout('indexlayout');
		//  
		var_dump($arr);
		$good_id = 24;
		// combine=>3,5,8	good_stock=>0  good_id => 24
		$AttrSql = "select t1.good_attr_id,t2.attr_name,t1.good_attr_value from shop_goods_attr t1 left join shop_type_attr t2 on t1.shop_type_attr_id = t2.attr_id where t1.good_id = {$good_id}";
		$AttrRes = M()->query($AttrSql);

		$EndAttrRes = array();

		//首先先获得商品的key
		foreach ($AttrRes as $key => $value) {
			$EndAttrRes[$value['attr_name']][$value['good_attr_id']] = $value['good_attr_value'];
		}
		//转成json格式返回给前端
		$EndAttrResList = json_encode($EndAttrRes);
		
		//查处库存大于0的 也就是有库存的sku;
		$skuSql = "select  attr_combine,good_stock,good_price,good_imgs from shop_goods_list where good_id = {$good_id} and good_stock > 0" ;
		$SkuRes = M()->query($skuSql);
		$SkuResJson = json_encode($SkuRes);
		$have = array();

		foreach ($SkuRes as $key => $value) {
			$value['attr_combine'] = explode(',', $value['attr_combine']);
			foreach ($value['attr_combine'] as $k => $v) {
				$have[] = $v;
			}
		}
		$have = array_unique($have);	//数组去重

		//默认的sku
		$defaultSku = "select  attr_combine,good_stock from shop_goods_list where good_id = {$good_id} and good_stock > 0 limit 1" ;
		$defaultRes = M()->query($defaultSku);
		$defaultSku = json_encode(explode(',', $defaultRes[0]['attr_combine']));
		
		$this->assign('EndAttrResList',$EndAttrResList);
		$this->assign('SkuResJson',$SkuResJson);
		$this->assign('defaultSku',$defaultSku);
		
		$this->display();
	}


	

	
	
}