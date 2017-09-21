<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>PHP+jQuery+Ajax多图片上传</title>
        <meta name="keywords" content="jquery多图片上传,plupload多图片上传" />
        <meta name="description" content="今天介绍大家一款多文件上传插件：plupload，通过PHP+Ajax实现多图片上传的效果。用户只需要点击选择要上传的图片，然后图片自动上传到服务器上并立即显示在页面上。" />
        <link rel="stylesheet" type="text/css" href="/mz/Public/Admin/duotushangchuan/common.css" />
        <style type="text/css">
            .btn{
                -webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;
                 background-color: #ff8400;color: #fff;display: inline-block;height: 28px;line-height: 28px;text-align: center;
                 width: 72px;transition: background-color 0.2s linear 0s;border:none;cursor:pointer;margin:0 0 20px;
             }
            .demo{width:760px;margin:0 auto}
            .btn:hover{background-color: #e95a00;text-decoration: none}
            .ul_pics li{float:left;width:160px;height:160px;border:1px solid #ddd;padding:2px;text-align: center;margin:0 5px 5px 0;}
            .ul_pics li .img{width: 160px;height: 140px;display: table-cell;vertical-align: middle;}
            .ul_pics li img{max-width: 160px;max-height: 140px;vertical-align: middle;}
            .progress{position:relative;padding: 1px; border-radius:3px; margin:60px 0 0 0;} 
            .bar {background-color: green; display:block; width:0%; height:20px; border-radius:3px; } 
            .percent{position:absolute; height:20px; display:inline-block;top:3px; left:2%; color:#fff }
            .container{
                position: relative;
            }
            .skucontain{
                position: absolute;
                bottom: 250px;
                left: 20px;
            } 
        </style>
    </head>
    <body>
        <form action="<?php echo U('admin/shop/shopSkuImg');?>" id="mainform"  method="post">
            <input type="hidden" name="listid" value="<?php echo $_GET['listid'] ?>">
            <input type="hidden" name="good_id" value="<?php echo $res[0]['good_id'] ?>" />
            <input type="hidden" name="type_id" value="<?php echo $res[0]['type_id'] ?>" />
            <div class="container" style="min-height:800px;">
                <h2 class="title">&nbsp;&nbsp;&nbsp;商品名称:<?php echo $res[0]['good_name'] ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sku:<?php echo $res[0]['sku_detail'] ?></h2>
                <div class="demo">
                    <a class="btn" id="btn">上传图片</a> 最大500KB，支持jpg，gif，png格式。

                    
                    <a href="javascript:void()" class="btn btn-secondary radius" style="background-color: #3bb4f2; border-color: #3bb4f2;" id="sumbtn">
                        <i class="icon-key"></i> 提交
                     </a>
                    <ul id="ul_pics" class="ul_pics clearfix"></ul>
                   
                </div>
                <div class="skucontain">
                    <h2>选择下面相同颜色的sku 添加相同颜色的sku </h2>
                    <?php
 foreach ($goodSkuRes as $key => $value) { ?>
                                 <label for="default"> <input id="sameimg" class="setDefault" type="checkbox" name="sameimgid[]" value="<?php echo $value['good_listid'] ?>"  /><?php echo $value['sku_detail'] ?> </label><br/>
                              <?php
 } ?>
                   

                </div>   
            </div>

        </form>
        <script type="text/javascript" src="/mz/Public/Admin/duotushangchuan/jquery.js"></script>
        <script type="text/javascript" src="/mz/Public/Admin/duotushangchuan/plupload.full.min.js"></script>
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/sucaihuo.js"></script>
        <script type="text/javascript">
            var uploader = new plupload.Uploader({ //创建实例的构造方法 
                runtimes: 'html5,flash,silverlight,html4', 
                //上传插件初始化选用那种方式的优先级顺序 
                browse_button: 'btn', 
                // 上传按钮 
                url: "<?php echo U('admin/shop/mutipleImgUpload');?>", 
                //远程上传地址 
                flash_swf_url: 'plupload/Moxie.swf', 
                //flash文件地址 
                silverlight_xap_url: 'plupload/Moxie.xap', 
                //silverlight文件地址 
                filters: { 
                    max_file_size: '500kb', 
                    //最大上传文件大小（格式100b, 10kb, 10mb, 1gb） 
                    mime_types: [ //允许文件上传类型 
                    { 
                        title: "files", 
                        extensions: "jpg,png,gif" 
                    }] 
                }, 
                multi_selection: true, 
                //true:ctrl多文件上传, false 单文件上传 
                init: { 
                    FilesAdded: function(up, files) { //文件上传前 
                        if ($("#ul_pics").children("li").length > 30) { 
                            alert("您上传的图片太多了！"); 
                            uploader.destroy(); 
                        } else { 
                            var li = ''; 
                            plupload.each(files, 
                            function(file) { //遍历文件 
                                li += "<li id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>"; 
                            }); 
                            $("#ul_pics").append(li); 
                            uploader.start(); 
                        } 
                    }, 
                    UploadProgress: function(up, file) { //上传中，显示进度条 
                        $("#" + file.id).find('.bar').css({ 
                            "width": file.percent + "%" 
                        }).find(".percent").text(file.percent + "%"); 

                    }, 
                    FileUploaded: function(up, file, info) { //文件上传成功的时候触发 
                        var data = JSON.parse(info.response); 
                        $("#" + file.id).html("<div class='img'><img src='/mz" + data.pic + "'/></div><p>" + data.name + "</p>"); 
                    }, 
                    Error: function(up, err) { //上传出错的时候触发 
                        alert(err.message); 
                    } 
                } 
            }); 
            uploader.init();
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#sumbtn', function(event) {
                var imgleng = $('.ul_pics').find('img');
                if(imgleng.length <= 0 ){
                    alert('请选择4张图片');
                    return false;
                }else if(imgleng.length != 4){
                    alert('请选择4张图片');
                    return false;
                }
                $('#mainform').submit();
            });
        });
        </script>
    </body>
</html>