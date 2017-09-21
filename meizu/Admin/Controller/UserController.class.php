<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
	public function userlist(){

		//如果没有搜索条件
		if($_GET['timetype'] == 0 && empty($_GET['condition']) ){
			$sql = "select * from user where isadmin = 0 and status != -3";
			$condition = '';
			// var_dump('如果没有搜索条件');
		}else{
			
			$sql = "select * from user where isadmin = 0 and status != -3";
			$condition = '';
			//如果没有选择时间
			if($_GET['timetype'] == 0){
				//如果有筛选邮箱等条件
				if($_GET['condition']){
					$condition .= " and username like '%".$_GET['condition']."%' or phone like '%".$_GET['condition']."%' or email like '%".$_GET['condition']."%' ";
				}
				$sql.= $condition;
			// 如果有筛选时间类型
			}else{
				//如果筛选的是注册时间  
				if($_GET['timetype'] == 1){
					//如果过有选择最小时间
					if($_GET['mintime']){
						$condition .= " and reg_time >= ".strtotime($_GET['mintime'])."";
					}
					//如果有选择最大时间
					if($_GET['maxtime']){
						$condition .= " and reg_time <= ".strtotime($_GET['maxtime'])."";
					}
				//否则如果筛选的是最后登录的时间
				}elseif($_GET['timetype'] == 2){
					//如果过有选择最小时间
					if($_GET['mintime']){
						$condition .= " and login_time >= ".strtotime($_GET['mintime'])."";
					}
					//如果有选择最大时间
					if($_GET['maxtime']){
						$condition .= " and login_time <= ".strtotime($_GET['maxtime'])."";
					}
				}
				//如果有筛选邮箱等条件
				if($_GET['condition']){
					$condition .= " and username like '%".$_GET['condition']."%' or phone like '%".$_GET['condition']."%' or email like '%".$_GET['condition']."%' ";
				}
				$sql .= $condition;
				
			}
			
		}
		$count = count(M()->query($sql));
		$Page  = new \Think\Page($count,5); 	// 实例化分页类 传入总记录数和每页显示的记录数(*)
		$show  = $Page->show();			        // 分页显示输出
		// $sqlres = "select * from user where isadmin = 0 and status != -3 limit {$Page->firstRow},{$Page->listRows}";
		$ressql = $sql." limit {$Page->firstRow},{$Page->listRows}";
		$res  = M()->query($ressql);
		$this->assign('page',$show); 			//渲染分页
		$this->assign('res',$res);
		$this->assign('count',$count);
		// var_dump($ressql);
		$this->display();
	}

	//ajax用户停用的方法
	public function userstop(){
		if(IS_POST && IS_AJAX){
			$sql = "update user set status = -1 where uid = '{$_POST['userid']}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '用户停用,用户id是:'.$_POST['userid'];
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//ajax启用用户的方法
	public function userstart(){
		if(IS_POST && IS_AJAX){
			$sql = "update user set status = 1 where uid = '{$_POST['userid']}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '用户启用,用户id是:'.$_POST['userid'];
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//ajax 异步删除用户
	public function userdelete(){
		if(IS_POST && IS_AJAX){
			$sql = "update user set status = '-3'  where uid = '{$_POST['userid']}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '删除用户,用户id是:'.$_POST['userid'];
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//批量删除用户
	public function mutipledelete(){
		if(IS_POST){
			$userid = $_POST['uid'];
			foreach ($userid as $key => $value) {
				//操作日志
				$oprationname = '删除用户,用户id是:'.$value;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$sql = "update user set status = '-3'  where uid = '{$value}'";
				M()->execute($sql);
			}
			$this->success('删除成功',U('admin/user/userlist'));
			
		}else{
			$this->error('非法访问');
		}
	}

	//用户详情展示
	public function usershow(){
		if(IS_GET){
			$uid = addslashes($_GET['userid']);
			$sql =  "select * from user where uid = '{$uid}'";
			$res = M()->query($sql);
			$this->assign('res',$res);
			$this->display();
		}else{
			$this->error('非法访问');
		}
	}
//添加用户
	// public function adduser(){
	// 	$this->display();
	// }

}
?>