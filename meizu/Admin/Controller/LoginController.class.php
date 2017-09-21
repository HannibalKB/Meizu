<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function Login(){
        $this->display();
    }

    //检测管理员账号是否存在
	public function checkusername(){
		if(IS_POST && IS_AJAX){
			$sql = "select * from user where username = '{$_POST['adminame']}' and isadmin = 1";
			if(M()->query($sql)){
				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//检测密码和管理员帐户是否匹配
	public function checkpassword(){
		if(IS_POST && IS_AJAX){
			$password = md5($_POST['adminpassword']);
			$sql = "select * from user where username = '{$_POST['adminname']}' and password = '{$password}' and isadmin = 1";
			if(M()->query($sql)){
				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//后台认证登录
	public function allowlogin(){
		if(IS_POST){
			$password = md5($_POST['adminpassword']);
			$sql = "select * from user where username = '{$_POST['adminame']}' and password = '{$password}' and isadmin = 1";
			if($res = M()->query($sql)){
				$_SESSION['adminname'] = $res[0]['username'];
				$_SESSION['adminid']  = $res[0]['uid'];
				//取出管理员的角色
				$rolesql = "select title from auth_group t1 left join auth_group_access t2 on t1.id = t2.group_id where t2.uid = {$_SESSION['adminid']}";
				$_SESSION['role'] = M()->query($rolesql)[0]['title'];
				$this->success('登录成功',U('admin/index/index'));
			}else{
				$this->error('非法访问');
			}
		}else{
			$this->error('非法访问');
		}
	}

	//退出方法
	public function loginOut(){
		session(null);
		$this->success('退出成功',U('admin/login/login'));
	}
}
?>