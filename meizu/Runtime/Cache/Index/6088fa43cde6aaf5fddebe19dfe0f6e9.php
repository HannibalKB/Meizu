<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>魅族官网</title>
    <link rel="stylesheet" type="text/css" href="/mz/Public/Index/css/index.css">
    <script type="text/javascript" src="/mz/Public/Index/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/mz/Public/Index/js/unslider.min.js"></script>
    <style>

        html, body { font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;}

        ul, ol { padding: 0;}

        .banner { position: relative; overflow: auto; text-align: center;}

        .banner li { list-style: none; }

        .banner ul li { float: left; }
        a {text-decoration: none;
                transition:color .1s linear; 
        }

        </style>

</head>
<body>

    <!-- 大图 -->
    <div class="banner" id="b03">
    
    <ul>

        <li><img src="/mz/Public/Index/img/b1.jpg" alt="" width="2560" height="760" style="position:relative;left:-500px;"></li>

        <li><img src="/mz/Public/Index/img/b2.jpg" alt="" width="2560" height="760" style="position:relative;left:-500px"></li>

        <li><img src="/mz/Public/Index/img/b3.jpg" alt="" width="2560" height="760" style="position:relative;left:-500px"></li>


    </ul>
<!-- 链接 -->
    

</div>

<div style="z-index:999;position:absolute;top:35px;left:700px;padding-right:40px">
    <a href="<?php echo U('home/index/index');?>" style="display:inline-block;color:#333;font-size:14px">魅族商城</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px;line-height:21px">魅族手机</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px">魅蓝手机</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px">魅族声学</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px">服务</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px">专卖店</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px">Flyme</a>&nbsp&nbsp&nbsp
    <a href="" style="display:inline-block;color:#333;font-size:14px">社区</a>&nbsp&nbsp&nbsp
    <a href="<?php echo U('home/login/index');?>" style="display:inline-block;color:#333;font-size:14px">登录</a>&nbsp&nbsp&nbsp
    <a href="<?php echo U('home/register/index');?>" style="display:inline-block;color:#333;font-size:14px">注册</a>
</div>

<script>

$(document).ready(function(e) {

    $('#b03').unslider({

        dots: true

    });

});

</script>
<div>
    <img src="/mz/Public/Index/img/2.png" alt="" style="margin-left:20px">
    
</div>
<div>
     <img src="/mz/Public/Index/img/f.png" alt="" style="">
</div>
    
</body>
</html>