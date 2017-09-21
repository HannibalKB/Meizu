<?php
namespace Admin\Controller;
use Think\Controller;
//商品管理
class ShopController extends CommonController {

	//产品列表
	public function index(){

		
        if($_GET['cid'] == 0){
            $goodSql = "select * from shop_goods t1 left join shop_category t2 on t1.cate_id = t2.cid order by  good_id desc";
        }else{
            $goodSql = "select * from shop_goods t1 left join shop_category t2 on t1.cate_id = t2.cid where t1.cate_id = '{$_GET['cid']}' order by  good_id desc";
        }
        $count = count(M()->query($goodSql));
        $Page       = new \Think\Page($count,5);// 实例化分页类 
        $show       = $Page->show();// 分页显示输出
        $goodSql = $goodSql." limit {$Page->firstRow},{$Page->listRows}";
        
		$goodRes = M()->query($goodSql);

        foreach ($goodRes as $key => $value) {
            $sql = "select count(good_listid) count from shop_goods_list where good_id='{$value['good_id']}'";
            $goodRes[$key]['count'] = M()->query($sql)[0]['count'];
        }

        $ShopCateSql = "select * from shop_category t1 left join shop_type t2 on t1.type_id = t2.type_id order by t1.sort asc";
        $ShopCateres = M()->query($ShopCateSql); 
        $this->assign('ShopCateres',$ShopCateres);
		$this->assign('goodRes',$goodRes);
        $this->assign('page',$show);
        $this->assign('count',$count);
		$this->display();
	}

	//动态添加文本框
	public function index2(){
		$this->display();
	}

	//发布商品
	public function PublishShop(){
		//首先获得顶级分类
		if(IS_POST){
			//查询分类的名称渲染到模板
			$cateSql = "select * from shop_category where cid = {$_POST['cateid']}";
			$cateRes = M()->query($cateSql);
			// $typeSql = "select * from shop_category t1 left join shop_type t2 on t1.type_id = t2.type_id where t1.cid = {$_POST['cateid']}";
			$typeSql = "select * from shop_type where type_id = {$cateRes[0]['type_id']}";
			$typeRes = M()->query($typeSql);
			
			//得到规则参数 
			$shopnormSql = "select * from shop_type_attr where type_id = {$cateRes[0]['type_id']} and attr_name = '规格参数'";
			$shopnormRes = M()->query($shopnormSql);
            //把规则参数转成数组 给页面使用。  
			$shopnormArr = explode(',', $shopnormRes[0]['attr_value']);
		
			$this->assign('shopnormArr',$shopnormArr);
			$this->assign('typeRes',$typeRes);
			$this->assign('cateRes',$cateRes);
			$this->display('shop/catenext');
		}else{
            
			$cateSql = "select * from shop_category where pid = 0";
			$cateres = M()->query($cateSql);
			$this->assign('cateres',$cateres);
			$this->display();
		}
	}

