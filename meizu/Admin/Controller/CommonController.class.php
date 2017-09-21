<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	//初始化
    public function _initialize(){
        if(empty($_SESSION['adminid'])){
            $this->error('请先登录',U("admin/login/login"));
        }
		// 规则是先将当前的模块名 控制器名 方法名全部都转成小写 然后拼接 对应匹配配置也全部用小写
		$rule_url = strtolower(MODULE_NAME).'/'.strtolower(CONTROLLER_NAME).'/'.strtolower(ACTION_NAME);
        if( $_SESSION['adminname'] != 'admin' ){
            $auth = new \Think\Auth();          //实例化这个权限认证类
             //如果说检测没有通过
            if(!$auth->check($rule_url,$_SESSION['adminid'])){
                 // $this->error('您没有权限访问，不好意思哈',U('admin/login/login'));
                echo '您没有权限访问';
                exit;
            }
        }
    }

	// 记录管理员的操作日志
	// 参数 管理员id 操作的内容
    public function record_operation($admin_id,$operation_name){
    	$operation_time = time();
    	$operation_ip = $_SERVER["REMOTE_ADDR"];
        // $operation_ip = get_client_ip();
    	$sql = "insert into operation_logs(admin_id,operation_name,operation_time,operation_ip) values('{$admin_id}','{$operation_name}','{$operation_time}','{$operation_ip}')";
        M()->execute($sql);
    }

}
?>