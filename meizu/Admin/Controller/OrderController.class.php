<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
	public function index(){
		$orderSql = "select * from orders  order by order_time desc";
		$orderRes = M()->query($orderSql);
		$count = count($orderRes);
		$Page  = new \Think\Page($count,5); 	// 实例化分页类 传入总记录数和每页显示的记录数(*)
		$show  = $Page->show();			        // 分页显示输出
		$orderSql = $orderSql." limit {$Page->firstRow},{$Page->listRows}";
		$orderRes = M()->query($orderSql);
		foreach ($orderRes as $key => $value) {
			// $orderRes[$key]['order_time'] = date("Y-m-d H:i:s",$orderRes[$key]['order_time']);
			// $sql = "select t1.*,t2.*,t3.good_name,t3.good_pic from order_sku t1 left join shop_goods_list t2 on t1.gdlist_id = t2.good_listid left join shop_goods t3 on t1.good_id = t3.good_id where t1.order_id = '{$value['order_id']}'";
			// $orderSku = M()->query($sql);
			// // //把对应的sku的数字组合弄成文字
			// foreach ($orderSku as $k => $v) {
			// 	$v['attr_combine'] = explode(',',$v['attr_combine']);
			// 	foreach ($v['attr_combine'] as $k1 => $v1) {
			// 		$attrSql = "select good_attr_value from shop_goods_attr where good_attr_id='{$v1}'";
			// 		$v['attr_combine'][$k1] = M()->query($attrSql)[0]['good_attr_value'];
			// 	}
			// 	$orderSku[$k]['attr_combine'] = implode(',', $v['attr_combine']);
			// 	$orderSku[$k]['attr_combine'] = str_replace(',', " ",$orderSku[$k]['attr_combine']);
			// }
			// $orderRes[$key]['order_sku'] = $orderSku;
			//查询出对应的用户
			$usersql = "select username from user where uid = {$value['uid']}";
			$orderRes[$key]['theusername'] = M()->query($usersql)[0]['username'];
		}
		// var_dump($orderRes);
		$this->assign('count',$count);
		$this->assign('page',$show);
		$this->assign('orderRes',$orderRes);

		$this->display();
	}

	//发货
	public function send(){
		$sql = "update orders set status = 2 where order_id = '{$_GET['orderid']}'";
		if(M()->execute($sql) !== false){
			$this->success('发货成功',U('admin/order/index'));
		}else{
			$this->error('发货失败');
		}
	}

	//删除
	public function delete(){
		$sql = "delete from orders where order_id = '{$_GET['orderid']}'";
		if(M()->execute($sql)){
			$this->success('删除成功',U('admin/order/index'));
		}else{
			$this->error('删除失败');
		}
	}

	//查看详情
	public function orderdetail(){
		$orderSql = "select * from orders where order_id = '{$_GET['orderid']}'  order by order_time desc";
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
			// 查询出对应的用户
			$usersql = "select username from user where uid = {$value['uid']}";
			$orderRes[$key]['theusername'] = M()->query($usersql)[0]['username'];
		}
		// var_dump($orderRes);
		$this->assign('orderRes',$orderRes);
		// var_dump($orderRes[0]['order_sku']);
		$this->display();
	}
}