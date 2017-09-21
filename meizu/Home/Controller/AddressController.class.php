<?php
namespace Home\Controller;
use Think\Controller;
// 地址管理控制器
class AddressController extends NeedloginCommonController {

	//地址管理的方法
	public function addressManage(){
		layout('userCenterLayout');
		//得到数据库中收货地址的列表
		$sql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
		$res = M()->query($sql);
		$count = count($res);
		$title = '会员中心-用户地址';
		$this->assign('title',$title);
		$this->assign('count',$count);
		$this->assign('res',$res);
		$this->display();
	}

	//异步添加地址的方法
	public function addressAdd(){
		if(IS_AJAX && IS_POST){
			$data = array();	//定义数组
			$data['uid']  = $_SESSION['uid'];
			$sql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
			$count = count(M()->query($sql));		//得到条数
			if( $count >= 10 ){
				$returnMsg = array(
					'error' => 2,
					'msg'	=> '不能超过十条地址',
				);
				$this->ajaxReturn($returnMsg);
				exit;
			}

			//遍历post过来的数组 然后组成可以添加到数据库的格式
			foreach ($_POST['alldata'] as $key => $value) {
				$data[$key] = $value;
			}
			if($data['county'] == '请选择'){
				$data['county'] = ''; 	//如果某些选项的是区 就把默认的区改成 空字符串 ''
			}
			if($data['isdefault'] == 'true'){
				$data['isdefault'] = 1;
			}elseif($data['isdefault'] = 'false'){
				$data['isdefault'] = 0;
			}
			//得到老ID
			$oldaddridSql = "select id from receive_addr where isdefault = 1";
			$oldaddrid = M()->query($oldaddridSql);
			// 如果说有选中默认地址 那么就要更新之前默认选中的状态 更新成不是默认的地址
			if($data['isdefault'] == 1){
				$isdefaultSql = "update receive_addr set isdefault = 0 where 1";
				
				if(M()->execute($isdefaultSql) === false){
					$this->error('通信错误');
				}
			}
			
			
			// $last_insert_id 获取到插入到收货地址表的最后一条的id
			if($last_insert_id = M('receive_addr')->add($data)){
				$sql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
				$count = count(M()->query($sql));
				$returnMsg = array(
					'error'		=>  0,
					'addressid' 		=>  $last_insert_id,
					'realname'	=> 	$data['realname'],
					'address'	=>  $data['province'].$data['city'].$data['county'].$data['detail_addr'],
					'phone'		=>	$data['phone'],
					'province_num'	=>	$data['province_num'],
					'city_num'		=>	$data['city_num'],
					'county_num'	=>	$data['county_num'],
					'isdefault'		=> 	$data['isdefault'],
					'oldaddrid'		=> 	$oldaddrid[0]['id'],
					'count'			=>  $count,
				);
				$this->ajaxReturn($returnMsg);
			}
		}else{
			$returnMsg = array(
				'error' => 1,
				'msg'	=> '非法访问',
			);
			$this->ajaxReturn($returnMsg);
		}
	}

	//异步地址删除
	public function addressDelete(){
		if(IS_AJAX && IS_POST){
			$addressid = $_POST['addrid'];
			$sql = "delete from receive_addr where id = '{$addressid}'";
			if(M()->execute($sql)){
				$sql = "select * from receive_addr where uid = '{$_SESSION['uid']}'";
				$count = count(M()->query($sql));
				$returnMsg = array(
					'error' => 0,
					'msg'	=> '删除成功',
					'count'	=> $count,
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

	//异步修改地址为默认地址
	public function addressDefault(){
		if(IS_POST && IS_AJAX){
			$newaddrid = $_POST['addrdata']['newaddrid'];       //新的要为新地址的id
			$oldaddrid = $_POST['addrdata']['oldaddrid'];
			$oldaddrSql = "update receive_addr set isdefault = 0 where id = '{$oldaddrid}'";
			$newaddrSql = "update receive_addr set isdefault = 1 where id = '{$newaddrid}'";
			//如果有默认地址
			if(isset($oldaddrid)){
				if(M()->execute($oldaddrSql)){
					if(M()->execute($newaddrSql)){
						$returnMsg = array(
							'error' => 0,
							'msg'	=> '成功',
							'oldaddrid' => $oldaddrid,
							'newaddrid'	=> $newaddrid,
						);
					}else{
						$returnMsg = array(
							'error' => 1,
							'msg'	=> '失败,有老id,里面的没执行成功',
						);
					}
				}else{
					$returnMsg = array(
						'error' => 1,
						'msg'	=> '失败,有老id,外面的没执行成功',
					);
				}
			}else{							//否则就是没有默认地址
				if(M()->execute($newaddrSql)){
					$returnMsg = array(
						'error' => 0,
						'msg'	=> '成功',
						'oldaddrid' => $oldaddrid,
						'newaddrid'	=> $newaddrid,
					);
				}else{
					$returnMsg = array(
						'error' => 1,
						'msg'	=> '失败,没老id',
					);
				}
			}

			$this->ajaxReturn($returnMsg);

		}else{
			$this->error('非法访问');
		}
	}

	//异步地址修改编辑 读取原来的数据
	public function addredit(){
		if(IS_AJAX && IS_POST){
			$addressid = $_POST['oldaddressid'];
			$sql = "select * from receive_addr where id = '{$addressid}'";
			$res = M()->query($sql);
			echo json_encode($res);
		}else{
			$this->error('非法访问!');
		}
	}

	//异步地址修改的保存 
	public function editsave(){
		if(IS_AJAX && IS_POST){
			$data = array();	//定义数组
			$data['uid']  = $_SESSION['uid'];

			//遍历post过来的数组 然后组成可以添加到数据库的格式
			foreach ($_POST['alldata'] as $key => $value) {
				$data[$key] = $value;
			}
			if($data['county'] == '请选择'){
				$data['county'] = ''; 	//如果某些选项的是区 就把默认的区改成 空字符串 ''
			}
			if($data['isdefault'] == 'true'){
				$data['isdefault'] = 1;
			}elseif($data['isdefault'] = 'false'){
				$data['isdefault'] = 0;
			}
			//得到老ID
			$oldaddridSql = "select id from receive_addr where isdefault = 1";
			$oldaddrid = M()->query($oldaddridSql);
			// 如果说有选中默认地址 那么就要更新之前默认地址的状态 更新成不是默认的地址
			if($data['isdefault'] == 1){
				$isdefaultSql = "update receive_addr set isdefault = 0 where isdefault = 1";
				
				if(M()->execute($isdefaultSql) === false){
					$this->error('通信错误!');
				}
			}
			if(M('receive_addr')->save($data) !== false){
				$returnMsg = array(
					'error'		=>  0,
					'addressid' =>  $data['id'],		//当前的地址的id
					'realname'	=> 	$data['realname'],
					'address'	=>  $data['province'].$data['city'].$data['county'].$data['detail_addr'],
					'phone'		=>	$data['phone'],
					'province_num'	=>	$data['province_num'],
					'city_num'		=>	$data['city_num'],
					'county_num'	=>	$data['county_num'],
					'isdefault'		=> 	$data['isdefault'],		//
					'oldaddrid'		=> 	$oldaddrid[0]['id'],	//得到老的默认选中地址的id
				);
				$this->ajaxReturn($returnMsg);
			}else{
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '发生错误',
				);
				$this->ajaxReturn($returnMsg);
			}
		}else{
			$this->error('非法访问');
		}
	}
}