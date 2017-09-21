<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Common\Shopcate;
//商品分类
class ShopcateController extends CommonController {
	public function index(){
		// $Cateres = M('shop_category')->select();
		$ShopCateSql = "select * from shop_category t1 left join shop_type t2 on t1.type_id = t2.type_id order by t1.sort asc";
		$ShopCateres = M()->query($ShopCateSql);	

		
		//实例化商品无限极类
		$cateHandle = new Shopcate();
		//获得商品分类类表
		$ShopCateres = $cateHandle->GetSonCate($ShopCateres); 

		//获得商品类型
		$ShopTyperes = M('shop_type')->select();

		$this->assign('ShopTyperes',$ShopTyperes);
		$this->assign('ShopCateres',$ShopCateres);
		$this->display();
	}


	//产品分类的添加 
	public function addshopcate(){
		if(IS_POST){
			$data['type_id'] = $_POST['type_id'];
			$data['pid'] =  $_POST['pid'];
			$data['cname'] = addslashes($_POST['cname']);
			$data['sort'] = intval($_POST['sort']);	//讲post过来的排序强制转成整数;
			if(M('shop_category')->add($data)){
				$this->success('添加成功',U('admin/shopcate/index'));
			}else{
				$this->error('添加失败');
			}
			
		}else{
			$this->error('非法访问');
		}
	}

	//产品分类异步删除
	public function deleteshopcate(){
		if(IS_POST && IS_AJXA){
			$cid = $_POST['cid'];
			$sql = "select * from shop_category where pid = '{$_POST['cid']}'";
			if(M()->query($sql)){
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '该类下有子类,请先删除对应的子类再做对应的操作',
				);
			}else{
				$deletesql = "delete from shop_category where cid = '{$_POST['cid']}'";
				if(M()->execute($deletesql)){
					$returnMsg = array(
						'error'	=> 0,
						'msg'	=> '删除成功',
					);
				}else{
					$returnMsg = array(
						'error'	=> 1,
						'msg'	=> '操作失败',
					);
				}
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//商品分类编辑
	public function editshopcate(){
		if(IS_GET){
			//获得原先的结果
			$cid = $_GET['cid'];
			$sql = "select * from shop_category where cid = '{$cid}'";
			$res = M()->query($sql);
			//获得商品类型
			$ShopTyperes = M('shop_type')->select();

			//获得商品的分类
			$ShopCateSql = "select * from shop_category t1 left join shop_type t2 on t1.type_id = t2.type_id";
			$ShopCateres = M()->query($ShopCateSql);	
			
			//实例化商品无限极类
			$cateHandle = new Shopcate();
			//获得商品分类列表
			$ShopCateres = $cateHandle->GetSonCate($ShopCateres); 

			//删除等于自己的那一类,因为不能将自己移动到自己的分类下面
			// foreach ($ShopCateres as $key => $value) {
			// 	if($value['cid'] == $cid){
			// 		unset($ShopCateres[$key]);
			// 	}
			// }

			$this->assign('ShopTyperes',$ShopTyperes);
			$this->assign('res',$res);
			$this->assign('ShopCateres',$ShopCateres);

			
			$this->display();
		}else{
			if(M('shop_category')->save($_POST)){
				$this->success('修改成功',U('admin/shopcate/index'));
			}else{
				$this->error('修改失败');
			}
		}
	}
}
?>