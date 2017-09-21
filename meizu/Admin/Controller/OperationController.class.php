<?php
namespace Admin\Controller;
use Think\Controller;
class OperationController extends CommonController{
	public function index(){
		$sql = "select t1.*,t2.username,t2.uid from operation_logs t1 left join user t2 on t1.admin_id = t2.uid where t2.isadmin = 1";
		// $sql = "select t1.*,t2.username,t2.uid,t4.title from operation_logs t1 left join user t2 on t1.admin_id = t2.uid left join auth_group_access t3 on t2.uid = t2.uid left join auth_group t4 on t4.id = t3.group_id where t2.isadmin = 1";
		
		$count = count(M()->query($sql));
		$Page  = new \Think\Page($count,20); 	// 实例化分页类 传入总记录数和每页显示的记录数(*)
		$show  = $Page->show();			        // 分页显示输出
		$ressql = $sql." order by operation_time desc limit {$Page->firstRow},{$Page->listRows}  ";
		$res  = M()->query($ressql);
		foreach ($res as $key => $value) {
			if($value['operation_ip'] == '::1'){
				$res[$key]['operation_ip'] = '127.0.0.1';
			}
		}
		$this->assign('page',$show); 			
		$this->assign('count',$count);
		$this->assign('res',$res);
		$this->display();
	}

	//批量删除
	public function mutipledelete(){
		if(IS_POST){
			$log_id = $_POST['log_id'];
			foreach ($log_id as $key => $value) {

				$sql = "delete from operation_logs where log_id = '{$value}'";
				
				M()->execute($sql);
			}
			$this->success('删除成功',U('admin/operation/index'));
			
		}else{
			$this->error('非法访问');
		}
	}

	//异步单条数据删除
	public function singledelete(){
		if(IS_AJAX && IS_PSOT){
			$sql = "delete from operation_logs where log_id = '{$_POST['log_id']}'";
			if(M()->execute($sql)){
				$returnMsg = array(
					'error'	=> 0,
					'msg'	=> '删除成功',
				);
			}else{
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '删除失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}
}