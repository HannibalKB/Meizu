<?php
namespace Bbs\Controller;
use Think\Controller;
class IndexController extends Controller {
	// BBS首页
    public function index(){
        $this->display();
    }
}