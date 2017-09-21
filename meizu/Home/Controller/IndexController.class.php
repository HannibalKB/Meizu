<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends NologinCommonController {
	// Store首页
	public function index(){

		layout('indexlayout');
		$cateRes = $this->cateRes();				//获取分类
		$bannerRes = $this->bannerRes();			//轮播
		$newGoodsRes = $this->newGoodRes();			//获得新品推荐
		$mainGoodRes = $this->mainGoodRes();   		//主体内容

		$this->assign('cateRes',$cateRes);			//分类分类
		$this->assign('bannerRes',$bannerRes);  	
		$this->assign('newGoodsRes',$newGoodsRes);	
		$this->assign('mainGoodRes',$mainGoodRes);  
		$this->display();
	
	}

	//获得商品分类
	public function cateRes(){

		

		$res=M('shop_category')->where('pid = 0')->order('sort')->limit('7')->select();
		

		foreach ($res as $key => $value) {

			$sql = "select good_id,good_name,good_pic from shop_goods where cate_id = '{$value['cid']}' and ispublish = 1 order by good_id desc limit 10";

			$res[$key]['goods'] = M()->query($sql);
		
		}

		return $res;
	}


	//轮播图
	public function bannerRes(){
		
		$res=M('banner')->where('status = 1')->limit('5')->select();
		
		return $res;
	}


	

	//新品推荐
	public function newGoodRes(){

		
		$res=M('shop_goods')->where('ispublish = 1 and isnew = 1')->order('good_id desc')->limit('15')->select();

		return  $res;
	}

	//获得主页主体的产品列表
	public function mainGoodRes(){

		
		$res=M('shop_category')->where('pid = 0')->order('sort')->select();
		
		foreach ($res as $key => $value) {
			if($value['cname'] == '路由器' || $value['cname'] == '移动电源'){
				unset($res[$key]);
			}else{
				$sql = "select good_id,good_name,good_pic,good_marketprice,isnew from shop_goods where cate_id = '{$value['cid']}' and ispublish = 1 order by good_id desc limit 10";  
				$r=M()->query($sql);

				$res[$key]['goods'] = $r;
			}
			
		}
		$temp = array();
		foreach ($res as $key => $value) {
			$temp[] = $value;
		}
		return $temp;
	}




	



}