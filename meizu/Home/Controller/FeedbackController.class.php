<?php
namespace Home\Controller;
use Think\Controller;
class FeedbackController extends NeedloginCommonController {
	public function index(){
		layout('userCenterLayout');
		$sql = "select * from feedback_type order by id desc";
		$res = M()->query($sql);
		$title = '会员中心-用户反馈';
		$this->assign('res',$res);
		$this->assign('title',$title);
		$this->display();
	}

	//
	public function feedBackSubmit(){
		if(IS_AJAX && IS_POST){
			$data['uid'] = $_SESSION['uid'];
			$data['typeid'] = $_POST['alldata']['cateid'];
			$data['content'] = $_POST['alldata']['feedbackcontent'];
			$data['email'] =  $_POST['alldata']['usremail'];
			$data['create_time'] = time();
			if(M('feedback')->add($data)){
				$returnMsg = array(
					'error'	=> '0',
					'msg'	=> '多谢您的留言',
				);
			}else{
				$returnMsg = array(
					'error'	=> '1',
					'msg'	=> '留言错误',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}
}
