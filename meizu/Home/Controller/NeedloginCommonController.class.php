<?php
namespace Home\Controller;
use Think\Controller;
//不需要登录的控制器
class NeedloginCommonController extends Controller {
	public function _initialize(){
		if(empty($_SESSION['uid'])){
			$this->error('请先登录',U("home/login/index"));
		}
		$this->naviGoods();
	}

	public function naviGoods(){
		//得到导航的产品
		$sql = "select * from shop_category where pid = 0 order by sort ";
		$naviGoods = M()->query($sql);
		foreach ($naviGoods as $key => $value) {
			$sql = "select good_id,good_name,good_pic,good_marketprice,isnew from shop_goods where cate_id = '{$value['cid']}' and ispublish = 1 order by good_id desc limit 6";  
			$naviGoods[$key]['goods'] = M()->query($sql);
			
		}
		$this->assign('naviGoods',$naviGoods);
	}

}
?>