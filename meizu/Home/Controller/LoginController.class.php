<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
// 登录页面
	public function index(){
		layout(false);
		$this->display();
	}
//电话登录
	public function phoneLog(){
		layout(false);
		$this->display();
	}

	
	public function checkusername(){
		if(IS_AJAX && IS_POST){
			$username = addslashes($_POST['username']);
			$sql = "select uid from user where username = '{$username}'";
			$res=M()->query($sql);
			if($res){
				echo json_encode(true);
			}else{
				echo json_encode(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//异步检查密码和用户名
	public function checkpassword(){
		if(IS_AJAX && IS_POST){
			$username = addslashes($_POST['username']);
			$password = md5(addslashes($_POST['password']));
			$sql = "select uid from user where username = '{$username}' and password = '{$password}'";
			$res=M()->query($sql);
			if($res){
				echo json_encode(true);
			}else{
				echo json_encode(false);
			}
		}else{
			$this->error('非法访问');
		}
	}

	//异步检查验证码
	public function checkverifycode(){
		if(IS_AJAX && IS_POST){
		 	$Verify = new \Think\Verify();
	        $Verify->reset = false; //将reset设置为false 解决只能验证一次的问题
	        if($Verify->check($_POST['verifycode'])){
	        	echo json_encode(true);
			}else{
				echo json_encode(false);
			}
	    }else{
	    	$this->error('非法访问');
	    }
	}

	//成功允许登录
	public function allowlogin(){
		
			
			//登录成功
			$username = $_POST['username'];
			
			$password = md5($_POST['password']);

			$sql = "select * from user where username = '{$username}' and password = '{$password}'";

			$res=M()->query($sql);

			if($res){

				$sql=M('user')->where('username='."'".$_POST["username"]."'")->select();
				// var_dump($sql);exit;
				
				if($sql){
					$_SESSION['uid'] = $sql[0]['uid'];
					$_SESSION['username'] = $sql[0]['username'];
					$_SESSION['email'] = $sql[0]['email'];
					$_SESSION['face'] = $sql[0]['face'];
					$lasttime = time();
					$lastip = get_client_ip();
					$updatelastsql = "update user set login_time = '{$lasttime}',login_ip = '{$lastip}' where uid = '{$_SESSION['uid']}'";
					M()->execute($updatelastsql);

				$this->success('登录成功',U("home/index/index"));
				}
				else{
					$this->error('登录失败');
				}
				
 				
	}
}
		
//手机登录验证
	public function allowPhonelogin(){

		$res=M('user')->where('phone='.$_POST['phone'])->select();

		if($res){
			if($res[0]['password']==md5($_POST['password'])){
			//验证成功存入SESSION
				$_SESSION['uid']=$res[0]['uid'];
				$_SESSION['username']=$res[0]['username'];
				
				$this->success('登录成功！',U('home/index/index'));
			}else{
				$this->error('登录失败！',U('home/login/phoneLog'));
			}
		}else{
			$this->error('该用户不存在！',U('home/login/phoneLog'));
		}

	}

	//退出
	public function loginout(){
		session(null);
		$this->error('退出成功',U('home/login/index'));
	}
}