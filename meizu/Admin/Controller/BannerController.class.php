<?php
namespace Admin\Controller;
use Think\Controller;
//Banner管理
class BannerController extends CommonController {
	//banner 列表
	public function index(){
		$sql = "select * from banner order by banner_id desc";
		$res = M()->query($sql);
		$count = count($res);
		$this->assign('count',$count);		
		$this->assign('res',$res);
		$this->display();
	}

	//添加banner
	public function banneradd(){
		if(IS_POST){
			$data['good_id'] = $_POST['good_id'];
			$data['img_url'] = $_POST['img_url'];
			$data['status'] = $_POST['status'];
			if(M('banner')->add($data)){
				$this->success('添加banner成功',U('admin/banner/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();
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
                $upload->savePath  =     'banner/'; // 设置附件上传（子）目录
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

    //不显示banner
    public function bannerdown(){
        if(IS_AJAX && IS_POST){
            $bannerid = $_POST['bannerid'];
            $sql = "update banner set status = 0 where banner_id = '{$bannerid}'";
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

    //显示bannerss
    public function bannerup(){
        if(IS_AJAX && IS_POST){
            $bannerid = $_POST['bannerid'];
            $sql = "update banner set status = 1 where banner_id = '{$bannerid}'";
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

    //异步删除banner
    public function delbanner(){
    	if(IS_AJAX && IS_POST){
            $bannerid = $_POST['bannerid'];
            $sql = "delete from banner  where banner_id = '{$bannerid}'";
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

    //编辑banner
    public function editbanner(){
    	if(IS_GET){
    		$sql = "select * from banner where banner_id = '{$_GET['banner_id']}'";
    		$res = M()->query($sql);
    		$this->assign('res',$res);
    		$this->display();
    	}else{
    		$data['banner_id'] = addslashes($_POST['banner_id']);
    		$data['good_id'] = addslashes($_POST['good_id']);
    		$data['status'] = $_POST['status'];
    		$data['img_url'] = addslashes($_POST['img_url']);
    		if(M('banner')->save($data) !== false){
    			$this->success('修改banner成功',U('admin/banner/index'));
    		}else{
    			$this->error('修改失败');
    		}
    	}
    }
}