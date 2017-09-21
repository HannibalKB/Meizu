<?php
namespace Admin\Controller;
use Think\Controller;
class AuthcateController extends CommonController{
	//权限分类列表
	public function index(){
		$sql = "select * from auth_rule_category";
		$cateRes = M()->query($sql);
		$this->assign('cateRes',$cateRes);
		$this->display();
	}

	//权限分类添加 
	public function addcate(){
		if(IS_POST){
			$cname = $_POST['cname'];
			$sql = "insert into auth_rule_category(cname) values('{$cname}')";
			$res = M()->execute($sql);
			if($res){	

				//操作日志
				$oprationname = '增加权限分类,id:'.$res;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('添加成功',U('admin/Authcate/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();
		}
	}

	//分类编辑
	public function editcate(){
		if(IS_GET){
			$cateid = I('get.cateid');
			$sql = "select * from auth_rule_category where id = {$cateid}";
			$res = M()->query($sql);
			$this->assign('cateData',$res);
			$this->display();
		}elseif(IS_POST){
			$cateid = I('post.cateid');
			$catename = I('post.cname');
			$sql = "update auth_rule_category set cname = '{$catename }' where id = {$cateid}";
			$res = M()->execute($sql);
			if($res){

				//操作日志
				$oprationname = '修改权限分类,id:'.$cateid;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('修改成功',U('admin/Authcate/index'));
			}else{
				$this->error('修改失败');
			}
		}
	}

	//权限规则分类异步删除
	//先检测auth_rules 表是否有规则用到这个分类 有的话就不给删除
	public function deletecate(){
		if(IS_POST && IS_AJAX){
			$sql = "select * from auth_rule where cid = '{$_POST['cid']}'";
			if(M()->query($sql)){
				$returnMsg = array(
					'error'	=> '1',
					'msg'	=> '该分类下有规则字类,请先删除规则子类再做操作'
				);
			}else{
				$sql = "delete from auth_rule_category where id = '{$_POST['cid']}'";
				if(M()->execute($sql) !== flase){

					//操作日志
					$oprationname = '删除权限分类,id:'.$_POST['cid'];
					$this->record_operation($_SESSION['adminid'],$oprationname);

					$returnMsg = array(
						'error'	=> '0',
						'msg'	=> '删除成功'
					);
				}else{
					$returnMsg = array(
						'error'	=> '1',
						'msg'	=> '删除失败',
					);
				}
			}
			$this->ajaxReturn($returnMsg);
		}else{	
			$this->error('非法访问');
		}
	}
}