	//发布商品保存
	public function PublishSave(){
		if(IS_POST){
			$data['type_id'] = $_POST['type_id'];
			$data['cate_id'] = $_POST['cate_id'];
			$data['good_name'] = $_POST['good_name'];
            $data['good_marketprice'] = $_POST['good_marketprice'];
			$data['good_number'] = empty($_POST['good_number']) ? '2016' : $_POST['good_number'];
			$data['good_name'] = $_POST['good_name'];
			
			$data['good_desc'] = $_POST['good_desc'];
			$data['create_time'] = empty($_POST['create_time']) ? time() : strtotime($_POST['create_time']);
			$data['canshu']  = implode(',', $_POST['canshu']); //数组拼接成字符串。
			$data['ispublish'] = $_POST['ispublish'];
			$data['good_detail'] = $_POST['editorValue'];
            $data['isnew'] = $_POST['isnew'];
            
		 	if($_FILES['good_pic']['name'] != ''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =     'product_imgs/'; // 设置附件上传（子）目录
                // 上传文件 
                $info   =   $upload->upload();

                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    foreach ($info as $key => $value) {
                        $good_pic = 'Uploads/'.$value['savepath'].$value['savename'];
                    }
                    $data['good_pic'] = $good_pic;
                }
            }
            if($good_id = M('shop_goods')->add($data)){
            	$this->success('添加成功,请添加sku',U('admin/shop/shopsku',array('good_id'=>$good_id,'type_id'=>$data['type_id'])));
            }else{
            	$this->error('添加失败');
            }
		}else{
			$this->error('非法访问');
		}
		
	}

	//异步查出顶级的子类
	public function GetTheSonCate(){
		if(IS_AJAX && IS_POST){
			$cateid = $_POST['cateid'];
			$sql = "select * from shop_category where pid = '{$cateid}'";
			$soncate = M()->query($sql);
			if(!empty($soncate)){	
				$str.= '<h4>选择二级品类</h4>';
				$str.= '<ul>';
				foreach ($soncate as $key => $value) {
					$str.= '<li class="clearfix" cateid='.$value['cid'].'><p>'.$value['cname'].'</p> <span>></span></li>';
				}
				$str.= '</ul>';
				$returnMsg = array(
					'error'	=> 0,
					'msg'	=> $soncate,
					'str'	=> $str,
				);
			}else{
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '没有数据',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	//异步获得一级子类下的子类
	public function GetTheSecondSonCate(){
		if(IS_AJAX && IS_POST){
			$cateid = $_POST['cateid'];
			$sql = "select * from shop_category where pid = '{$cateid}'";
			$soncate = M()->query($sql);
			if(!empty($soncate)){	
				$str.= '<h4>选择三级品类</h4>';
				$str.= '<ul>';
				foreach ($soncate as $key => $value) {
					$str.= '<li class="clearfix" cateid='.$value['cid'].'><p>'.$value['cname'].'</p> <span>></span></li>';
				}
				$str.= '</ul>';
				$returnMsg = array(
					'error'	=> 0,
					'msg'	=> $soncate,
					'str'	=> $str,
				);
			}else{
				$returnMsg = array(
					'error'	=> 1,
					'msg'	=> '没有数据',
				);
			}
			$this->ajaxReturn($returnMsg);
		}else{
			$this->error('非法访问');
		}
	}

	public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }

    //查看详情
    public function shopDetail(){
    	if(IS_GET){
    		//商品信息参数
    		$goodSql = "select * from shop_goods t1 left join shop_category t2 on t1.cate_id = t2.cid left join shop_type t3 on t2.type_id = t3.type_id where good_id = '{$_GET['good_id']}'";
    		$good_res = M()->query($goodSql);

    		//规则对应的参数字段
			$shopnormSql = "select * from shop_type_attr where type_id = {$good_res[0]['type_id']} and attr_name = '规格参数'";
			$shopnormRes = M()->query($shopnormSql);
			$shopnormArr = explode(',', $shopnormRes[0]['attr_value']);

			//原本老数据规则参数的值
			$normsTmpArr = [];
			$oldDataNormsArr = explode(',', $good_res[0]['canshu']);
			foreach ($shopnormArr as $key => $value) {
				$normsTmpArr[$key]['norms_name'] = $shopnormArr[$key];
				$normsTmpArr[$key]['norms_value'] = $oldDataNormsArr[$key];
			}
			
			$this->assign('good_res',$good_res);

			$this->assign('normsTmpArr',$normsTmpArr);
    		$this->display();
    	}else{
    		$this->error('非法访问');
    	}
    }

    //管理sku
    public function shopsku(){
        //如果是点击sku的。
    	if(IS_GET){
    		$goodid = $_GET['good_id'];
    		$typeid = $_GET['type_id'];
    		$shoptypeSql = "select * from shop_type_attr where type_id = {$typeid} and isbeselected = 1";
    		$shoptypeRes = M()->query($shoptypeSql);
    		$resArr = array();	//组一个新数组给页面循环输出下套子循环输出
    		foreach ($shoptypeRes as $key => $value) {
    			$resArr[$key]['shop_type_attr_id']  = $value['attr_id'];
    			$resArr[$key]['attr_name'] = $value['attr_name'];
    			$resArr[$key]['attr_value'] = explode(',', $value['attr_value']);
    		}
    		$this->assign('resArr',$resArr);
    		$this->display();
        //保存sku的。
    	}elseif(IS_POST){

    		$postData = $_POST;
    		$good_id = $_POST['good_id'];
    		//临时的数组 用来存放插入的数据 后期来做sku用得上
    		$tempArr = array();

    		//循环post过来的属性和对应的值 先插入到商品属性表 再做商品sku表。
    		foreach ($_POST['shop_type_attr_id'] as $key => $value) {
    			foreach($value as $k => $v){
                   
    				$data['good_attr_value'] = $v;
    				$data['shop_type_attr_id'] = $key;
    				$data['good_id'] = $good_id;
    				$insertid = M('shop_goods_attr')->add($data);
                    //用一个临时数组保存起来
    				$tempArr[$insertid] = $data['good_attr_value'];  //商品属性值 键对应值
    			}

    		}

    		$sku = $_POST['shopsku'];
    		// var_dump($tempArr); //上面插入数据的sku
    		//循环post过来的sku 传地改变
    		foreach ($sku as $sku_key => &$sku_value) {
    			// 把sku拆成数组
    			$skuarr = explode(',', $sku_value);
                
    			foreach ($skuarr as $skuarr_k => &$skuarr_v) {
    				foreach ($tempArr as $tempArr_k => $tempArr_v) {
    					if($skuarr_v == $tempArr_v ){
    						$skuarr_v = $tempArr_k;
    					}
    				}
    			}
                unset($skuarr_v);      //解决以后的bug的问题
    			$sku_value = implode(',', $skuarr);     //组成的sku就是已经合并好了的。
    		}
            
            unset($sku_value);           //解决以后的bug的问题
            
    		//得到post过来的价格数组的值
    		$good_priceArr = $_POST['good_price'];
    		//得到post过来的库存数组的值
    		$good_stockArr = $_POST['good_stock'];
    		//$sku  是最终插入到商品属性列表的值
    		$good_listArr = array();
    		foreach ($sku as $key => $value) {
    			$good_listArr[$key]['attr_combine'] = $sku[$key];
    			$good_listArr[$key]['good_price'] = $good_priceArr[$key];
    			$good_listArr[$key]['good_stock'] = $good_stockArr[$key];
    			$good_listArr[$key]['good_id'] = $good_id;
    		}
    		
    		foreach ($good_listArr as $key => $value) {
    			if(!M('shop_goods_list')->add($value)){
    				$this->error('插入出错。!!!');
    			}
    		}
    		$this->success('插入成功',U('admin/shop/index'));
    	}
    }

    //商品sku列表
    public function shopSkuList(){
    	if(IS_GET){
    		// var_dump($_GET);
    		$good_id = $_GET['good_id'];
    		$type_id = $_GET['type_id'];
    		$sql = "select t1.*,t2.ispublish,t2.good_name,t2.create_time from shop_goods_list t1 left join shop_goods t2 on t1.good_id = t2.good_id where t1.good_id = {$good_id}";
    		$res = M()->query($sql);
    		foreach ($res as $key => &$value) {
    			$temp = explode(',', $value['attr_combine']);
    			foreach ($temp as $k => &$v) {

	    			$sql = "select  good_attr_value from  shop_goods_attr where good_attr_id = {$v}";

	    			$tempArr = M()->query($sql)[0]['good_attr_value'];

	    			$res[$key]['sku_detail'].= $tempArr.',';
	    		}
	    		// $value['attr_combine'] = implode(',', $temp);
	    		$res[$key]['sku_detail'] = rtrim($res[$key]['sku_detail'],',');
    		}
    		$this->assign('type_id',$type_id);
    		$this->assign('res',$res);
    		$this->display();
    	}
    }

    //多图片上传
    public function shopSkuImg(){
    	//如果是post 说明是要保存到数据库的
    	if($_POST){

    		$good_id = $_POST['good_id'];
    		$type_id = $_POST['type_id'];
    		$good_listid = $_POST['listid'];
    		$sameimgid = $_POST['sameimgid'];
    		$good_imgs = rtrim($_SESSION['imgs'],',');
    		// 如果有选择要添加同样图片的id
    		if(isset($sameimgid) || !empty($sameimgid) || is_array($sameimgid) ){
    			$sql = "update shop_goods_list set good_imgs = '{$good_imgs}' where good_listid = {$good_listid}";
	    		if(M()->execute($sql) !== false){
	    			foreach ($sameimgid as $key => $value) {
	    				$sql = "update shop_goods_list set good_imgs = '{$good_imgs}' where good_listid = {$value}";
	    				if(M()->execute($sql) === false){
	    					$this->error('添加失败');
	    				}
	    			}
	    			$this->success('添加图片成功',U('admin/shop/shopskulist',array('good_id'=>$good_id,'type_id'=>$type_id)));
	    		}else{
	    			$this->error('添加失败');
	    		}
    		}else{

	    		$sql = "update shop_goods_list set good_imgs = '{$good_imgs}' where good_listid = {$good_listid}";
	    		if(M()->execute($sql)){
	    			$this->success('添加图片成功',U('admin/shop/shopskulist',array('good_id'=>$good_id,'type_id'=>$type_id)));
	    		}else{
	    			$this->error('添加失败');
	    		}
    		}
    		//如果是get 说明是要添加商品的
    	}elseif($_GET){
    		unset($_SESSION['imgs']);       //每次加载,把拼接图片路径的session清掉
    		$good_listid = $_GET['listid'];
    		$good_id = $_GET['good_id'];
    		$type_id = $_GET['type_id'];

    		//获取到同一个good_id 的sku 然后赋值给页面让页面勾选添加相同颜色的图片
    		$goodSkuSql = "select t1.*,t2.ispublish,t2.good_name,t2.create_time from shop_goods_list t1 left join shop_goods t2 on t1.good_id = t2.good_id where t1.good_id = {$good_id} and t1.good_listid != {$good_listid}";
    		$goodSkuRes = M()->query($goodSkuSql);
    		foreach ($goodSkuRes as $key => &$value) {
    			$temp = explode(',', $value['attr_combine']);
    			foreach ($temp as $k => &$v) {

	    			$sql = "select  good_attr_value from  shop_goods_attr where good_attr_id = {$v}";

	    			$tempArr = M()->query($sql)[0]['good_attr_value'];

	    			$goodSkuRes[$key]['sku_detail'].= $tempArr.',';
	    		}
	    		// $value['attr_combine'] = implode(',', $temp);
	    		$goodSkuRes[$key]['sku_detail'] = rtrim($goodSkuRes[$key]['sku_detail'],',');
    		}


    		$sql = "select t1.*,t2.good_name,t2.create_time from shop_goods_list t1 left join shop_goods t2 on t1.good_id = t2.good_id where t1.good_listid = {$good_listid}";

    		$res = M()->query($sql);

    		foreach ($res as $key => &$value) {
    			$temp = explode(',', $value['attr_combine']);
    			foreach ($temp as $k => &$v) {

	    			$sql = "select  good_attr_value from  shop_goods_attr where good_attr_id = {$v}";

	    			$tempArr = M()->query($sql)[0]['good_attr_value'];

	    			$res[$key]['sku_detail'].= $tempArr.',';
	    		}
	    		// $value['attr_combine'] = implode(',', $temp);
	    		$res[$key]['sku_detail'] = rtrim($res[$key]['sku_detail'],',');
    		}
    		$res[0]['good_id'] = $_GET['good_id'];
    		$res[0]['type_id'] = $_GET['type_id'];
    		$this->assign('res',$res);
    		$this->assign('goodSkuRes',$goodSkuRes);
    		$this->display();
    	}
    	
    }
    
    //多图上传的空间要执行的方法
    public function mutipleImgUpload(){
        //定义一个session变量来存东西
    	$_SESSION['imgs'];
    	if(IS_POST){
    		$typeArr = array("jpg", "png", "gif");//允许上传文件格式

			$path = "./Uploads/product_imgs/".date("Y-m-d")."/";//上传路径
			//如果上传的不是路径
			if(!is_dir($path)){
				mkdir($path);
			}
			$name = $_FILES['file']['name']; 
		    $size = $_FILES['file']['size']; 
		    $name_tmp = $_FILES['file']['tmp_name']; 
		    if (empty($name)) { 
		        echo json_encode(array("error"=>"您还未选择图片")); 
		        exit; 
		    } 
		    $type = strtolower(substr(strrchr($name, '.'), 1)); //获取文件类型 
		    if (!in_array($type, $typeArr)) { 
		        echo json_encode(array("error"=>"清上传jpg,png或gif类型的图片！")); 
		        exit; 
		    } 
		    if ($size > (500 * 1024)) { 
		        echo json_encode(array("error"=>"图片大小已超过500KB！")); 
		        exit; 
		    } 
		    $pic_name = time() . rand(10000, 99999) . "." . $type;//图片名称 
		    $pic_url = $path . $pic_name;//上传后图片路径+名称 
		    if (move_uploaded_file($name_tmp, $resImg = $pic_url)) { //临时文件转移到目标文件夹
		    	$_SESSION['imgs']  .= $resImg.',';
		        echo json_encode(array("error"=>"0","pic"=>$pic_url,"name"=>$pic_name)); 
		    } else { 
		        echo json_encode(array("error"=>"上传有误，清检查服务器配置！")); 
		    } 
    	}
    }

    //显示Sku的图片
    public function showimgs(){
    	if(IS_GET){
    		$good_listid = $_GET['good_listid'];
    		$imgSql = "select good_imgs from shop_goods_list where good_listid = '{$good_listid}'";
    		$imgRes = M()->query($imgSql)[0]['good_imgs'];
    		$imgRes = explode(',', $imgRes);
    		$this->assign('imgRes',$imgRes);
    		$this->display();
    	}else{
    		$this->error('非法访问');
    	}
    }

    //删除sku的多图
    public function deleteSkuImg(){
    	if(IS_GET){
    		$good_listid = $_GET['listid'];
    		$good_id = $_GET['good_id'];
    		$type_id = $_GET['type_id'];
    		$sql = "update shop_goods_list set good_imgs = '' where good_listid = '{$good_listid}'";
    		if(M()->execute($sql) !== false){
    			$this->success('删除图片成功',U('admin/shop/shopskulist',array('good_id'=>$good_id,'type_id'=>$type_id)));
    		}else{
    			$this->error('删除失败');
    		}
    	}else{
    		$this->error('非法访问');
    	}
    }

    //编辑商品sku
    public function editsku(){
    	if(IS_GET){
    		$good_id = $_GET['good_id'];
    		$type_id = $_GET['type_id'];
    		$good_listid = $_GET['listid'];
    		$sql = "select t1.*,t2.ispublish,t2.good_name,t2.create_time,t1.good_price as sku_price from shop_goods_list t1 left join shop_goods t2 on t1.good_id = t2.good_id where t1.good_listid = {$good_listid}";
    		$res = M()->query($sql);
    		foreach ($res as $key => &$value) {
    			$temp = explode(',', $value['attr_combine']);
    			foreach ($temp as $k => &$v) {
	    			$sql = "select  good_attr_value from  shop_goods_attr where good_attr_id = {$v}";
	    			$tempArr = M()->query($sql)[0]['good_attr_value'];
	    			$res[$key]['sku_detail'].= $tempArr.',';
	    		}
	    		// $value['attr_combine'] = implode(',', $temp);
	    		$res[$key]['sku_detail'] = rtrim($res[$key]['sku_detail'],',');
    		}
    		$this->assign('res',$res);
    		$this->display();
    	}elseif(IS_POST){
    		$good_id = $_POST['good_id'];
    		$type_id = $_GET['type_id'];
    		$data['good_price'] = $_POST['good_price'];
    		$data['good_stock'] = $_POST['good_stock'];
    		$data['good_listid'] = $_POST['listid'];
    		if(M('shop_goods_list')->save($data) !== false){
    			$this->success('修改成功',U('admin/shop/shopskulist',array('good_id'=>$good_id,'type_id'=>$type_id)));
    		}else{
    			$this->error('修改失败');
    		}
    	}
    }

    //异步删除sku
    public function deletesku(){
        if(IS_AJAX && IS_POST){
            $good_listid = $_POST['good_listid'];
            $sql = "delete from shop_goods_list where good_listid = '{$good_listid}'";
            if(M()->execute($sql)){
                $returnMsg = array(
                    'error' => 0,
                    'msg'   => 'ok',
                );
            }else{
                 $returnMsg = array(
                    'error' => 1,
                    'msg'   => 'no',
                );
            }
            $this->ajaxReturn($returnMsg);
        }else{
            $this->error('非法访问');
        }
    }

    //异步删除商品 删除了商品 还要删除sku对应的商品
    public function deleteshop(){
        if(IS_AJAX && IS_POST){
            $good_id = $_POST['good_id'];
            $listsql = "delete from shop_goods_list where good_id = '{$good_id}'";
            $good_sql = "delete from shop_goods where good_id = '{$good_id}'";
            $good_attr_sql = "delete from shop_goods_attr where good_id = '{$good_id}'";
            if(M()->execute($listsql) && M()->execute($good_sql) && M()->execute($good_attr_sql)){
                $returnMsg = array(
                    'error' => 0,
                    'msg'   => 'ok',
                );
            }else{
                 $returnMsg = array(
                    'error' => 1,
                    'msg'   => 'no',
                );
            }
            $this->ajaxReturn($returnMsg);
        }else{
            $this->error('非法访问');
        }
    }

    //商品编辑
    public function shopedit(){
        if(IS_GET){
            //商品信息参数
            $goodSql = "select * from shop_goods t1 left join shop_category t2 on t1.cate_id = t2.cid left join shop_type t3 on t2.type_id = t3.type_id where good_id = '{$_GET['good_id']}'";
            $good_res = M()->query($goodSql);

            //规则对应的参数字段
            $shopnormSql = "select * from shop_type_attr where type_id = {$good_res[0]['type_id']} and attr_name = '规格参数'";
            $shopnormRes = M()->query($shopnormSql);
            $shopnormArr = explode(',', $shopnormRes[0]['attr_value']);

            //原本老数据规则参数的值
            $normsTmpArr = [];
            $oldDataNormsArr = explode(',', $good_res[0]['canshu']);
            foreach ($shopnormArr as $key => $value) {
                $normsTmpArr[$key]['norms_name'] = $shopnormArr[$key];
                $normsTmpArr[$key]['norms_value'] = $oldDataNormsArr[$key];
            }
            // var_dump($good_res);
            $this->assign('good_res',$good_res);
            $this->assign('normsTmpArr',$normsTmpArr);
            $this->display();
        }elseif($_POST){
            $data['good_id'] = $_POST['good_id'];
            $data['type_id'] = $_POST['type_id'];
            $data['cate_id'] = $_POST['cate_id'];
            $data['good_name'] = $_POST['good_name'];
            $data['good_marketprice'] = $_POST['good_marketprice'];
            $data['good_number'] = empty($_POST['good_number']) ? '2016' : $_POST['good_number'];
            $data['good_name'] = $_POST['good_name'];
            // $data['good_unit'] = $_POST['good_unit'];
            $data['good_desc'] = $_POST['good_desc'];
            $data['create_time'] = empty($_POST['create_time']) ? time() : strtotime($_POST['create_time']);
            $data['canshu']  = implode(',', $_POST['canshu']); //数组拼接成字符串。
            $data['ispublish'] = $_POST['ispublish'];
            $data['good_detail'] = $_POST['editorValue'];
            $data['isnew'] = $_POST['isnew'];

            if($_FILES['good_pic']['name'] != ''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =     'product_imgs/'; // 设置附件上传（子）目录
                // 上传文件 
                $info   =   $upload->upload();

                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    foreach ($info as $key => $value) {
                        $good_pic = 'Uploads/'.$value['savepath'].$value['savename'];
                    }
                    $data['good_pic'] = $good_pic;
                }
            }

            if($good_id = M('shop_goods')->save($data) !== false ){
                $this->success('修改成功',U('admin/shop/index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->error('非法访问');
        }
    }

    //异步获取上传图片的地址
    public function remoteImgUrl(){
        if(IS_AJAX && IS_POST){
            if($_FILES['upfile']['name'] != ''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
                $upload->savePath  =     'product_imgs/'; // 设置附件上传（子）目录
                // 上传文件 
                $info   =   $upload->upload();

                if(!$info) {// 上传错误提示错误信息
                    $returnMsg = array(
                        'error' => 1,
                        'msg'   => $upload->getError(),
                    );
                }else{// 上传成功
                    foreach ($info as $key => $value) {
                        $good_pic = 'Uploads/'.$value['savepath'].$value['savename'];
                    }
                    $returnMsg = array(
                        'error' => 0,
                        'imgUrl'   => $good_pic,
                    );
                }
                
            }
            $this->ajaxReturn($returnMsg);
        }else{
            $this->error('非法访问');
        }
    }


    //商品停用
    public function shopdown(){
        if(IS_AJAX && IS_POST){
            $goodid = $_POST['shopid'];
            $sql = "update shop_goods set ispublish = 0 where good_id = '{$goodid}'";
            if(M()->execute($sql)){
                $returnMsg = array(
                    'error' => '0',
                    'msg'   => 'ok',
                );
            }else{
               $returnMsg = array(
                    'error' => '1',
                    'msg'   => 'no',
                );  
            }
            $this->ajaxReturn($returnMsg);
        }else{
            $this->error('非法访问');
        }
    }

    //商品启用
    public function shopup(){
        if(IS_AJAX && IS_POST){
             $goodid = $_POST['shopid'];
            $sql = "update shop_goods set ispublish = 1 where good_id = '{$goodid}'";
            if(M()->execute($sql)){
                $returnMsg = array(
                    'error' => '0',
                    'msg'   => 'ok',
                );
            }else{
               $returnMsg = array(
                    'error' => '1',
                    'msg'   => 'no',
                );  
            }
            $this->ajaxReturn($returnMsg);
        }else{
            $this->error('非法访问');
        }
    }
}
?>