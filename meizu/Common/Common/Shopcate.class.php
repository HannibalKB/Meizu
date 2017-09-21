<?php
namespace Common\Common;
/**
* 无限极分类
*/
class Shopcate{
	// 传入一个父id 得到对应的子类
	public $tempRes = array();
	public function GetSonCate($res,$fid = 0,$num = 0){
		$str = '--';
		$num++;
		$deep = '';
		foreach ($res as $key => $value) {
			if($value['pid'] == $fid){
				if( $num - 1 == 0 ){
					$deep = '无上级分类';
				}else{
					$deep = ($num - 1)."级分类";
				}
				$value['cname'] = str_repeat($str,$num - 1).$value['cname'].("&nbsp;&nbsp;[".$deep."]");
				$this->tempRes[] = $value;
				$this->GetSonCate($res,$value['cid'],$num);
			}
		}
		return $this->tempRes;
	}
}
?>