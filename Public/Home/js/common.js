/**
 * common js
 * @authors caiaolin
 * @date    2014-08-11 15:43:03
 * @version $Id$
 */
Common = {
    init: function(){
        var KLASS = 'm-avatarbox-hover',t;

        $("#goToLogin > a,#mzLogout").click(function(){
            var href = $(this).attr('thref');

            if(href == '' || href == undefined) {
                return false;
            }
            window.location.href = href;
            // 解决IE6下不能跳转
            if(window.event) window.event.returnValue = false;
        });

        this.isLogin();

        $('.m-avatarbox').on('mouseenter', function(e) {
            e.preventDefault();
            $(this).addClass(KLASS);
        }).on('mouseleave', function() {
            var the = this;
            t = setTimeout(function() {
                $(the).removeClass(KLASS);
            }, 300);
        });

        $('.m-avatarmenu').on('mouseover', function() {
            clearTimeout(t);
        });
    },
    getCookie: function(c_name){     // 获得 cookie 的值
        if(document.cookie.length>0){
            c_start = document.cookie.indexOf(c_name + "=")
            if(c_start != -1){
                c_start = c_start + c_name.length+1
                c_end = document.cookie.indexOf(";",c_start)
                if(c_end == -1) c_end = document.cookie.length;
                return unescape(document.cookie.substring(c_start,c_end))
            }
        }
        return ""
    },
    setCookie:function(name,value){ // 写cookies     neme是key   value 是值
        var Days    = 30;
        var exp     = new Date();
        exp.setTime(exp.getTime() + Days*24*60*60*1000);
        document.cookie = name + "="+ escape (value) + ";path=/;expires=" + exp.toGMTString();
    },
    subString:function(str, n) {
        var strReg = /[^\x00-\xff]/g;
        var _str = str.replace(strReg, "**");
        var _len = _str.length;
        if (_len > n) {
            var _newLen = Math.floor(n / 2);
            var _strLen = str.length;
            for (var i = _newLen; i < _strLen; i++) {
                var _newStr = str.substr(0, i).replace(strReg, "**");
                if (_newStr.length >= n) {
                    return str.substr(0, i-1) + "...";
                    break;
                }
            }
        } else {
            return str;
        }
    },
    isLogin: function(){
        try{
            var user = Common.getCookie('MEIZUSESSIONVAL');
            var user_arr = user == undefined || user == "" ? '' : $.parseJSON(user);
            if(user !='' && parseInt(user_arr['uid']) > 0 ){
                var _flyme = user_arr['username'];
                $("#mzCustName").html(_flyme);
                $("#goToLogin").hide();
                $("#isLogin").show();
                
            }else{
                $("#goToLogin").show();
                $("#isLogin").hide();
            }
        }catch(e){}
    },
    checkLogin: function(){
        var user = Common.getCookie('MEIZUSESSIONVAL');
        if(user == undefined || user == "") {
            return false;
        }
        var user_arr = $.parseJSON(user);
        
        return user !='' && parseInt(user_arr['uid']) > 0 ? true : false;
    }
};

//临时解决parseJSON问题
$.parseJSON = function( json ){
  if(typeof json == "object"){
      return json
  }else if(json && typeof json == "string" ){
     if(window.JSON) return JSON.parse( json )
  }else{
     return null
  }
}

$(document).ready(function(){
    Common.init();
});

/***********************            base64  加密与解码           ****************************/

var base64encodechars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var base64decodechars = new Array(
-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63,
52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1,
-1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1,
-1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);

