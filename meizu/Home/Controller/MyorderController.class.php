<?php
namespace Home\Controller;
use Think\Controller;
class MyorderController extends NeedloginCommonController {
	//
	public function index($where = ''){
		layout('shoplayout');
		// '订单状态 0 待付款 1待发货 2已发货 3其他(取消订单之类的)',
		//查询用户所有的订单
		if($where === ''){
			$orderSql = "select * from orders where uid = '{$_SESSION['uid']}' order by order_time desc";
		}else{
			$orderSql = "select * from orders where uid = '{$_SESSION['uid']}' and status  = '{$where}' order by order_time desc";
		}
		
		$orderRes = M()->query($orderSql);
		foreach ($orderRes as $key => $value) {
			$orderRes[$key]['order_time'] = date("Y-m-d H:i:s",$orderRes[$key]['order_time']);
			$sql = "select t1.*,t2.*,t3.good_name,t3.good_pic from order_sku t1 left join shop_goods_list t2 on t1.gdlist_id = t2.good_listid left join shop_goods t3 on t1.good_id = t3.good_id where t1.order_id = '{$value['order_id']}'";
			$orderSku = M()->query($sql);
			// //把对应的sku的数字组合弄成文字
			foreach ($orderSku as $k => $v) {
				$v['attr_combine'] = explode(',',$v['attr_combine']);
				foreach ($v['attr_combine'] as $k1 => $v1) {
					$attrSql = "select good_attr_value from shop_goods_attr where good_attr_id='{$v1}'";
					$v['attr_combine'][$k1] = M()->query($attrSql)[0]['good_attr_value'];
				}
				$orderSku[$k]['attr_combine'] = implode(',', $v['attr_combine']);
				$orderSku[$k]['attr_combine'] = str_replace(',', " ",$orderSku[$k]['attr_combine']);
			}
			$orderRes[$key]['order_sku'] = $orderSku; 
		}
		// // var_dump($orderRes[1]['order_sku']);
		// echo "<pre>";
		$this->assign('orderRes',$orderRes);
		$this->display('myorder/index');
	}

	// '订单状态 0 待付款 1待发货 2已发货 3其他(取消订单之类的)',
	//待付款的
	public function waitpay(){
		$this->index(0);
	}

	// '订单状态 0 待付款 1待发货 2已发货 3其他(取消订单之类的)',
	//1、待发货的
	public function waitDeliver(){
		$this->index(1);
	}

	// '订单状态 0 待付款 1待发货 2已发货 3其他(取消订单之类的)',
	// 已发货
	public function hasDeliver(){
		$this->index(2);
	}

	// '订单状态 0 待付款 1待发货 2已发货 3其他(取消订单之类的)',
	public function orther(){
		$this->index(3);
	}

	// //已完成的订单
	// public function complete(){
	// 	$this->index(4);
	// }

	//取消订单
	public function cancelOrder(){
		$order_id = $_GET['orderid'];
		$sql = "update orders set status = 3 where order_id = '{$order_id}'";
		if(M()->execute($sql) !== false){
			$this->success('取消订单成功',U('home/myorder/index'));
		}else{
			$this->error('取消出错了。');
		}
	}

	//确认收货
	public function confirmGet(){
		if(IS_GET){
			$orderid = $_GET['orderid'];
			//确认收货把数据库的状态改成4
			$sql = "update orders set status = 4 where order_id = '{$orderid}'";
			if(M()->execute($sql) !== false){
				$this->success('确认收货成功',U('home/myorder/orderdetail',array('orderid'=>$orderid)));
			}else{

			}
		}else{
			$this->error('非法访问');
		}
	}

	//订单详情
	public function orderdetail(){
		layout('shoplayout');
		$orderid = $_GET['orderid'];

		$orderSql = "select * from orders where uid = '{$_SESSION['uid']}' and order_id = '{$orderid}' order by order_time desc";
		
		$orderRes = M()->query($orderSql);
		foreach ($orderRes as $key => $value) {
			$orderRes[$key]['order_time'] = date("Y-m-d H:i:s",$orderRes[$key]['order_time']);
			$sql = "select t1.*,t2.*,t3.good_name,t3.good_pic from order_sku t1 left join shop_goods_list t2 on t1.gdlist_id = t2.good_listid left join shop_goods t3 on t1.good_id = t3.good_id where t1.order_id = '{$value['order_id']}'";
			$orderSku = M()->query($sql);
			// //把对应的sku的数字组合弄成文字
			foreach ($orderSku as $k => $v) {
				$v['attr_combine'] = explode(',',$v['attr_combine']);
				foreach ($v['attr_combine'] as $k1 => $v1) {
					$attrSql = "select good_attr_value from shop_goods_attr where good_attr_id='{$v1}'";
					$v['attr_combine'][$k1] = M()->query($attrSql)[0]['good_attr_value'];
				}
				$orderSku[$k]['attr_combine'] = implode(',', $v['attr_combine']);
				$orderSku[$k]['attr_combine'] = str_replace(',', " ",$orderSku[$k]['attr_combine']);
			}
			$orderRes[$key]['order_sku'] = $orderSku; 
		}
		// // var_dump($orderRes[1]['order_sku']);
		// echo "<pre>";
		$this->assign('orderRes',$orderRes);
		// var_dump($orderRes[0]);
		$this->display();
	}

}