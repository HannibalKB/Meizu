<?php

header("Content-type: text/html; charset=utf-8"); 

/**
 * url前半部分
 */
$BASE_URL = "https://api.miaodiyun.com/20150822/";

/**
 * url中的accountSid。如果接口验证级别是主账户则传网站“个人中心”页面的“账户ID”，
 */
$ACCOUNT_SID = "00ea3ee1d71e4637ab22d9711bba4acb"; // 主账户
$AUTH_TOKEN = "07f099ab38ca41099052f9fd227bb9da";

/**
 * 请求的内容类型，application/x-www-form-urlencoded
 */
$CONTENT_TYPE = "application/x-www-form-urlencoded";

/**
 * 期望服务器响应的内容类型，可以是application/json或application/xml
 */
$ACCEPT = "application/json";



