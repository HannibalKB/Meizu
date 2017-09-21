<?php


function qqMail($register_user,$bodyContent)
{
    Vendor('PHPMailer.PHPMailerAutoload');

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '992584464@qq.com';                 // SMTP username
    $mail->Password = 'lwomykhbscarbbhj';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('992584464@qq.com', '魅族商城验证码提示');
    $mail->addAddress($register_user, 'Register number');     //设置接收者的qq
    $mail->addReplyTo('992584464@qq.com', 'Information');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '邮箱验证';
    $mail->Body    = $bodyContent;

    if(!$mail->send()){
        
        return false;
    } else {
        
        return true;
    }
}

function isShowMenu($rule,$title){
        $rule = strtolower($rule);

        $Auth  =  new \Think\Auth();

        if($_SESSION['adminname']!= 'admin'){

            if($Auth->check($rule,$_SESSION['adminid'])){
                echo  '<li><a _href="'.U($rule).'" href="javascript:void(0)">'.$title.'</a></li>';
            }
        }else{
            echo  '<li><a _href="'.U($rule).'" href="javascript:void(0)">'.$title.'</a></li>';
        }

}

/**
 * 创建url
 *
 * @param funAndOperate
 *            请求的功能和操作
 * @return
 */
function createUrl($funAndOperate)
{
    
    
    $timestamp = date("YmdHis");

    return C('BASE_URL') . $funAndOperate;
}

function createSig()
{

    $timestamp = date("YmdHis");

    // 签名
    $sig = md5(C('ACCOUNT_SID') . C('AUTH_TOKEN') . $timestamp);
    return $sig;
}

function createBasicAuthData()
{
    
    $timestamp = date("YmdHis");
    // 签名
    $sig = md5(C('ACCOUNT_SID') . C('AUTH_TOKEN') . $timestamp);
    return array("accountSid" => C('ACCOUNT_SID'), "timestamp" => $timestamp, "sig" => $sig, "respDataType"=> "JSON");
}

/**
 * 创建请求头
 * @param body
 * @return
 */
function createHeaders()
{
    

    $headers = array('Content-type: ' . C('CONTENT_TYPE'), 'Accept: ' . C('ACCEPT'));

    return $headers;
}

/**
 * post请求
 *
 * @param funAndOperate
 *            功能和操作
 * @param body
 *            要post的数据
 * @return
 * @throws IOException
 */
function post($funAndOperate, $body)
{
    // 构造请求数据
    $url = createUrl($funAndOperate);
    $headers = createHeaders();

    echo("url:<br/>" . $url . "\n");
    echo("<br/><br/>body:<br/>" . json_encode($body));
    echo("<br/><br/>headers:<br/>");
    var_dump($headers);

    // 要求post请求的消息体为&拼接的字符串，所以做下面转换
    $fields_string = "";
    foreach ($body as $key => $value) {
        $fields_string .= $key . '=' . $value . '&';
    }
    rtrim($fields_string, '&');

    // 提交请求
    $con = curl_init();
    curl_setopt($con, CURLOPT_URL, $url);
    curl_setopt($con, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($con, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($con, CURLOPT_HEADER, 0);
    curl_setopt($con, CURLOPT_POST, 1);
    curl_setopt($con, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($con, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($con, CURLOPT_POSTFIELDS, $fields_string);
    $result = curl_exec($con);
    curl_close($con);

    return "" . $result;
}


function checkStr($str,$target)
{
    $tmpArr = explode($str,$target);
  if(count($tmpArr)>1)return true;
  else return false;
}






?>