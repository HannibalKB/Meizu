<?php
namespace Home\Controller;
use Think\Controller;
class TemplateController extends Controller {
	public function template(){
		layout(false);
		$this->display();
	}
}