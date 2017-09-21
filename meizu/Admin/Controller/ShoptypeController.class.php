<?php
namespace Admin\Controller;
use Think\Controller;
//商品类型管理
class ShoptypeController extends CommonController {
	public function index(){
		$sql = "select * from shop_type";
		$res = M()->query($sql);
		$count = count($res);
		$this->assign('count',$count);
		$this->assign('res',$res);
		$this->display();
	}

	//产品类型添加
	public function addtype(){
		if(IS_POST){
			$type_name = $_POST['type_name'];
			// $sql = "insert into shop_type(type_name) value('{$type_name}')";
			if($lastid = M('shop_type')->add($_POST)){
				//操作日志
				$oprationname = '添加商品类型,id:'.$lastid ;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('添加成功',U('admin/shoptype/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error('非法访问');
		}
	}

	//编辑产品类型
	public function editType(){
		if(IS_POST){
			if(M('shop_type')->save($_POST) !== false ){
				//操作日志
				$oprationname = '修改商品类型,id:'.$_POST['type_id'] ;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('修改成功',U('admin/shoptype/index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			$typeid = $_GET['type_id'];
			$sql = "select * from shop_type where type_id = {$typeid}";
			$res = M()->query($sql);
			$this->assign('res',$res);
			$this->display();
		}
	}

	//异步单条删除商品类型
	public function deletetype(){
		if(IS_POST && IS_AJAX){
			$sql = "select * from shop_category where type_id = '{$_POST['type_id']}'";
			if(M()->query($sql)){
				$returnMsg = array(
					'error'	=> '1',
					'msg'	=> '该分类下有商品分类的子类,请先删除子类再做操作'
				);
			}else{
				$sql = "delete from shop_type where type_id = '{$_POST['type_id']}'";
				if(M()->execute($sql) !== flase){

					//操作日志
					$oprationname = '删除商品类型分类,id:'.$_POST['type_id'];
					$this->record_operation($_SESSION['adminid'],$oprationname);

					$returnMsg = array(
						'error'	=> '0',
						'msg'	=> '删除成功'
					);
				}else{
					$returnMsg = array(
						'error'	=> '1',
						'msg'	=> '删除失败',
					);
				}
			}
			$this->ajaxReturn($returnMsg);
		}else{	
			$this->error('非法访问');
		}
	}
}
?>