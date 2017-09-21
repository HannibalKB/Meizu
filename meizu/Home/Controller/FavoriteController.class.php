<?php
namespace Home\Controller;
use Think\Controller;
class FavoriteController extends NologinCommonController {

	//我的收藏
	public function index(){

		header("Content-type: text/html; charset=utf-8"); 

		layout('indexlayout');

		$sql="select collect_id from user where uid={$_SESSION['uid']}";

		$res=M()->query($sql);

		$collect_id=$res[0]['collect_id'];
	//判断是否有收藏
		if(isset($collect_id)){
			$arr=explode(',',$collect_id);
			
			echo array_pop($arr). "\n";              
			
			foreach ($arr as $k => $v) {
				$str[]=$k;

			}
			
			foreach ($arr as $k => $v) {
				$sql="select * from shop_goods where good_id=".$v;
				$res=M()->query($sql);
				if($res){
					$arr[]=$res[0];
					
				}else{
					$_SESSION['nolike']='nolike';
				}

			}
		//分割数组，循环产出
			foreach ($arr as $k => $v) {
				foreach ($str as $key => $value) {
					unset($arr[$key]);

				}
			}
			$this->assign('res',$arr);
		}

		

		$this->display();
		
	}
}