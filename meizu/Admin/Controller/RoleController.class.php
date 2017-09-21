<?php
namespace Admin\Controller;
use Think\Controller;
//管理员角色管理
class RoleController extends CommonController {
	//角色列表
	public function index(){
		$sql = "select t1.*,t3.username,t3.uid  from auth_group t1 left join auth_group_access t2 on t1.id = t2.group_id left join user t3 on t3.uid = t2.uid ";
		$res = M()->query($sql);

		$tempArr = array();
		foreach ($res as $key => $value) {
			//根据组的id来重新组数组 如果说有相同管理员的id了 那就直接在后面追加 
			if(isset($tempArr[$value['id']])){
				$tempArr[$value['id']]['son'][] = array('uid'=> $value['uid'],'username'=>$value['username']);
			}else{
				$value['son'][] = array('uid'=> $value['uid'],'username'=>$value['username']);
				$tempArr[$value['id']] = $value;
			}
			
		}
		$count = count($tempArr);
		$this->assign('count',$count);
		$this->assign('res',$tempArr);
		$this->display();
	}

	//添加角色
	public function addrole(){
		//如果是post过来的 说明是要添加的
		if(IS_POST){
			$data['title'] = $_POST['title'];
			$data['rules'] = implode(',', $_POST['id']);   //把post过来的数组转成以逗号分隔的字符串
			$data['desc'] = $_POST['desc'];
			if(M('auth_group')->add($data)){

				//操作日志
				$oprationname = '添加角色';
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('添加成功',U('admin/role/index'));
			}
		}else{
			$cateSql = "select * from auth_rule_category";
			$res = M()->query($cateSql);
			foreach ($res as $key => $value) {
				$ruleSql = "select * from auth_rule where cid = '{$value['id']}'";
				$res[$key]['cate'] = M()->query($ruleSql);
			}
			$this->assign('res',$res);
			$this->display();
		}
	}

	//编辑角色
	public function editrole(){
		if(IS_POST){
			$data['id'] = $_POST['id'];
			$data['title'] = $_POST['title'];
			$data['rules'] = implode(',', $_POST['rules']);
			$data['desc'] = $_POST['desc'];
			if(M('auth_group')->save($data)){

				//操作日志
				$oprationname = '修改角色,角色id是'.$_POST['id'];
				$this->record_operation($_SESSION['adminid'],$oprationname);

				$this->success('修改成功',U('admin/role/index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			$data = M()->query("select * from auth_group where id = '{$_GET['id']}'");
			$selected = explode(',', $data[0]['rules']);
			
			$cateSql = "select * from auth_rule_category";
			$res = M()->query($cateSql);
			foreach ($res as $key => $value) {
				$ruleSql = "select * from auth_rule where cid = '{$value['id']}'";
				$res[$key]['cate'] = M()->query($ruleSql);
			}
			$this->assign('data',$data);
			$this->assign('selected',$selected);
			$this->assign('res',$res);
			$this->display();
		}
	}

	//异步角色管理删除
	public function deleterole(){
		if(IS_AJAX && IS_POST){
			$group_id = $_POST['roleid'];
			//首先先去数据库查询roledid是否有东西在auth_group_access 表 是的话就不给删除
			$sql = "select * from auth_group_access where group_id = '{$group_id}'";
			$res = M()->query($sql);
			if($res){
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '角色下有管理员存在,请先删除管理员',
				);
			}else{
				$sql = "delete from auth_group where id = '{$group_id}'";
				if(M()->execute($sql)){

					//操作日志
					$oprationname = '删除角色,角色id是'.$_POST['roleid'];
					$this->record_operation($_SESSION['adminid'],$oprationname);

					$returnMsg = array(
						'error'	=> 0,
						'msg'	=> 'ok',
					);
				}else{
					$returnMsg = array(
						'error'	=> 1,
						'msg'	=> '通信错误',
					);
				}
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}
}