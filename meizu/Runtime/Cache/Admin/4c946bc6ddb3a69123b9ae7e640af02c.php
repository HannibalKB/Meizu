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
<link rel="stylesheet" href="/mz/Public/Admin/css/page.css">
<!--[if IE 7]>
<link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/mz/Public/Admin/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]--><title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 权限规则管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c">
    <form class="Huiform" method="post" action="<?php echo U('admin/rules/ruleadd');?>" >
      <span class="select-box" style="width:150px;">
        <select class="select" name="cid" size="1" id="cid">
           <option value="0">请选择分类</option>
          <?php  foreach ($cateres as $key => $value) { ?>
                 <option value="<?php echo $value['id'] ?>"><?php echo $value['cname']; ?></option>
              <?php
 } ?>
          
        </select>
      </span>
      <input type="text" placeholder="模块/控制器/方法" autocomplete="off" name="name" id="name"  class="input-text" style="width:150px" >

      <input type="text" placeholder="权限名称" name="title" id="title" autocomplete="off"  class="input-text" style="width:150px">
      

      <button type="submit" class="btn btn-success" id="sumbtn"> 添加权限</button>
    </form>
  </div>

  <form action="<?php echo U('admin/rules/mutipledeleterule');?>" method="post" id="mutipleForm">
    <div class="cl pd-5 bg-1 bk-gray mt-20">
      <span class="l"><a href="javascript:;" class="btn btn-danger radius" id="multiplebtn"><i class="icon-trash"></i> 批量删除</a></span>
      <span class="r">共有数据：<strong>54</strong> 条</span>
    </div>
    <table class="table table-border table-bordered table-bg">
      <thead>
        <tr>
          <th scope="col" colspan="7">权限节点</th>
        </tr>
        <tr class="text-c">
          <th width="25"><input type="checkbox" name="" value=""></th>
          <th width="40">ID</th>
          <th width="180">权限规则</th>
          <th width="120">权限名称</th>
          <th width="100">所属分类</th>
          <th width="70">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php
 foreach ($authres as $key => $value) { ?>
              <tr class="text-c">
                <td><input type="checkbox" value="<?php echo $value['id'] ?>" name="id[]"></td>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['title'] ?></td>
                <td><?php echo $value['cid'] ?></td>
                <td class="f-14"><a title="编辑" href="<?php echo U('admin/rules/editrule',array('id'=>$value['id']));?>"  class="ml-5" style="text-decoration:none"><i class="icon-edit"></i></a> <a title="删除" href="<?php echo U('admin/rules/ruledeletesingle',array('id'=>$value['id']));?>"  class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
              </tr>
            <?php
 } ?>
      </tbody>
    </table>
  </form>

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
<script type="text/javascript">
  
  $('#multiplebtn').click(function(event) {
      layer.confirm('确认要停用吗？',function(index){
        $('#mutipleForm').submit();
      });
  });

</script>
</body>
</html>