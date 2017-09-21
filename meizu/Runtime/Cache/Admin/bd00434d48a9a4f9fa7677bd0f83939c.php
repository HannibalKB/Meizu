<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/mz/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />

<link href="/mz/Public/Admin/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>订单列表</title>
<style type="text/css">
  /*分页样式*/
.text-centerpage{
    text-align: center;
}

.pagination{
    display: inline-block;
    padding-left: 0;
    margin: 21px 0;
    border-radius: 3px;
    text-align: center;
    position: relative;
    width: 100%;
}
.pagaBox{
  height: 50px;
  margin: 0 auto;
  position: absolute;
  left: 50%;
}
.text-center a:hover{
    text-decoration: none;
}
.num{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}

.current{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
    z-index: 2;
    color: #fff;
    background-color: #009a61;
    border-color: #009a61;
    cursor: default;
}

.prev{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}

.next{
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.5;
    text-decoration: none;
    color: #009a61;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}
/*下拉框的样式*/
.drodownlistclass{
  display:inline-block;
  /*border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  box-sizing: border-box;*/
  cursor: pointer;
  line-height: normal;
  font-weight: normal;
  width: 150px;
  font-size: 14px;
  border-width: 1px;
  border-style: solid;
  border-color: rgb(221, 221, 221);
  height: 31px;
  text-align: center;
}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 订单库 <span class="c-gray en">&gt;</span> 订单列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="r">共有数据：<strong><?php echo $count ?></strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="165">订单id</th>
        <th width="100">订单号</th>
        <th width="150">下单用户</th>
        <th width="100">订单总价</th>
        <th width="150">留言</th>
        <th width="150">下单时间</th>
        <th width="60">发布状态</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
 foreach ($orderRes as $key => $value) { ?>
            <tr class="text-c">
              <td><?php echo $value['order_id'] ?></td>
              <td><?php echo $value['order_code'] ?></td>
              <td><u style="cursor:pointer" class="text-primary" onclick="user_show(<?php echo $value['uid'] ?>,'500','700','<?php echo $value['theusername'] ?>','<?php echo U('admin/user/usershow',array('userid'=>$value['uid']));?>')"><?php echo $value['theusername'] ?></u></td>
              <td><?php echo $value['order_price'] ?></td>
              <td class="text-c">
                <?php  if($value['user_message'] == '') { echo '<span style="color:red">没有留言</span>'; } else{ echo $value['user_message']; } ?>
              </td>
              <td><?php echo date("Y-m-d H:i:s",$value['order_time']) ?></td>
              <td>
                <?php  if ($value['status'] == 0) { echo '<span style="color:orange">待付款</span>'; }elseif($value['status'] == 1){ echo '<span style="color:red">已付款等待发货</span>'; }elseif($value['status'] == 2){ echo '<span style="color:blue">已发货</span>'; }elseif($value['status'] == 3){ echo '订单已取消'; }elseif($value['status'] == 4){ echo '<span style="color:green">订单已完成</span>'; } ?>
              </td>
              <td class="f-14 picture-manage">
            <!-- href="<?php echo U('admin/order/orderdetail',array('orderid'=>$value['order_id']));?>" -->
              <a style="text-decoration:none" class="ml-5"   title="查看详情"  onclick="user_show('10001','900','900','订单详情:<?php echo $value['order_code'] ?>','<?php echo U('admin/order/orderdetail',array('orderid'=>$value['order_id']));?>')">
                <i class="Hui-iconfont">&#xe667;</i>
              </a>

              <?php  if ($value['status'] == 1) { ?>
                    <a style="text-decoration:none" onClick="if(confirm('确定要发货吗?')){
                    this.href = '<?php echo U('admin/order/send',array('orderid'=>$value['order_id']));?>'
                    }" href="javascript:;" title="发货"><i class="icon-hand-up"></i>
                  <?php
 } ?>
              
              </a>  
              <?php  if($value['status'] == 4 || $value['status'] == 3 || $value['status'] == 0){ ?>
                    <a style="text-decoration:none" class="ml-5" onClick="if(confirm('确定要删除吗?')){
                    this.href = '<?php echo U('admin/order/delete',array('orderid'=>$value['order_id']));?>'
                    }" href="javascript:;" title="删除"><i class="icon-trash"></i></a>
                  <?php
 } ?>
              

              </td>
            </tr>
          <?php
 } ?>
    </tbody>
  </table>
  <div class="pagination">
    <div class="pagaBox">
      <?php echo $page ?>
    </div>
  </div>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script>
</body>
</html>