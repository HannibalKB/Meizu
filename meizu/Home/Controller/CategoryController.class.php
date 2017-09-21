<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends NologinCommonController {
	public function index(){
		layout('indexlayout');
		$cateid = $_GET['cateid'];
		if($cateid == '' || is_null($cateid) || empty($cateid)){
			$sql = "select * from shop_goods where  ispublish = 1";
			$catename = "全部商品";
		}else{
			$sql = "select * from shop_goods where cate_id = {$cateid} and ispublish = 1";
			$catename = M()->query("select cname from shop_category where cid = {$cateid}")[0]['cname'];
		}
		$res = M()->query($sql);
		$this->assign('catename',$catename);
		$this->assign('res',$res);
		$this->display();
	}
}