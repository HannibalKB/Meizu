<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends NeedloginCommonController {
	public function index(){
		//查询到所有数据先
    // layout(false);
		$sql = "select * from user where uid = '{$_SESSION['uid']}'";
		$res = M()->query($sql);
		$this->assign('res',$res);
		$this->display();
	}

	//异步检查密码
	public function checkpassword(){
		if(IS_AJAX && IS_POST){
			$userpassword = md5(addslashes($_POST['password']));
			$sql = "select uid from user where password = '{$userpassword}' and uid = '{$_SESSION['uid']}'";
			if(M()->query($sql)){
				echo json_encode(true);
			}else{
				echo json_encode(false);
			}
		}else{
			$this->error('非法访问');
		}
	}


	//检测通过允许修改密码
	public function allowEditPassword(){
		if(IS_POST){
			$password = md5(addslashes($_POST['resetPassword'])); //密码MD5加密
       		$passwordPreg = '/^[a-zA-Z0-9_\\.]{8,32}$/';
       		if(preg_match($passwordPreg, $password)){
       			$sql = "update user set `password` = '{$password}' where uid = {$_SESSION['uid']}";
       			if(M()->execute($sql)){
       				$this->success('修改成功,重新登录',U('home/login/index'));
       			}else{
       				$this->error('修改失败请联系管理员');
       			}
       		}else{
       			$this->error('非法数据提交');
       		}
		}else{
			$this->error('非法访问');
		}
	 	
	}


	//异步检查邮箱是否存在
	public function checkemail(){
		if(IS_AJAX){
			$sql = "select email  from user where email = '{$_GET['email']}'";
	    	if(M()->query($sql)){
	    		$returnMsg = false;
	    	}else{
	    		$returnMsg = true;
	    	}
	    	echo json_encode($returnMsg);
		}else{
			echo json_encode(false);
		}
    	 	
    }

    //异步检查验证码
    public function checkverify(){
    	if(IS_AJAX){
    		$verifycode = addslashes($_GET['kapkey']);
    		if($verifycode == $_SESSION['codenum']){
    			echo json_encode(true);
    		}else{
    			echo json_encode(false);
    		}
    	}else{
    		echo json_encode(false);
    	}
    }

    //绑定邮箱
    public function bindemail(){
    	if(IS_POST){
    		$useremail = addslashes($_POST['email']);
    		$sql = "update user set email = '{$useremail}' where uid = '{$_SESSION['uid']}'";
    		if(M()->execute($sql)){
    			$this->success('绑定成功,请重新登录',U('home/login/index'));
    		}else{
    			$this->error('绑定失败了。');
    		}
    	}else{
    		$this->error('非法访问');
    	}
    }

    //头像修改
    public function userface(){
      $this->display();
    }

    //美图头像保存
    public function facesave(){
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
      $upload->savePath  =     'images/'; // 设置附件上传（子）目录
      $info   =   $upload->upload();

      if(!$info) {                    // 上传错误提示错误信息
        $returnMsg = array(
          'error'     => 1,
          'message'   => $upload->getError(),
          'file_path' => '',
        );
      }else{
        
        //上传成功拼接返回的路径及文件名 并且修改用户的头像
        foreach ($info as $key => $value) {
          $file_save_path = 'Uploads/'.$value['savepath'].$value['savename'];
        }

        // 修改用户头像
        $this->updateface($file_save_path);
        $returnMsg = array(
          'error'    => 0,
          'message'  => '上传成功',
          'file_path' => __ROOT__.'/'.$file_save_path,
        );
      }
      //上传成功 就ajax返回对应的信息
      $this->ajaxReturn($returnMsg);
    }

    //执行头像保存的方法
    public function updateface($file_path){
      $sql = "update user set face='{$file_path}' where uid='{$_SESSION['uid']}' ";
      $userfaceSql = "select face from user where uid = '{$_SESSION['uid']}'";
      $userface = M()->query($userfaceSql)[0]['face'];
      //如果成功删除 则返回true 并且删除之前的头像 
      // 判断是否有头像
      if(isset($userface)){
        unlink($userface);
        $_SESSION['face'] = $file_path; //重新将头像路径赋值给session
        M()->execute($sql);
        return true;
      }elseif(M()->execute($sql)){   //没有头像则直接执行更新语句 不需要删除原来的头像
        return true;
      }
      return false;
    }
    
    //退出
    public function loginout(){
    	session(null);
    	$this->success('退出成功',U('home/login/index'));
    }
}