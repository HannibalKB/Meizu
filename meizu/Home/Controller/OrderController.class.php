<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends NeedloginCommonController {
	//确认订单
	public function confirm(){
		layout('shoplayout');
		if(empty($_SESSION['uid'])){
			$this->error('请先登录',U("home/login/index"));
			exit;
		}

		if(IS_POST){
			
			cookie("good_id",null);
			cookie("good_listid", null);
			cookie("good_num", null);
			$carid = $_POST['carid'];
			$good_listid = $_POST['good_listid'];
			//得到选中购物车的商品信息和 sku信息
			foreach ($carid as $key => $value) {
				$sql = "select * from user_cars t1 left join shop_goods t2 on t1.goodid = t2.good_id left join shop_goods_list t3 on t1.gdlistid = t3.good_listid where t1.carid = '{$value}' ";
				$res[]  = current(M()->query($sql));
			}

			//把sku表的数字组合转成文字
			foreach ($res as $key => $value) {
				$value['attr_combine'] = explode(',', $value['attr_combine']);
				foreach ($value['attr_combine'] as $k => $v) {
					$sql = "select good_attr_value from  shop_goods_attr where good_attr_id = '{$v}'";
					$value['attr_combine'][$k] =  M()->query($sql)[0]['good_attr_value'];
				}
				$res[$key]['attr_combine'] = implode(',', $value['attr_combine']);
			}
			//把对应的商品详细信息分配到模板
			$this->assign('res',$res);
			//获取地址信息
			$addrSql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
			$addrRes = M()->query($addrSql);
			$this->assign('addrRes',$addrRes);

			$this->display();
		//否则有cookie的。	
		}elseif($_COOKIE['good_id'] && $_COOKIE['good_listid'] && $_COOKIE['good_num']){
			$good_id = $_COOKIE['good_id'];
			$good_listid = $_COOKIE['good_listid'];
			$good_num = $_COOKIE['good_num'];
			if($good_id && $good_listid && $good_num){
				//获取货品信息
				$sql = "select * from shop_goods t1 left join shop_goods_list t2 on t1.good_id = t2.good_id where t1.good_id = '{$good_id}' and t2.good_listid = '{$good_listid}'";
				$res = M()->query($sql);
				
				$res[0]['attr_combine'] = explode(',', $res[0]['attr_combine']);
				foreach ($res[0]['attr_combine'] as $key => &$value) {
					$sql = "select  good_attr_value  from  shop_goods_attr where good_attr_id = '{$value}'";
					$value = M()->query($sql)[0]['good_attr_value'];
				}
				$res[0]['attr_combine'] = implode(',', $res[0]['attr_combine']);
				$res[0]['attr_combine'] = str_replace(",", " ", $res[0]['attr_combine']);
				$res[0]['good_num'] = $good_num;
				$res[0]['gdlistid'] = $res[0]['good_listid'];
				//获取货品信息结束
				// var_dump($res);

				$addrSql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
				$addrRes = M()->query($addrSql);
				$this->assign('addrRes',$addrRes);
				$this->assign('res',$res);
				$this->display();
			}
		
		}else{
			$this->error('订单产品不详',U('home/index/index'));
		}
	}

	//异步设为默认地址
	public function isdefault(){
		if(IS_POST && IS_AJAX){
			$sql = "update receive_addr set isdefault = 0 where uid = {$_SESSION['uid']}";
			M()->execute($sql);
			$sql = "update receive_addr set isdefault = 1 where id = '{$_POST['addrid']}' and  uid = {$_SESSION['uid']}";
			if(M()->execute($sql)){
				$returnMsg = array(
					'error'	=> 0,
				);	
			}else{
				$returnMsg = array(
					'error'	=> 1,
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//保存并且使用地址
	public function saveadd(){
		if(IS_POST && IS_AJAX){
			$data = array();	//定义数组
			$data['uid']  = $_SESSION['uid'];
			$updatesql = "update receive_addr set isdefault = 0 where uid = '{$_SESSION['uid']}'";
			M()->execute($updatesql);
			$sql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
			$count = count(M()->query($sql));		//得到条数
			if( $count >= 10 ){
				$returnMsg = array(
					'error' => 2,
					'msg'	=> '不能超过十条地址',
				);
				$this->ajaxReturn($returnMsg);
				exit;
			}
			//遍历post过来的数组 然后组成可以添加到数据库的格式
			foreach ($_POST['alldata'] as $key => $value) {
				$data[$key] = $value;
			}
			if($data['county'] == '请选择'){
				$data['county'] = ''; 	//如果某些选项的是区 就把默认的区改成 空字符串 ''
			}
			$data['isdefault'] = 1;
			if($insertid = M('receive_addr')->add($data)){
				$returnMsg = array(
					'error'	=> 0,
					'insertid' => $insertid,
				);
			}else{
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '错误啦。',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//异步地址删除
	public function addressDelete(){
		if(IS_AJAX && IS_POST){
			$addressid = $_POST['addrid'];
			$sql = "delete from receive_addr where id = '{$addressid}'";
			if(M()->execute($sql)){
				$returnMsg = array(
					'error' => 0,
					'msg'	=> '删除成功',
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '删除失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//异步地址修改编辑 读取原来的数据
	public function addredit(){
		if(IS_AJAX && IS_POST){
			$addressid = $_POST['addrid'];
			$sql = "select * from receive_addr where id = '{$addressid}'";
			$res = M()->query($sql);
			$this->ajaxReturn($res);
		}else{
			$this->error('非法访问!');
		}
	}

	//异步地址编辑保存
	public function editsave(){
		$data = array();	//定义数组
		$data['uid']  = $_SESSION['uid'];
		//遍历post过来的数组 然后组成可以添加到数据库的格式
		foreach ($_POST['alldata'] as $key => $value) {
			$data[$key] = $value;
		}
		if($data['county'] == '请选择'){
			$data['county'] = ''; 	//如果某些选项的是区 就把默认的区改成 空字符串 ''
		}
		$data['isdefault'] = 1;
		if(M('receive_addr')->save($data) !== false){
			$returnMsg = array(
				'error' =>  0,
				'data'	=> $data,
			);
		}else{
			$returnMsg = array(
				'error' =>  1,
				'msg'	=> '保存失败',
			);
		}
		$this->ajaxReturn($returnMsg);
	}


	//所有通过之后就是订单提交保存了
	//插入到订单表 order_sku表 还要把提交的订单对应的carid 的东西删除
	public function ordercommit(){
		if(IS_POST){
			//首先先生成订单编号
			$code = date("Y-m-d").time().$_SESSION['uid'];

			//或得到用户的默认的id
			$addridsql = "select * from  receive_addr where uid = '{$_SESSION['uid']}' and isdefault = 1";
			$addressRes = M()->query($addridsql);
			$addrid = $addressRes[0]['id'];
			$address_text = $addressRes[0]['province'].$addressRes[0]['city'].$addressRes[0]['county'].$addressRes[0]['detail_addr'];
			$orderData['order_code'] = str_replace('-', "", $code);
			$orderData['uid'] = $_SESSION['uid'];
			$orderData['order_price'] = $_POST['order_price'];
			$orderData['addr_id'] = $addrid;
			$orderData['address_text'] = $address_text;
			$orderData['username'] = $addressRes[0]['realname'];
			$orderData['phone'] = $addressRes[0]['phone'];
			$orderData['order_time'] = time();
			$orderData['user_message'] = addslashes($_POST['user_message']); //为了数据库安全
			$orderData['status'] = 0; //默认是未付款
			
			$carid = $_POST['carid']; //等等要删除对应的post过来的购物车的id

			//以下数据要循环插入到
			$gdlist_id = $_POST['gdlist_id'];
			$good_num = $_POST['good_num'];
			$good_id = $_POST['good_id'];
			
			if($orderid = M('orders')->add($orderData)){
			 	//获取到订单的id后 插入到order_sku数据库表
			 	foreach ($gdlist_id as $key => $value) {
			 		$sql = "insert into order_sku(gdlist_id,order_id,good_num,good_id) values('{$value}','{$orderid}','{$good_num[$key]}','{$good_id[$key]}')";
			 		if(!M()->execute($sql)){
			 			$this->error('插入中断了');
			 		}

			 		//还要对应的更新sku库存
			 		$stocksql = "update shop_goods_list set good_stock = good_stock - {$good_num[$key]} where good_listid = {$gdlist_id[$key]}";
			 		if(!M()->execute($stocksql)){
			 			$this->error('更新sku表的库存出bug了');
			 		}
			 	}
			 	
			 	//如果是通过购物车post过来的 还要删除购物车的carid
			 	if($carid[0] != ''){
			 		foreach ($carid as $k => $v) {
				 		$carsql = "delete from user_cars where carid = '{$v}'";
				 		if(!M()->execute($carsql)){
				 			$this->error('有bug');
				 		}
				 	}
			 	}
			 	$this->success('下单成功,前往付款',U("home/order/payment/id/$orderid"));
			}
		}else{
			$this->error('非法访问');
		}
	}

	//提交订单成功到了付款页面
	public function payment(){
		layout('shoplayout');
		

		//首先先获得订单表的信息
		$orderSql = "select * from orders where order_id = '{$_GET['id']}'";
		$orderRes = M()->query($orderSql);
		
		//再去查商品的信息
		$goodSql = "select t1.*,t2.*,t3.good_name from order_sku t1 left join shop_goods_list t2 on t1.gdlist_id = t2.good_listid left join shop_goods t3 on t1.good_id = t3.good_id where t1.order_id = '{$_GET['id']}'";
		$goodRes = M()->query($goodSql);
		//把sku的数字组合转成文字组合
		foreach ($goodRes as $key => $value) {
			$value['attr_combine'] = explode(',', $value['attr_combine']);
			foreach ($value['attr_combine'] as $k => $v) {
				$sql = "select good_attr_value from  shop_goods_attr where good_attr_id = '{$v}'";
				$value['attr_combine'][$k] =  M()->query($sql)[0]['good_attr_value'];
			}
			$goodRes[$key]['attr_combine'] = implode(' ', $value['attr_combine']);
		}
		// var_dump($orderRes,$goodRes);
		$this->assign('orderRes',$orderRes); //分配订单的详细信息
		$this->assign('goodRes',$goodRes);   //分配订单商品的详细信息;
		$this->display();
	}

	//付款成功更新订单的状态 更新成1;
	public function paysuccess(){
		if(IS_POST){
			$sql = "update orders set status = 1 where order_id = '{$_POST['orderid']}'";
			if(M()->execute($sql) !== false){
				$this->success('付款成功',U("home/myorder/index"));
			}
		}else{
			$this->error('非法访问');
		}
	}

}