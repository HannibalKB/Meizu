<?php
namespace Admin\Controller;
use Think\Controller;
class VerifyController extends Controller {
	//产生验证码
	public function buildVerify(){
		$config = array(
   			'fontSize' => 17,    // 验证码字体大小
   			'length'   => 4,     // 验证码位数
   			'imageH'   => 40,
   			'imageW'   => 130,
   			'useNoise'    =>    false, // 关闭验证码杂点
		);
		$Verify =     new \Think\Verify($config);
		$Verify->entry();
	}

	//检测验证码
	public function checkVerify(){
		$verify = new \Think\Verify();
		$verify->reset = false; //防止验证一遍
		if($verify->check($_POST['verify'])){
			$this->ajaxReturn(true);
		}else{
			$this->ajaxReturn(false);
		}
	}
}