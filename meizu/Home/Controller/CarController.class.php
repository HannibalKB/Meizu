<?php
namespace Home\Controller;
use Think\Controller;
class CarController extends NeedloginCommonController {
	//用户购物车首页
	public function index(){
		if(!empty($_SESSION['uid'])){
			layout('shoplayout');
			$sql = "select * from user_cars t1 left join shop_goods t2 on t1.goodid = t2.good_id left join shop_goods_list t3 on t1.gdlistid = t3.good_listid where t1.uid = '{$_SESSION['uid']}'";
			$res = M()->query($sql);

			
			//把对应的sku的数字组合弄成文字
			
			foreach ($res as $key => $value) {
				$value['attr_combine'] = explode(',',$value['attr_combine']);
				foreach ($value['attr_combine'] as $k => $v) {
					$sql = "select good_attr_value from shop_goods_attr where good_attr_id='{$v}'";
					$value['attr_combine'][$k] = M()->query($sql)[0]['good_attr_value'];
				}
				$res[$key]['attr_combine'] = implode(',', $value['attr_combine']); 
				//把逗号替换成空格
				$res[$key]['attr_combine'] = str_replace(',', " ",$res[$key]['attr_combine']);
			}
			
			$this->assign('res',$res);
			$this->display();
		}else{
			$this->error('请先登录');
		}
	}

	//删除购物车
	public function delcar(){
		if(IS_AJAX && IS_POST){
			$sql = "delete from user_cars where carid = '{$_POST['carid']}'";
			if(M()->execute($sql)){
				$returnMsg = array(
					'error' => 0,
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '删除出错',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//购物车的自减一
	public function mincar(){
		if(IS_POST && IS_AJAX){
			$sql = "update user_cars set good_num = good_num - 1 where carid = '{$_POST['carid']}'";
			if(M()->execute($sql)){
				$returnMsg = array(
					'error' => 0,
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '更新失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//购物车自增1
	public function pluscar(){
		if(IS_POST && IS_AJAX){
			$sql = "update user_cars set good_num = good_num + 1 where carid = '{$_POST['carid']}'";
			if(M()->execute($sql)){
				$returnMsg = array(
					'error' => 0,
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '更新失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//异步动态改变文本框的值
	public function changenum(){
		if($_POST){
			$sql = "update user_cars set good_num = '{$_POST['num']}' where carid = '{$_POST['carid']}'";
			if(M()->execute($sql) !== false){
				$returnMsg = array(
					'error' => 0,
				);
			}else{
				$returnMsg = array(
					'error' => 1,
					'msg'	=> '更新失败',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}


	//用户加入购物车 判断数据库是否有这条sku 有的话+ 1 没有插入
	public function entercar(){
		if($_POST){
			$good_num = $_POST['good_num'];
			$good_id = $_POST['good_id'];		//
			$attr_combine = rtrim($_POST['combine'],",");   //
			
			$skusql = "select * from shop_goods_list where attr_combine = '{$attr_combine}'";
			$skures = M()->query($skusql);

			
			$usercarsql = "select * from user_cars where gdlistid = '{$skures[0]['good_listid']}' and uid = {$_SESSION['uid']}";
			$usercarres = M()->query($usercarsql);

			//如果有结果就要比对库存 再做是否可以+1
			if($usercarres){
				//如果库存足够多	
				if($skures[0]['good_stock'] >= $usercarres[0]['good_num'] + $good_num){
					$sql = "update user_cars set good_num = good_num + {$good_num} where gdlistid = '{$skures[0]['good_listid']}' and uid = '{$_SESSION['uid']}'";
					if(M()->execute($sql) !== false){
						$returnMsg = array(
							'error' => 0,
							'msg'	=> '商品原有现在加入成功',
						);
					}else{
						$returnMsg = array(
							'error' => 1,
							'msg'	=> '加入出错了',
						);
					}
				}else{
				//否则就是库存不足了.
					$returnMsg = array(
						'error' => 1,
						'msg'	=> '库存不多了,增加失败了。',
					);
				}
			
			}else{
				$data['uid'] = $_SESSION['uid'];
				$data['goodid'] = $good_id;
				$data['gdlistid'] = $skures[0]['good_listid'];
				$data['good_num'] = $good_num;
				if(M('user_cars')->add($data)){
					$returnMsg = array(
						'error' => 0,
						'msg'	=> '重新添加商品购物车成功',
					);
				}else{
					$returnMsg = array(
						'error' => 1,
						'msg'	=> '添加失败',
					);
				}
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//收藏商品
	public function collect(){

		$data['collect_id']=I('post.collect_id').',';

		$data['uid']=$_SESSION['uid'];

		$res1=M('user')->where('uid='.$data['uid'])->select();

		// var_dump($res1[0]['collect_id']);

		// var_dump($data['collect_id']);
		
// 判断传过来的good_id是否在用户收藏中,在的话取消收藏，不在收藏成功
		$result = checkStr($data['collect_id'],$res1[0]['collect_id']);

		if($result){


			$str=str_replace($data['collect_id'],'',$res1[0]['collect_id']);

			$sql="update user set collect_id='{$str}' where uid={$_SESSION['uid']}";

			$res=M()->execute($sql);

			if($res){
				$returnMsg = array(
						'error' => 0,
						'msg'	=> '取消收藏成功！',
					);
			}else{
				$returnMsg = array(
						'error' => 1,
						'msg'	=> '取消收藏失败，请检查网络！',
					);
			}
			$this->ajaxReturn($returnMsg);
			
		}else{



			$sql="update user set collect_id='{$res1[0]['collect_id']}"."{$data['collect_id']}'" . "where uid=".$_SESSION['uid'];

			$res=M()->execute($sql);

			if($res){
				$returnMsg = array(
							'error' => 0,
							'msg'	=> '收藏成功！',
						);
			}else{
				$returnMsg = array(
							'error' => 0,
							'msg'	=> '收藏失败！',
						);
			}
		}

		$this->ajaxReturn($returnMsg);
	}
	
}