<?php
namespace Admin\Controller;
use Think\Controller;
class FeedbackController extends CommonController{
	//反馈列表
	public function index(){
		$sql = "select t1.*,t2.username from feedback t1 left join user t2 on t1.uid = t2.uid";
		$count  = count(M()->query($sql));		//得到数据总数
		$Page  = new \Think\Page($count,2); 	// 实例化分页类 传入总记录数和每页显示的记录数(*)
		$show  = $Page->show();
		$sql = $sql." limit {$Page->firstRow},{$Page->listRows}";
		$res = M()->query($sql);
		foreach ($res as $key => $value) {
			$res[$key]['typeid'] = M()->query("select type_name from feedback_type where id = '{$value['typeid']}'")[0]['type_name'];
		}
		$this->assign('Page',$show);
		$this->assign('count',$count);
		$this->assign('res',$res);
		$this->display();
	}

	//详情展示
	public function feedbackshow(){
		if(IS_GET){
			$fbid = $_GET['fbid'];
			$sql = "select t1.*,t2.username from feedback t1 left join user t2 on t1.uid = t2.uid where t1.fbid = '{$fbid}'";				//得到结果
			$res = M()->query($sql);
			//更新数据库的status 变成已读
			$updatesql = "update feedback set status = 0 where fbid = '{$fbid}'";
			M()->execute($updatesql);
			$res[0]['typeid'] = M()->query("select type_name from feedback_type where id = '{$res[0]['typeid']}'")[0]['type_name'];   //得到typeid对应的typename
			$this->assign('res',$res);
			$this->display();
		}else{	
			$this->error('非法访问');
		}
	}

	//异步单条数据删除
	public function singledelete(){
		if(IS_AJAX && IS_POST){
			$sql = "delete from feedback where fbid = '{$_POST['fbid']}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '单条删除反馈意见:';
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$returnMsg = array(
					'error' => 0,
					'msg'	=> '删除成功'
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '删除失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{	
			$this->error('非法访问');
		}
	}

	//批量删除意见
	public function mutipledelete(){
		if(IS_POST){
			foreach ($_POST['fbid'] as $key => $value) {
				//操作日志
				$oprationname = '批量删除反馈意见,id是:'.$value;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$sql = "delete from feedback where fbid = '{$value}'";
				M()->execute($sql);
			}
			$this->success('删除成功',U('admin/feedback/index'));
			
		}else{
			$this->error('非法访问');
		}
	}

	//分类方法
	public function feedcate(){
		$sql = "select * from feedback_type order by id desc";
		$res = M()->query($sql);
		$this->assign('res',$res);
		// var_dump($res);
		$this->display();
	}

	//异步添加分类
	public function feedadd(){
		if(IS_AJAX && IS_POST){
			$sql = "insert into feedback_type(type_name) value('{$_POST['type_name']}')";
			if(M()->execute($sql)){

				$returnMsg = array(
					'error' => 0,
					'id'	=> M('feedback_type')->getLastInsID(),
					'type_name' => $_POST['type_name'],
					'msg'	=> '增加成功'
				);

				//操作日志
				$oprationname = '添加分类,分类id是:'.$returnMsg['id'];
				$this->record_operation($_SESSION['adminid'],$oprationname);
				
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '增加失败'
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//批量删除分类
	public function mutipledeletecate(){
		if(IS_POST){
			foreach ($_POST['id'] as $key => $value) {
				//操作日志
				$oprationname = '批量删除反馈分类,id是:'.$value;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$sql = "delete from feedback_type where id = '{$value}'";
				M()->execute($sql);
			}
			$this->success('删除成功',U('admin/feedback/feedcate'));
		}else{
			$this->error('非法访问');
		}
	}

	//单个分类删除
	public function singledeletecate(){
		if(IS_AJAX && IS_POST){
			$sql = "delete from feedback_type where id = '{$_POST['id']}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '单条删除反馈分类:';
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$returnMsg = array(
					'error' => 0,
					'msg'	=> '删除成功'
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '删除失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//分类修改
	public function editcate(){
		if(IS_GET){
			$sql = "select * from feedback_type where id = '{$_GET['id']}'";
			$res = M()->query($sql);
			$this->assign('res',$res);
			$this->display();
		}elseif(IS_POST){
			$data['id'] = $_POST['id'];
			$data['type_name'] = $_POST['type_name'];
			if(M('feedback_type')->save($data) !== false){
				//操作日志
				$oprationname = '修改分类,分类id是:'.$_POST['id'];
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('修改成功',U('admin/feedback/feedcate'));
			}else{
				$this->error('修改失败',U('admin/feedback/feedcate'));
			}
		}else{
			$this->error('非法访问');
		}
	}
}