<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发布商品</title>

<link rel="stylesheet" type="text/css" href="/mz/Public/Admin/css/zhongxin.css"/>

</head>


<body>
<div style="position: relative;">
   <!--main -->
   <div class="main main2">
         <div class="main2-to">选择商品分类</div>
          <form action="<?php echo U('admin/shop/publishshop');?>" method="post">
            <!-- <div class="main2-ce">
                
                <div class="clearfix">
                    <div class="ce-ce">
                        <h4>选择分类</h4>
                        <ul class="one">
                        <?php
 foreach ($cateres as $key => $value) { ?>
                   <li class="clearfix" cateid="<?php echo $value['cid'] ?>"><p><?php echo $value['cname'] ?></p> <span>></span></li>     
                            <?php
 } ?>
                        </ul>
                    </div>  
                    <div class="ce-ce ce-ce2 two two1">
                         
                    </div>
                  
                    <div class="ce-ce ce-ce2 san san1">
                         <h4>选择三级品类</h4>
                        
                    </div>
                   
                </div>
                <input type="hidden" name="cateid" id="category_id" />
                <div class="main2-bo" style="margin-left:25px;">
                  <button type="submit" id="jueren">确认</button>

                </div>

                
             </div> -->

<!-- 原来 -->
             <div class="main2-ce">
                
                <div class="clearfix">
                    <div class="ce-ce">
                        <h4>选择一级分类</h4>
                        <ul class="one">
                        <?php
 foreach ($cateres as $key => $value) { ?>
								   <li class="clearfix" cateid="<?php echo $value['cid'] ?>"><p><?php echo $value['cname'] ?></p> <span>></span></li>			
                        	 	<?php
 } ?>
                        </ul>
                    </div>  
                    <div class="ce-ce ce-ce2 two two1">
                         
                    </div>
                  
                    <div class="ce-ce ce-ce2 san san1">
                         <h4>选择三级品类</h4>
                        
                    </div>
                   
                </div>
                <input type="hidden" name="cateid" id="category_id" />
                <div class="main2-bo" style="margin-left:25px;">
                  <button type="submit" id="jueren" style="background:red">确认</button>

                </div>

                
             </div>
             
          </form> 
          <!--bottom-->
    </div>
</div>
<script type="text/javascript" src="/mz/Public/Admin/lib/jquery.min.js"></script>
<script>
  $(function(){
   
    
     //选择项目分类
    $(document).on('click', '.one li', function(event) {
        var ind = $(this).index();
        $(this).css({'background':'#f6f6f6','color':'#a20812','fontWeight':'bold'}).siblings().removeAttr('style');
        $(this).parents('div').siblings().find('ul').find('li').removeAttr('style');
        /*--------- 自己加的代码 ------*/
        var cateid = $(this).attr('cateid');
        $('#category_id').val(cateid);
        $.ajax({
        	url: '<?php echo U("admin/shop/getthesoncate");?>',
        	type: 'POST',
        	dataType: 'json',
        	data: {cateid: cateid},
          success:function(data){
            if(data.error == 1){
              $('.two1').css('display', 'none');
              $('.two1').html(' ');
              $('.san1').css('display', 'none');
              $('.san1').html(' ');
            }else if(data.error == 0){
              $('.two1').css('display', 'block');
              $('.two1').html(data.str);
            }
          },
          error:function(){
            alert('出错啦');
          },
        })
       
     });


      
      $(document).on('click', '.two1 li', function(event) {
        $(this).css({'background':'#f6f6f6','color':'#a20812','fontWeight':'bold'}).siblings().removeAttr('style');
        $(this).parents('div').siblings('.san').find('ul').find('li').removeAttr('style');
        var cateid = $(this).attr('cateid');
        $.ajax({
          url: '<?php echo U("admin/shop/getthesecondsoncate");?>',
          type: 'POST',
          dataType: 'json',
          data: {cateid: cateid},
          success:function(data){
            if(data.error == 1){
              $('.san1').css('display', 'none');
              $('.san1').html(' ');
            }else if(data.error == 0){
              $('.san1').css('display', 'block');
              $('.san1').html(data.str);
            }
          },
          error:function(){
            alert('出错啦');
          },
        })
      });

      /*--------- 二级分类的代码自己写two1  -----------*/


      /*---------- 三级分类自己写的代码  -----------*/
      $(document).on('click', '.san1 li', function(event) {
          $(this).css({'background':'#f6f6f6','color':'#a20812','fontWeight':'bold'}).siblings().removeAttr('style');
      });

      /*---------- 三级分类自己写的代码  -----------*/

     // $('.two li').click(function(){

     //    var ind=$(this).index();

     //    $(this).css({'background':'#f6f6f6','color':'#a20812','fontWeight':'bold'}).siblings().removeAttr('style');
     //    $(this).parents('div').siblings('.san').find('ul').find('li').removeAttr('style');

     //    if($(this).index() == 0){
     //      $('.san1').show().siblings('.san').hide();          
     //    }else if($(this).index() == 1){
     //      $('.san2').show().siblings('.san').hide();
     //    }else{
     //       $('.san').hide();
     //    }
     //    showChoseList($(this).find('span').size());
     // });

     // $('.san li').click(function(){
     //      $(this).css({'background':'#f6f6f6','color':'#a20812','fontWeight':'bold'}).siblings().removeAttr('style');
     //      showChoseList($(this).find('span').size());
     // });
  });
</script>
</body>
</html>