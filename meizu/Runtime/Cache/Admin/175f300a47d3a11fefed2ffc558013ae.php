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
<link href="/mz/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<link href="/mz/Public/Admin/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]--><title>资讯列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页  <span class="c-gray en">&gt;</span> 反馈列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">

  <form action="<?php echo U('admin/feedback/mutipledelete');?>" method="POST" id="mainForm">
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" id="multipledelete" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a> </span> <span class="r">共有数据：<strong><?php echo count($res);?></strong> 条</span> </div>
    <table class="table table-border table-bordered table-bg table-hover table-sort">
      <thead>
        <tr class="text-c">
          <th width="25"><input type="checkbox" name="" value=""></th>
          <th width="80">反馈编号ID</th>
          <th width="50">反馈者</th>
          <th width="80">反馈类型</th>
          <th width="80">反馈邮箱</th>
          <th width="120">反馈时间</th>
          <th width="60">状态</th>
          <th width="70">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php  foreach ($res as $key => $value) { ?>
              <tr class="text-c">
                <td><input type="checkbox" value="<?php echo $value['fbid']; ?>" name="fbid[]"></td>
                <td>

                  <u style="cursor:pointer" class="text-primary beclicks"   title="查看详细"><?php echo $value['fbid']?></u>
                  
                </td>
                <td><u style="cursor:pointer" class="text-primary" onclick="user_show(<?php echo $value['uid'] ?>,'500','700','<?php echo $value['username'] ?>','<?php echo U('admin/user/usershow',array('userid'=>$value['uid']));?>')" title="查看详细"><?php echo $value['username']; ?></u></td>
                <td><?php echo $value['typeid']; ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo date("Y-m-d H:i:s",$value['create_time']); ?></td>
                <td class="article-status">
                <?php  if($value['status'] == 1){ ?>
                      <span class="label label-success radius selfuse"  dataid="<?php echo $value['fbid']; ?>">未浏览</span>
                    <?php
 }else{ ?>
                      <span class="label  radius">已浏览</span>
                    <?php
 } ?>
                </td>
                <td class="f-14 article-manage"><a style="text-decoration:none" class="ml-5" onClick="feedback_dels(this,'<?php echo $value['fbid'] ?>')" href="javascript:;" title="删除"><i class="icon-trash"></i></a></td>
              </tr>
            <?php
 } ?>
          
      </tbody>
    </table>
    <div class="pagination">
      <div class="pagaBox">
        <?php  echo $Page ?>
      </div>
    </div>
  </div>
  </form>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/layer1.8/layer.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/laypage/laypage.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.js"></script>
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/mz/Public/Admin/js/H-ui.admin.doc.js"></script>
<script type="text/javascript">
/*反馈信息-查看*/
function feedback_show(id,w,h,title,url){
  layer_show(w,h,title,url);  
}
$(document).ready(function() {
  $('.beclicks').click(function(event) {
    feedback_show(<?php echo $value['fbid']?>,'500','600','查看反馈详细','<?php echo U("admin/feedback/feedbackshow",array("fbid"=>$value["fbid"]));?>');
    var bechangeobj = $(this).parents('tr').find('.selfuse');
    bechangeobj.replaceWith('<span class="label  radius">已浏览</span>');
  });

});

/*反馈信息删除*/
function feedback_dels(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    var layerobj  = layer;
    var currentobj = $(obj);
    var fbid = id;
    $.ajax({
      url: '<?php echo U("admin/feedback/singledelete");?>',
      type: 'POST',
      dataType: 'json',
      data: {fbid: fbid},
      success:function(data){
        if(data.error == 0){
          currentobj.parents("tr").remove();
          layerobj.msg('已删除!',1);
        }else if(data.error == 1){
          layerobj.msg('删除失败!',1);
        }
      },
      error:function(){
        layerobj.msg('通信错误!',1);
      },
    })
  });
}

$('#multipledelete').click(function(event) {
  layer.confirm('确认要删除吗？',function(index){
     $('#mainForm').submit();
     layer.msg('已删除!',1);
  });
});
</script>
</body>
</html>