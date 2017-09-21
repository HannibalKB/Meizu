<?php
namespace Admin\Controller;
use Think\Controller;
//权限规则管理
class RulesController extends CommonController {
	//权限规则列表
	public function index(){
		$authCateSql = "select * from auth_rule_category";
		$cateres = M()->query($authCateSql);

		$auth_ruleSql = "select * from auth_rule";

		$count = count(M()->query($auth_ruleSql));
		$Page  = new \Think\Page($count,10); 	// 实例化分页类 传入总记录数和每页显示的记录数(*)
		$show  = $Page->show();			        // 分页显示输出

		$authres = M()->query($auth_ruleSql." limit {$Page->firstRow},{$Page->listRows}");
		foreach ($authres as $key => $value) {
			$sql = "select cname from  auth_rule_category where id = {$value['cid']}";
			$authres[$key]['cid'] = M()->query($sql)[0]['cname'];
		}

		$this->assign('count',$count);
		$this->assign('page',$show);
		$this->assign('authres',$authres);
		$this->assign('cateres',$cateres);
		$this->display();
	}

	//权限规则添加
	public function ruleadd(){
		if(IS_POST){
			$data['cid'] = $_POST['cid'];
			$data['name'] = strtolower($_POST['name']);
			$data['title'] = $_POST['title'];
			if($id = M('auth_rule')->add($data)){
				//操作日志
				$oprationname = '添加权限规则,id:'.$id ;
				$this->record_operation($_SESSION['adminid'],$oprationname);
				$this->success('添加成功',U('admin/rules/index'));

			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error('非法访问');
		}
	}

	//权限规则单条删除
	public function ruledeletesingle(){
		if(IS_GET){
			$id = $_GET['id'];
			$sql = "delete from auth_rule where id = '{$id}'";
			if(M()->execute($sql)){
				//操作日志
				$oprationname = '删除权限规则,id:'.$id ;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('添加成功',U('admin/rules/index'));

				$this->success('删除成功',U('admin/rules/index'));
			}else{
				$this->error('删除失败');
			}
		}else{
			$this->error('非法访问');
		}
	}

	//权限规则的编辑
	public function editrule(){
		if(IS_POST){
			if(M('auth_rule')->save($_POST) !== false){
				//操作日志
				$oprationname = '修改权限规则,id:'.$_POST['id'] ;
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('修改成功',U('admin/rules/index'));
			}else{
				$this->error('修改失败');
			}
		}elseif(IS_GET){

			$sql = "select * from auth_rule where id = {$_GET['id']}";
			$res = M()->query($sql);

			$authCateSql = "select * from auth_rule_category";
			$cateres = M()->query($authCateSql);

			$this->assign('res',$res);
			$this->assign('cateres',$cateres);
			$this->display();
		}
	}

	//批量删除权限规则
	public function mutipledeleterule(){
		if(IS_POST){
			foreach ($_POST['id'] as $key => $value) {
				$sql = "delete from auth_rule where id = '{$value}'";
				if(M()->execute($sql)){
					//操作日志
					$oprationname = '批量权限规则,id:'.$value ;
					$this->record_operation($_SESSION['adminid'],$oprationname);
				}
			}
			$this->success('批量删除成功',U('admin/rules/index'));
		}else{
			$this->error('非法访问');
		}
	}
}