// 实例
/*
function doit() {
    var f = document.f
    f.output.value = base64encode(utf16to8(f.source.value))
    f.decode.value = utf8to16(base64decode(f.output.value))
}
*/
function base64encode(str) {
    var out, i, len;
    var c1, c2, c3;
    len = str.length;
    i = 0;
    out = "";
    while (i < len) {
        c1 = str.charCodeAt(i++) & 0xff;
        if (i == len) {
            out += base64encodechars.charAt(c1 >> 2);
            out += base64encodechars.charAt((c1 & 0x3) << 4);
            out += "==";
            break;
        }
        c2 = str.charCodeAt(i++);
        if (i == len) {
            out += base64encodechars.charAt(c1 >> 2);
            out += base64encodechars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xf0) >> 4));
            out += base64encodechars.charAt((c2 & 0xf) << 2);
            out += "=";
            break;
        }
        c3 = str.charCodeAt(i++);
        out += base64encodechars.charAt(c1 >> 2);
        out += base64encodechars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xf0) >> 4));
        out += base64encodechars.charAt(((c2 & 0xf) << 2) | ((c3 & 0xc0) >> 6));
        out += base64encodechars.charAt(c3 & 0x3f);
    }
    return out;
}
function base64decode(str) {
    var c1, c2, c3, c4;
    var i, len, out;

    len = str != undefined && str != '' ? str.length : 0;

    i = 0;
    out = "";
    while (i < len) {
       
        do {
            c1 = base64decodechars[str.charCodeAt(i++) & 0xff];
        } while (i < len && c1 == -1);
        if (c1 == -1)
            break;

       
        do {
            c2 = base64decodechars[str.charCodeAt(i++) & 0xff];
        } while (i < len && c2 == -1);
        if (c2 == -1)
            break;

        out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));

       
        do {
            c3 = str.charCodeAt(i++) & 0xff;
            if (c3 == 61)
                return out;
            c3 = base64decodechars[c3];
        } while (i < len && c3 == -1);
        if (c3 == -1)
            break;

        out += String.fromCharCode(((c2 & 0xf) << 4) | ((c3 & 0x3c) >> 2));

       
        do {
            c4 = str.charCodeAt(i++) & 0xff;
            if (c4 == 61)
                return out;
            c4 = base64decodechars[c4];
        } while (i < len && c4 == -1);
        if (c4 == -1)
            break;
        out += String.fromCharCode(((c3 & 0x03) << 6) | c4);
    }
    return out;
}

function utf16to8(str) {
    var out, i, len, c;
    out = "";
    len = str.length;
    for (i = 0; i < len; i++) {
        c = str.charCodeAt(i);
        if ((c >= 0x0001) && (c <= 0x007f)) {
            out += str.charAt(i);
        } else if (c > 0x07ff) {
            out += String.fromCharCode(0xe0 | ((c >> 12) & 0x0f));
            out += String.fromCharCode(0x80 | ((c >> 6) & 0x3f));
            out += String.fromCharCode(0x80 | ((c >> 0) & 0x3f));
        } else {
            out += String.fromCharCode(0xc0 | ((c >> 6) & 0x1f));
            out += String.fromCharCode(0x80 | ((c >> 0) & 0x3f));
        }
    }
    return out;
}

function utf8to16(str) {
    var out, i, len, c;
    var char2, char3;

    out = "";
    len = str.length;
    i = 0;
    while (i < len) {
        c = str.charCodeAt(i++);
        switch (c >> 4) {
            case 0: case 1: case 2: case 3: case 4: case 5: case 6: case 7:
                // 0xxxxxxx
                out += str.charAt(i - 1);
                break;
            case 12: case 13:
                // 110x xxxx   10xx xxxx
                char2 = str.charCodeAt(i++);
                out += String.fromCharCode(((c & 0x1f) << 6) | (char2 & 0x3f));
                break;
            case 14:
                // 1110 xxxx  10xx xxxx  10xx xxxx
                char2 = str.charCodeAt(i++);
                char3 = str.charCodeAt(i++);
                out += String.fromCharCode(((c & 0x0f) << 12) |
                   ((char2 & 0x3f) << 6) |
                   ((char3 & 0x3f) << 0));
                break;
        }
    }

    return out;
}
/***********************            base64  加密与解码   end     ****************************/