<?php
namespace Admin\Controller;
use Think\Controller;
//商品类别属性的控制器
class ShoptypeattrController extends CommonController {
	//属性列表
	public function index(){
		$sql = "select * from shop_type_attr t1 left join shop_type t2 on t1.type_id = t2.type_id";
		$res = M()->query($sql);
		$count = count($res);
		$Page  = new \Think\Page($count,15); 	// 实例化分页类 传入总记录数和每页显示的记录数(*)
		$show  = $Page->show();			        // 分页显示输出

		$ressql = $sql." limit {$Page->firstRow},{$Page->listRows}";
		$res  = M()->query($ressql);

		$this->assign('count',$count);
		$this->assign('page',$show);
		$this->assign('res',$res);
		$this->display();
	}

	//编辑属性
	public function editattr(){
		if(IS_GET){
			$attr_id = $_GET['attr_id'];
			//获得原有属性资料
			$sql = "select * from shop_type_attr where attr_id = '{$attr_id}'";
			$res = M()->query($sql);	

			$TypeSql = "select * from shop_type";
			$Typerres = M()->query($TypeSql);

			$this->assign('Typerres',$Typerres);
			$this->assign('res',$res);
			$this->display();
		}elseif(IS_POST){
			if(M('shop_type_attr')->save($_POST) !== false ){

				//操作日志
				$oprationname = '修改商品类型属性,id:'.$attr_id ;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('修改成功',U('admin/shoptypeattr/index'));
			}else{
				$this->error('修改失败');
			}
		}
	}

	//增加属性
	public function addattr(){
		if(IS_POST){
			if($lastid = M('shop_type_attr')->add($_POST)){
				//操作日志
				$oprationname = '添加商品类型属性,id:'.$lastid ;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('增加成功',U('admin/shoptypeattr/index'));

			}else{
				$this->error('增加失败');
			}
		}else{
			$TypeSql = "select * from shop_type";
			$Typerres = M()->query($TypeSql);
			$this->assign('Typerres',$Typerres);
			$this->display();
		}
	}

	//批量删除商品类别属性
	public function multipledelete(){
		if(IS_POST){
			$_POST = current($_POST);
			foreach ($_POST as $key => $value) {

				$sql = "delete from shop_type_attr where attr_id = '{$value}'";
				

				if(M()->execute($sql)){
					//操作日志
					$oprationname = '批量删除商品类型属性,id:'.$value;
					$this->record_operation($_SESSION['adminid'],$oprationname);

					$this->success('修改成功',U('admin/shoptypeattr/index'));

				}else{
					$this->error('产生错误了');
				}
			}
		}else{
			$this->error('非法访问');
		}
	}

	//异步删除单条数据
	public function singdelete(){
		if(JS_POST && IS_AJAX){
			$sql = "delete from shop_type_attr where attr_id = '{$_POST['attr_id']}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '单条删除商品类型属性,id:'.$_POST['attr_id'];
				$this->record_operation($_SESSION['adminid'],$oprationname);
				$returnMsg = array(
					'error'	=> 0,
					'msg'	=> 'ok'
				);
			}else{
				$returnMsg = array(
					'error'	=> 0,
					'msg'	=> 'no'
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('错误!');
		}
	}
}
?>
