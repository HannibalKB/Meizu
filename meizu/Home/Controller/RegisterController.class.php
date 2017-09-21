<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
       layout(false); 
       $this->display();
    }

    //检测用户名
    public function checkusername(){
    	
    	$sql = "select username from user where username = '{$_POST['username']}'";
    	if(M()->query($sql)){
    		$returnMsg = false;
    	}else{
    		$returnMsg = true;
    	}
    	echo json_encode($returnMsg);
    }
//检测邮箱
    public function checkemail(){
    	$sql = "select email  from user where email = '{$_POST['email']}'";
    	if(M()->query($sql)){
    		$returnMsg = false;
    	}else{
    		$returnMsg = true;
    	}
    	echo json_encode($returnMsg);
    }

    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->length = 4;
        $Verify->fontSize = 50;
        $Verify->entry();
    }
//检测验证码
    public function ckeckverify(){
        $Verify = new \Think\Verify();
        $Verify->reset = false; //将reset设置为false 解决只能验证一次的问题
        if($Verify->check($_POST['verifycode'])){
            $data = array(
                'error'      => 0,
                'returnMsg'  => '验证码正确',
            );
        }else{
            $data = array(
                'error'      => 1,
                'returnMsg'  => '验证码错误',
            );
        }
        $this->ajaxReturn($data);
    }

//邮箱检测
    public function checkmail()
    {
        if(IS_AJAX && IS_POST){
            $usermail = $_POST['useremails'];
            //随机得到四位的验证码
            $codenum = '';
            for ($i = 0; $i < 4 ; $i++) { 
                $codenum.= rand(0,9);
            }
            $_SESSION['codenum'] = $codenum;
            $str = "您在魅族注册的验证码的随机数字是: ".$codenum;

             //发送邮箱 qqmail() 公共的方法
            if(qqMail($usermail,$str)){
                $returnMsg = array(
                    'error' => 0,
                    'msg'   => "验证码已发往邮箱{$usermail},请前往查看并将验证码填写在输入框",
                );
            }else{
                 $returnMsg = array(
                    'error' => 1,
                    'msg'   => "不好意思,邮箱未能发送,请联系管理员或者稍后再试",
                );
            }       
            $this->ajaxReturn($returnMsg);
        }else{
            $this->error('非法访问');
        }
    }

    
    public function confirm(){

        var_dump($_GET);
    }
    

    //验证用户输入的验证码
    public function checkmailcode(){
        $useremailcode = $_POST['code'];
        if($useremailcode == $_SESSION['codenum']){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }

    //前端验证完成完成注册
    public function completeregister(){
        if(IS_POST){

            // if(M('user')->add($data)){
            //         $this->success('注册成功',U('home/register/index'));
            //     }else{
            //         $this->error('注册失败');
            //     }
            
            $data['username'] = addslashes($_POST['username']);
            $data['password'] = md5(addslashes($_POST['password'])); //密码MD5加密
            $data['email'] = addslashes($_POST['email']);
            $data['reg_time'] = time();
            $data['reg_ip'] = $_SERVER["REMOTE_ADDR"];
            $usernamePreg = '/^[a-zA-Z]\w{3,32}$/';
            $passwordPreg = '/^[a-zA-Z0-9_\\.]{8,32}$/';
            $emailPreg = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';
            //全部认证通过
            if(preg_match($emailPreg, $data['email']) && preg_match($passwordPreg, $data['username']) && preg_match($usernamePreg,$data['username'])){
                unset($data['email']);
                if(M('user')->add($data)){
                    $this->success('注册成功',U('home/register/index'));
                }else{
                    $this->error('注册失败');
                }
            }else{
                $this->error('非法数据提交');
            }
           
        }else{
            $this->error('非法访问');
        }
    }



    //手机号码注册页面
    public function phonereg(){
        layout(false);
        $this->display();
    }

  
//发送短信
    public function sendMsg(){

        

        // var_dump($_GET);
        /**
         * url中{function}/{operation}?部分
         */
        $funAndOperate = "industrySMS/sendSMS";


        // 生成body
        $body = createBasicAuthData();
        // 在基本认证参数的基础上添加短信内容和发送目标号码的参数
        $num=rand(1000,9999);
        $_SESSION['codenum']=$num;
        $body['smsContent'] = "【魅影科技】登录验证码：{".$num."}，如非本人操作，请忽略此短信。";
        $body['to'] = $_GET['phone'];

        // 提交请求
        $result = post($funAndOperate, $body);
        echo("<br/>result:<br/><br/>");
        var_dump($result);
        var_dump($_SESSION);
        if($result){
            $arr=array(
            'error'=>0,
            'info'=>'成功'
            );
            echo json_encode($arr);
        }else{
            $arr=array(
            'error'=>0,
            'info'=>'失败'
            );
            echo json_encode($arr);
        }
    }

   public function newregister(){
        if(IS_POST){
            // $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            // $random_string = '';
            // for ($i = 0; $i < $random_length; $i++) {
            //     $random_string .= $chars [mt_rand(0, strlen($chars) - 1)];
            // }

            $data['username']=uniqid();
            $data['phone']=$_POST['mobliephone'];
            $data['password']=md5($_POST['password']);
            $data['reg_time']=time();
            $data['reg_ip']=get_client_ip();
            $res=M('user')->add($data);
            if($res){
                // $res=M('user')->where('phone='.$data['phone'])->select();
                
                // $_SESSION['uid']=$res[0]['uid'];
                // $_SESSION['username']=$res[0]['username'];
                $this->success('注册成功,跳转到登录页面',U('home/login/index'));

            }
        }else{

            $this->error('注册失败，重新注册！');

        }
   }

}