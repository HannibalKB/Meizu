<?php
namespace Admin\Controller;
use Think\Controller;
//管理员管理
class AdminController extends CommonController {
	//管理员列表
	public function index(){
		$rolesql = "select * from auth_group";
		$roleres = M()->query($rolesql);		//角色

		$adminlistsql = "select t1.*,t2.*,t3.username,t3.reg_time from auth_group t1 left join  auth_group_access t2 on t1.id = t2.group_id left join user t3 on t3.uid =  t2.uid where t3.isadmin = 1";
		$adminlistRes = M()->query($adminlistsql);
		$this->assign('count',count($adminlistRes));
		$this->assign('adminlistRes',$adminlistRes);
		$this->assign('roleres',$roleres);
		$this->display();
	}

	
	public function isexitusername(){
		if(IS_AJAX && IS_POST){
			$username = addslashes($_POST['data']['username']);
			$password = addslashes(md5($_POST['data']['password']));
			$sql = "select * from user where username = '{$username}'";
			if(M()->query($sql)){
				$returnMsg = array(
					'error'	=> '1',
					'msg'	=> '帐户名已经存在',
				);
			}else{
				$returnMsg = array(
					'error'	=> '0',
					'msg'	=> '可以使用',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{	
			$this->error('非法访问');
		}
	}

	//异步检测通过的话可以添加管理员了
	public function addadmin(){
		if(IS_POST){
			$data['username'] = addslashes($_POST['username']);
			$data['password'] = addslashes(md5($_POST['password']));
			$data['isadmin'] = 1;
			$data['reg_time'] = time();
			$data['reg_ip'] = '127.0.0.1';
			$group_id = $_POST['group_id'];
			if($lastid = M('user')->add($data)){
				$sql = "insert into auth_group_access(uid,group_id) values({$lastid},{$group_id})";
				if(M()->execute($sql)){

					//操作日志
					$oprationname = '增加管理员,用户id:'.$lastid;
					$this->record_operation($_SESSION['adminid'],$oprationname);

					$this->success('增加成功',U('admin/admin/index'));
				}
			}
		}else{
			$this->error('非法访问');
		}
	}

	//管理员删除
	public function deleteadmin(){
		if(IS_GET){
			$uid = $_GET['uid'];
			$sql = "delete from auth_group_access where uid = '{$uid}'";
			if(M()->execute($sql)){
				$sql = "update user set isadmin = 0 where  uid = '{$uid}'";
				if(M()->execute($sql)){
					//操作日志
					$oprationname = '删除管理员,用户id:'.$uid;
					$this->record_operation($_SESSION['adminid'],$oprationname);

					$this->success('删除成功',U('admin/admin/index'));

				}else{
					$this->error('操作失败');
				}
			}else{
				$this->error('操作失败');
			}
		}else{
			$this->error('非法访问');
		}
	}

	//异步检测添加管理员用户名是否存在并且排除自己本身的用户名
	public function isExitUserNameNotSelf(){
		if(IS_AJAX && IS_POST){
			$username = addslashes($_POST['data']['username']);
			$password = addslashes(md5($_POST['data']['password']));
			$uid = addslashes($_POST['data']['uid']);
			$sql = "select * from user where username = '{$username}' and uid != {$uid}";
			if(M()->query($sql)){
				$returnMsg = array(
					'error'	=> '1',
					'msg'	=> '帐户名已经存在',
				);
			}else{
				$returnMsg = array(
					'error'	=> '0',
					'msg'	=> '可以使用',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{	
			$this->error('非法访问');
		}
	}

	//管理员编辑 与 保存
	public function editadmin(){
		if(IS_GET){
			$rolesql = "select * from auth_group";
			$roleres = M()->query($rolesql);		//角色

			$uid = $_GET['uid'];

			$adminsql = "select t1.*,t2.*,t3.username,t3.reg_time from auth_group t1 left join  auth_group_access t2 on t1.id = t2.group_id left join user t3 on t3.uid =  t2.uid where t3.uid = $uid";
			$adminRes = M()->query($adminsql);
			$this->assign('adminRes',$adminRes);
			$this->assign('roleres',$roleres);
			$this->display();
		}else{
			//如果没有修改密码	那么就是没有修改密码
			$group_id = $_POST['group_id'];
			if($_POST['password'] == ''){
				$data['uid'] = $_POST['uid'];
				$data['username'] = $_POST['username'];
				
				if(M('user')->save($data) !== false){
					$sql = "update auth_group_access set group_id = {$group_id} where uid = {$data['uid']}";
					if(M()->execute($sql) !== false){

						//操作日志
						$oprationname = '编辑管理员,用户id:'.$data['uid'];
						$this->record_operation($_SESSION['adminid'],$oprationname);

						$this->success('修改成功',U('admin/admin/index'));
					}else{
						$this->error('修改失败,没有密码0');
					}
				}else{
					$this->error('修改失败,没有密码1');
				}
			}else{
			//否则就是有修改密码
				$data['uid'] = $_POST['uid'];
				$data['username'] = addslashes($_POST['username']);
				$data['password'] = addslashes(md5($_POST['password']));
				if(M('user')->save($data) !== false){
					$sql = "update auth_group_access set group_id = {$group_id} where uid = {$data['uid']}";
					if(M()->execute($sql) !== false){
						//操作日志
						$oprationname = '编辑管理员,用户id:'.$data['uid'];
						$this->record_operation($_SESSION['adminid'],$oprationname);
						
						$this->success('修改成功',U('admin/admin/index'));
					}else{
						$this->error('修改失败,有密码');
					}
				}else{
					$this->error('修改失败,有密码');
				}
			}
		}
	}
}