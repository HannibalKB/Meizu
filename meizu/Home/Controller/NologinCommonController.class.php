<?php
namespace Home\Controller;
use Think\Controller;
//不需要登录的控制器
class NologinCommonController extends Controller {
	public function _initialize(){
		$this->naviGoods();
	}

	public function naviGoods(){
		//得到导航的产品
		
		$res=M('shop_category')->where('pid = 0')->order('sort')->select();
		$navs = $res;

		foreach ($navs as $key => $value) {
			$sql = "select good_id,good_name,good_pic,good_marketprice,isnew from shop_goods where cate_id = '{$value['cid']}' and ispublish = 1 order by good_id desc limit 6";  
			$navs[$key]['goods'] = M()->query($sql);
			
		}
		$this->assign('naviGoods',$navs);
	}

}
?>