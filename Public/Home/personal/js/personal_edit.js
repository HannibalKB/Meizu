// $(document).ready(function() {
// 	//点击修改密码的按钮
//     $('#modifyPassword').click(function(event) {
//       $('#bindEmail-step1').css('display', 'none');   //还原邮箱修改的样式
//       $('#emailWrap').css('display', 'block');        //还原邮箱修改的样式
//       $('#pwdWrap').css('display', 'none');
//       $('#changePasswordWrap').css('display', 'block');
//     });
//     //点击取消修改密码的按钮
//     $('#ce-u-pwdcancel').click(function(event) {
//       $('#changePasswordWrap').css('display', 'none');
//       $('#pwdWrap').css('display', 'block');
//     });

//     //点击绑定邮箱的按钮
//     $('#emailBind').click(function(event) {
//       $('#emailWrap').css('display', 'none');
//       $('#pwdWrap').css('display', 'block'); //显示原本的修改密码的样式
//       $('#changePasswordWrap').css('display', 'none');//隐藏之前密码修改的弹出框
//       $('#bindEmail-step1').css('display', 'block');
//     });
//     //点击取消邮箱绑定的按钮
//     $('#bindEmail-step1-savenextcancel').click(function(event) {
//       $('#bindEmail-step1').css('display', 'none');
//       $('#emailWrap').css('display', 'block');
//     });

//     //提交表单
//     $('#ce-u-pwdsave').click(function(event) {
//     	$('#passwordformhzj').submit();
//     });
//     //表单认证
//     $('#passwordformhzj').validate({
//     	rules:{
//     		password:{
//     			required:true,
//            remote:{
//               url:"{:U('home/user/checkpassword')}",
//               type:"post",
//               dataType:"json",
//             }
//     		},
//     		resetPassword:{
//     			required:true,
//     			 isRightPassword:true,
//     		}
//     	},
//     	 messages:{
//     	 	password:{
//     	 		required:'请先填写密码',
//     	 	},
//     	 	resetPassword:{
//     	 		required:'请填写新密码',
//     	 	}
//     	 },
// 	    errorElement:"span",
// 	 	errorPlacement: function(error,element){
//  		 	// element.removeClass('successclass');
//  		 	// element.addClass('errorclass');
// 	        error.appendTo(element.parent());
//         },
//      	success:function(element){
//             $(element).siblings('input').addClass('successclass');
//             // alert($(element).attr('maxlength'));
//             // $(element).parent().prev().removeClass('errorclass');
//             // $(element).remove();
//         },
//     });
//    		//正确的密码规则
//         $.validator.addMethod("isRightPassword",function(value,element,params){
//           var passwords =  /^[a-zA-Z0-9_\\.]{8,16}$/;  //不能包含特殊字符
//           return passwords.test(value);
//         },"请填写正确格式的密码!");

// });