define("member:app/script/page/suggest",function(e){var i=e("common:lib/jquery/jquery-1.11.3"),t=e("member:app/script/module/cookie"),a=e("member:app/script/module/config-url"),n=e("member:app/script/module/dialog"),l=e("member:app/script/module/validate"),r=e("member:app/script/module/isToken"),c=(e("member:app/script/module/form-beautify"),new n("alert"));i(".varify").on({focus:function(){i(this).addClass("active")},blur:function(){i(this).removeClass("active")}}),i(".select").change(function(){l.isSelect(i(".mzui_select_trigger"))}),i(".area").on({keyup:function(){l.suggestIsFull(i(".area"))},blur:function(){l.suggestIsFull(i(".area"))}}),i(".self-email").on({keyup:function(){l.emailFn(i(this))},blur:function(){l.emailFn(i(this))}}),i("#_submitSuggest").on("click",function(){var e=function(){var e,t=i(".mzui_select_item_selected").attr("data-value");return"购物体验"==t?e=1:"活动建议"==t?e=2:"商品质量"==t?e=3:"售后服务"==t?e=4:"其他建议"==t?e=5:"支付流程"==t?e=6:"商品建议"==t&&(e=7),e},n=i(".area").val(),s=JSON.parse(decodeURIComponent(t.getCookie("MEIZUSTORESESSIONVAL"))).uid,u=i(".self-email").val(),o={type:e(),content:n,advicerId:s,advicerEmail:u};l.isSelect(i(".mzui_select_trigger"))===!0&&l.suggestIsFull(i(".area"))===!0&&l.emailFn(i(".self-email"))===!0&&r.post({url:a+"/vip/advice/add",datas:JSON.stringify(o),successCallback:function(){c.run({contStr:"提交成功，感谢您的建议，我们将会做的更好！",confirmFunc:function(){window.location.reload()}})}})})});