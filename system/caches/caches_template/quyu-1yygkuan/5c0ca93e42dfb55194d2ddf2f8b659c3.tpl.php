<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
    <meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
    <title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
    <link href="<?php echo G_TEMPLATES_STYLE; ?>/css/register.css" rel="stylesheet" type="text/css" />
   <!--[if IE 6]>
       <script type="text/javascript" src="/iepng.js"></script>
       <script type="text/javascript">
       EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.F_goods_rq, .F_goods_xp, .F_goods_tj,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s');
       </script>
   <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/index2.css?date=20140731">
     <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm1.css?date=20140731">
    <script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
    
</head>
<body>
<style>


fieldset, img {border: 0;}
.search_cart_wrap {width: 930px;position: relative;z-index: 0;}
.number {width: 380px;height: 29px;margin-left: 115px;text-align: center;padding-top: 59px;}
.number ul {float: left;position: relative;}
.number li.gray6 {width: 56px;font-size: 14px;line-height: 29px;_line-height: 31px;}
.number li.nobor {width: 10px;border: 0 none;}
.number a li {display: block;width: 21px;color: #f60;position: relative;}
.number li {float: left;display: block;font-size: 24px;height: 27px;line-height: 27px;text-align: center;margin: 0 2px;border-radius: 1px;border: 1px solid #ddd;overflow: hidden;}
.gray6, a.gray6:link, a.gray6:visited {color: #666;}
.gray6, a.gray6:link, a.gray6:visited {color: #666;}
.gray6 {color: #666!important;}
.number li cite {display: block;width: 21px;position: absolute;top: 0;left: 0;z-index: 1;}
.number li em {display: block;width: 21px;}
.number li i {width: 196px;height: 0;border-top: 1px solid #ededed;position: absolute;top: 13px;left: 0;z-index: 0;}
.number li.nobor {width: 10px;border: 0 none;}
.number li.u-secondary {width: 40px;position: relative;text-align: left;}
.number li.u-secondary b {border-style: solid;border-width: 4px 0 4px;border-color: #fff;border-left: 4px solid rgb(102,102,102);width: 0;height: 0;font-size: 0;line-height: 0;position: absolute;left: 33px;top: 11px;}
.number li.u-secondary b s {border-style: solid;_border-style: dashed;border-width: 3px;border-color: transparent;border-left-width: 0;border-left: 3px solid #fff;width: 0;height: 0;font-size: 0;line-height: 0;position: absolute;top: -3px;left: -5px;}
s, strike, del {text-decoration: line-through;}
.search {width: 320px;position: absolute;top: 50px;right: 0;}
.search .form {float: left;border: 1px solid #ccc;border-right: 0 none;width: 280px;height: 36px;position: relative;}
.search .form input {position: absolute;left: 0;top: 0;z-index: 0;color: #bbb;width: 145px;height: 18px;line-height: 18px;border: 0 none;padding: 9px 130px 9px 5px;font: 12px/150% "\5FAE\8F6F\96C5\9ED1",Arial;outline: 0;}
body, button, input, select, textarea {margin: 0 auto;font: 12px tahoma,arial,'Hiragino Sans GB',\5b8b\4f53,sans-serif;}
.search .form span {height: 36px;position: absolute;top: 0;right: 0;z-index: 10;}
.search .form span a {display: block;float: left;width: 35px;height: 20px;line-height: 20px;background: #eee;color: #666;margin: 8px 7px 0 0;display: inline;text-align: center;cursor: pointer;}
.search a.seaIcon {display: block;float: left;width: 39px;height: 30px;background: #f60;padding-top: 8px;cursor: pointer;}
.search a.seaIcon i {display: block;width: 21px;height: 21px;background-position: 0 0;margin: 0 auto;}
.search a.seaIcon i, .m-menu-all h3 em, .nav-cart-btn i.f-cart-icon, a.u-cart s, .u-mui-tab li.f-cart a.u-menus i {display: block;background-image: url(/statics/templates/quyu-1yygkuan/images/head-2014.png?v=141124);background-repeat: no-repeat;}
.g-nav {width: 1190px;height: 40px;line-height: 40px;margin: 0 auto;background: #f60;color: #fff;}
.g-nav .w1190 {position: relative;z-index: 20;}
.w1190 {clear: both;width: 1190px;margin: 0 auto;}
.m-menu {width: 240px;height: 40px;float: left;background: #2af;position: relative;z-index: 60;}
.m-menu-all {width: 240px;position: absolute;left: 0;top: 0;z-index: 20;}
.m-menu-all h3 a {display: block;width: 222px;height: 40px;padding-left: 18px;position: relative;z-index: 5;color: #fff;}
.m-menu-all h3 em {display: block;width: 16px;height: 10px;background-position: -27px 0;position: absolute;right: 16px;top: 15px;}
.m-all-sort {display: block;}
.m-all-sort {width: 238px;height: 438px;background: #fff;border: 1px solid #21a5f7;border-top: 0 none;position: absolute;left: 0;top: 40px;z-index: 200;overflow: hidden;}
.m-all-sort dl.hover {background: #fffdf0;width: 238px;height: 42px;padding: 13px 0 18px;position: relative;z-index: 10;}
.m-all-sort dl {clear: both;border-top: 1px solid #e6e6e6;margin-top: -1px;padding: 13px 0 18px;height: 42px;line-height: 25px;overflow: hidden;}
.m-all-sort dl.hover dt a {color: #f60;}
.m-all-sort dl a {margin-left: 15px;color: #666;}
.m-all-sort dt a {font-size: 15px;color: #333;}
.m-all-sort dl {clear: both;border-top: 1px solid #e6e6e6;margin-top: -1px;padding: 13px 0 18px;height: 42px;line-height: 20px;overflow: hidden;}
body.home .nav-main li.f-nav-home, body.lottery .nav-main li.f-nav-lottery, body.share .nav-main li.f-nav-share, body.group .nav-main li.f-nav-group, body.cooperation .nav-main li.f-nav-invite, body.helper .nav-main li.f-nav-guide {background: #f04900;line-height: 40px;}
.nav-main li {float: left;}
.nav-main li a {display: block;padding: 0 30px;color: #fff;}
.nav-cart {width: 135px;height: 40px;background: #2af;position: relative;z-index: 20;}
.nav-cart-con {width: 239px;background: #fff;border: 1px solid #2af;position: absolute;right: 0;_right: -1px;z-index: 20;font-size: 2px;display: none;overflow: hidden;}
.nav-cart-con .m-loading-2014 {height: 100px;position: relative;display: none;}
.nav-cart-con .m-loading-2014 em {background: url(/statics/templates/quyu-1yygkuan/images/goods_loading2.gif) no-repeat;width: 50px;height: 50px;position: absolute;top: 25px;left: 94px;}
.nav-car-cartEmpty {text-align: center;font-size: 14px;height: 100px;padding: 30px 0;line-height: 50px;position: relative;display: none;color: #666;text-align: center;}
.nav-car-cartEmpty i {display: block;width: 54px;height: 53px;background-position: 0 -30px;margin: 0 auto;}
.m-ser li .u-icons, .g-special li em, .nav-car-cartEmpty i, .u-cartEmpty i {display: block;background-image: url(/statics/templates/quyu-1yygkuan/images/comm-2014.gif?v=1411112);background-repeat: no-repeat;}
.nav-cart-select {clear: both;width: 239px;overflow: hidden;}
.nav-cart-pay {clear: both;}
.nav-cart-btn i.f-cart-icon {display: block;width: 21px;height: 20px;float: left;background-position: 0 -34px;position: absolute;top: 10px;left: 17px;display: inline;}
.nav-cart-btn a {display: block;color: #fff;height: 40px;line-height: 40px;padding-left: 42px;position: relative;cursor: pointer;}




toubu  yishang

.g-content {
clear: both;
}.home-banner {
width: 710px;
margin-left: 240px;
display: inline;
float: left;
}
.what-1yyg a {
display: block;
width: 208px;
height: 108px;
padding: 5px 15px;
}
.slide-scroll {
width: 709px;
height: 300px;
position: relative;
overflow: hidden;
border-right: 1px solid #ddd;
}.m-guide-con {
width: 709px;
height: 300px;
position: absolute;
left: 0;
top: 0;
z-index: 5;
}.m-guideBg {
width: 709px;
height: 300px;
background: #000;
filter: alpha(opacity=80);
-moz-opacity: 0.8;
-khtml-opacity: 0.8;
opacity: 0.8;
position: absolute;
top: 0;
left: 0;
z-index: 0;
}.m-guide {
width: 709px;
height: 300px;
position: absolute;
top: 0;
left: 0;
z-index: 10;
}.m-guide li {
width: 618px;
height: 300px;
margin: 0 auto;
}.m-guide li.f-step1 a {
width: 170px;
height: 55px;
top: 190px;
left: 433px;
}.m-guide li a {
display: block;
position: absolute;
background: #fff;
opacity: 0;
filter: alpha(opacity=0);
}.m-guide li img {
width: 618px;
}.m-guide li.f-step2 a {
width: 146px;
height: 56px;
top: 217px;
left: 518px;
}.m-guide li.f-step3 a {
width: 150px;
height: 56px;
top: 214px;
left: 497px;
}.m-guide li.f-step4 a {
width: 170px;
height: 56px;
top: 215px;
left: 473px;
}.m-guide li.f-step5 a {
width: 150px;
height: 55px;
top: 123px;
left: 470px;
z-index: 12;
}.m-guide li.f-step6 a {
width: 228px;
height: 54px;
top: 191px;
left: 360px;
}.m-guide a.m-guide-close {
background: url(/statics/templates/quyu-1yygkuan/images/step-close.gif?v=141111) no-repeat;
width: 30px;
height: 30px;
display: block;
position: absolute;
right: 0;
top: 0;
}.u-guide-arrow a.u-guide-prev {
left: 0;
}.u-guide-arrow a.u-guide-prev s {
background-position: 0 0;
}.u-guide-arrow a s {
display: block;
background-image: url(/statics/templates/quyu-1yygkuan/images/guide-arrow-2014.gif?v=141111);
background-repeat: no-repeat;
width: 14px;
height: 39px;
}.u-guide-arrow a.u-guide-next {
right: 0;
}.u-guide-arrow a.u-guide-next s {
background-position: -28px -40px;
}.u-guide-arrow a s {
display: block;
background-image: url(/statics/templates/quyu-1yygkuan/images/guide-arrow-2014.gif?v=141111);
background-repeat: no-repeat;
width: 14px;
height: 39px;
}
.m-slides {
width: 750px;
height: 298px;
overflow: hidden;
position: relative;
}.rslides_nav.next {
right: 0;
left: auto;
}
.home-event {
width: 239px;
border-right: 1px solid #ddd;
}.what-1yyg {
height: 118px;
border-top: 1px solid #ddd;
border-bottom: 1px solid #ddd;
overflow: hidden;
}.honesty {
float: left;
height: 169px;
padding-top: 11px;
}.honesty ul {
display: inline-block;
}.honesty li {
float: left;
width: 70px;
text-align: center;
margin: 8px 0 8px 7px;
display: inline;
}.honesty li a {
color: #666;
height: 65px;
display: block;
cursor: pointer;
}.honesty li i.i1 {
background-position: 0 0;
}.honesty li i {
display: block;
width: 37px;
height: 37px;
margin: 0 auto 5px;
-webkit-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-o-transition: all .3s ease-in-out;
-ms-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}.honesty li i, .index_news b, .m-other a.u-more {
background-image: url(/statics/templates/quyu-1yygkuan/images/index_honesty-2014.gif?v=141124);
background-repeat: no-repeat;
}
.honesty li i.i2 {
background-position: -39px 0;
}.honesty li i.i3 {
background-position: -80px 0;
}.honesty li i.i4 {
background-position: 0 -40px;
}.honesty li i.i5 {
background-position: -39px -40px;
}.honesty li i.i6 {
background-position: -79px -40px;
}.index_news {
clear: both;
height: 122px;
border-top: 1px solid #ddd;
border-bottom: 1px solid #ddd;
padding: 15px 5px 0 15px;
}.index_news dt {
font-size: 18px;
color: #333;
}.index_news dd {
display: block;
height: 22px;
line-height: 22px;
margin-top: 6px;
overflow: hidden;
word-break: break-all;
}.index_news dd b {
float: left;
display: block;
background-position: -123px 0;
width: 3px;
height: 3px;
position: relative;
top: 10px;
margin-left: 2px;
display: inline;
}.index_news dd a {
color: #666;
font-size: 14px;
word-break: break-all;
height: 22px;
line-height: 22px;
display: block;
margin-left: 10px;
}.g-title {
clear: both;
height: 36px;
line-height: 36px;
padding: 10px 0;
}.g-title h3 {
font-size: 22px;
color: #333;
}.g-title h3 span {
display: inline-block;
color: #999;
font-size: 14px;
position: relative;
top: 2px;
_top: 0;
padding-left: 5px;
}.g-title h3 span em {
margin: 0 3px;
}.orange, a.orange:link, a.orange:visited {
color: #F60;
}.m-other cite {
display: block;
padding-top: 4px;
}.m-other a {
float: left;
color: #f60;
font-size: 14px;

}.m-other a.u-more {
display: block;
width: 36px;
height: 36px;
line-height: 36px;
background-position: -132px 0;
font-size: 12px;
color: #999;
text-align: center;
margin-left: 5px;
display: inline;
}.honesty li i, .index_news b, .m-other a.u-more {
background-image: url(/statics/templates/quyu-1yygkuan/images/index_honesty-2014.gif?v=141124);
background-repeat: no-repeat;
}
.m-other a.u-more:hover{background-position:-132px -40px;text-decoration:none;color:#f60;}
.g-hot {
position: relative;
}.g-hot {
clear: both;
width: 1190px;
height: 713px;
overflow: hidden;
}.g-hotL {
width: 948px;
height: 713px;
position: relative;
z-index: 5;
}.g-hotL-list:hover {
position: relative;
z-index: 2;
}.g-hotL-list {
float: left;
width: 236px;
height: 356px;
margin-bottom: -1px;
position: relative;
z-index: 0;
display: inline-block;
}.g-hotL-list:hover .g-hotL-con {
border: 1px solid #f60;
position: absolute;
top: 0;
left: 0;
-moz-box-shadow: 3px 3px 3px #d8d8d8;
-webkit-box-shadow: 3px 3px 3px #d8d8d8;
box-shadow: 3px 3px 3px #d8d8d8;
}.g-hotL-con {
width: 216px;
height: 325px;
border: 1px solid #ddd;
border-right: 0 none;
padding: 15px 10px;
position: absolute;
z-index: 1;
display: inline-block;
overflow: hidden;
}.g-hotL-list li.g-hot-pic {
float: left;
width: 178px;
height: 178px;
margin: 0 19px;
display: inline;
}.g-hotL-list li {
font-size: 14px;
}.g-hotL-list li a {
clear: both;
color: #333;
}.g-hotL-list li img {
display: block;
width: 178px;
height: 178px;
}.g-hotL-list li.g-hot-name {
clear: both;
width: 216px;
height: 20px;
line-height: 20px;
padding-top: 12px;
overflow: hidden;
word-break: break-all;
}.g-hotL-list li.gray {
line-height: 18px;
font-size: 12px;
}.g-hotL-list li.g-progress {
float: left;
height: 48px;
margin: 7px 0;
overflow: hidden;
}.g-progress dl.m-progress {
width: 216px;
overflow: hidden;
}dl.m-progress {
width: 216px;
font-size: 12px;
overflow: hidden;
}.g-progress dl.m-progress dt {
width: 216px;
height: 6px;
overflow: hidden;
background: #ddd;
margin-bottom: 5px;
}dl.m-progress dt {
width: 216px;
height: 6px;
overflow: hidden;
background: #ddd;
margin-bottom: 5px;
}.g-progress dl.m-progress dt b {
display: block;
height: 6px;
filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#ff934b',endColorStr='#ff6601',gradientType='1');
background: -moz-linear-gradient(0deg,#ff934b,#ff6601);
background: -webkit-gradient(linear,0% 0,100% 0,from(#ff934b),to(#ff6601));
background: -ms-linear-gradient(left,#ff934b 0,#ff6601 100%);
background: -o-linear-gradient(0deg,#ff934b,#ff6601);
}
.g-progress dl.m-progress dd span.orange {
width: 33%;
}.g-progress dl.m-progress dd span {
height: 36px;
color: #bbb!important;
line-height: 16px;
}.m-progress dd span.orange {
width: 33%;
}.m-progress dd span {
height: 36px;
color: #bbb!important;
line-height: 16px;
}.g-progress dl.m-progress dd span.orange em {
color: #f60;
}.g-progress dl.m-progress dd span em {
display: block;
font-size: 14px;
}.g-progress dl.m-progress dd span.gray6 {
width: 34%;
text-align: center;
}.g-progress dl.m-progress dd span.blue em {
color: #2af;
}.g-hotL-list li a.u-imm {
clear: both;
display: block;
width: 136px;
height: 35px;
line-height: 35px;
border-radius: 3px;
background: #f60;
color: #fff;
font-size: 16px;
text-align: center;
margin: 0 auto;
border-radius: 2px;
}.g-hotR {
width: 240px;
height: 711px;
overflow: hidden;
border: 1px solid #ddd;
position: relative;
}.g-hotR .u-are {
height: 25px;
padding: 15px 0 0 10px;
font-size: 18px;
overflow: hidden;
background: #fff;
position: relative;
top: 0;
right: 0;
z-index: 4;
color: #333;
}.g-hotR .g-zzyging {
clear: both;
width: 220px;
height: 623px;
margin: 0 auto;
padding: 0 10px;
overflow: hidden;
position: absolute;
right: 0;
top: 40px;
margin-top: -1px;
}
ul#buyList {
margin: 0 auto;
font: 12px tahoma,arial,'Hiragino Sans GB',\5b8b\4f53,sans-serif;
}.g-zzyging li {
float: left;
height: 58px;
padding: 15px 0;
border-top: 1px dotted #ddd;
overflow: hidden;
position: relative;
}.g-zzyging span {
width: 50px;
height: 50px;
position: absolute;
left: 0;
top: 19px;
}.g-zzyging p {
float: left;
margin-left: 60px;
display: inline;
height: 58px;
overflow: hidden;
}.g-progress {
height: 48px;
margin: 0 auto;
overflow: hidden;
}.soon-list li dl.m-progress {
width: 266px;
}.g-progress dl.m-progress {
width: 216px;
overflow: hidden;
}dl.m-progress {
width: 216px;
font-size: 12px;
overflow: hidden;
}.soon-list li dl.m-progress dt {
width: 266px;
}.g-progress dl.m-progress dt {
width: 216px;
height: 6px;
overflow: hidden;
background: #ddd;
margin-bottom: 5px;
}dl.m-progress dt {
width: 216px;
height: 6px;
overflow: hidden;
background: #ddd;
margin-bottom: 5px;
}.g-progress dl.m-progress dt b {
display: block;
height: 6px;
filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#ff934b',endColorStr='#ff6601',gradientType='1');
background: -moz-linear-gradient(0deg,#ff934b,#ff6601);
background: -webkit-gradient(linear,0% 0,100% 0,from(#ff934b),to(#ff6601));
background: -ms-linear-gradient(left,#ff934b 0,#ff6601 100%);
background: -o-linear-gradient(0deg,#ff934b,#ff6601);
}dl.m-progress dt b {
display: block;
height: 6px;
filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#ff934b',endColorStr='#ff6601',gradientType='1');
background: -moz-linear-gradient(0deg,#ff934b,#ff6601);
background: -webkit-gradient(linear,0% 0,100% 0,from(#ff934b),to(#ff6601));
background: -ms-linear-gradient(left,#ff934b 0,#ff6601 100%);
background: -o-linear-gradient(0deg,#ff934b,#ff6601);
}.soon-list li dl.m-progress dd {
width: 266px;
}.g-progress dl.m-progress dd {
font-size: 12px;
}
.g-progress dl.m-progress dd span.gray6 em {
color: #666;
}.soon-list li a.u-now:hover {
background: #f40;
}.soon-list li a.u-now {
float: left;
width: 136px;
background: #f60;
color: #fff;
font-size: 16px;
margin: 0 7px 0 58px;
display: inline;
}.soon-list li a.u-now, .soon-list li a.u-cart {
float: left;
display: block;
height: 35px;
line-height: 35px;
text-align: center;
border-radius: 2px;
cursor: pointer;
}a.u-now:hover {
background: #f40;
}.soon-list-con:hover .soon-list {
width: 266px;
position: absolute;
left: 0;
top: -1px;
border: 1px solid #f60;
overflow: hidden;
-moz-box-shadow: 3px 3px 3px #d8d8d8;
-webkit-box-shadow: 3px 3px 3px #d8d8d8;
box-shadow: 3px 3px 3px #d8d8d8;
}.soon-list {
width: 267px;
height: 367px;
padding: 15px;
border-left: 1px solid #ddd;
border-bottom: 1px solid #ddd;
margin-left: -1px;
margin-bottom: -1px;
overflow: hidden;
position: relative;
}
.clear:after, .clrfix:after {
content: ' ';
display: block;
clear: both;
height: 0;
visibility: hidden;
}.g-single-sun {
clear: both;
height: 503px;
}.singleL {
width: 294px;
height: 509px;
border: 1px solid #ddd;
font-size: 14px;
overflow: hidden;
}.singleL dt {
padding-top: 13px;
height: 340px;
}.singleL dt img {
width: 270px;
height: 340px;
display: block;
}.singleL dt, .singleL dd.u-user {
padding: 0 12px;
}.singleL dd {
float: left;
}.singleL dd p.u-head {
width: 50px;
height: 50px;
position: relative;
margin-right: 10px;
}.singleL dd p {
float: left;
}.singleL dd p.u-head img {
width: 50px;
height: 50px;
border-radius: 50px;
display: block;
}fieldset, img {
border: 0;

}.singleL dd p.u-head i {
background: url(/statics/templates/quyu-1yygkuan/images/index08-2014.png) no-repeat;
width: 50px;
height: 50px;
position: absolute;
left: 0;
top: 0;
}.singleL dd p.u-info {
width: 210px;
padding-top: 5px;
overflow: hidden;
}.singleL dd p {
float: left;
}.singleL dd span {
display: block;
height: 20px;
overflow: hidden;
}.singleL dd span a {
color: #2af;
max-width: 100px;
height: 20px;
overflow: hidden;
display: block;
float: left;
word-break: break-all;
}.singleL dd p em {
font-size: 12px;
color: #bbb;
margin-left: 3px;
}.singleL dd p cite {
display: block;
width: 210px;
height: 20px;
overflow: hidden;
}.singleL dd.m-summary {
display: block;
clear: both;
width: 274px;
height: 61px;
_height: 56px;
background: #f2f2f2;
padding: 11px 10px 13px;
position: relative;
border-top: 1px solid #ddd;
line-height: 21px;
}.singleL dd {
float: left;
}.singleL dd.m-summary cite {
display: block;
height: 61px;
overflow: hidden;
}.singleL dd.m-summary a {
color: #999;
}.singleL dd.m-summary b {
border-style: solid;
border-width: 0 6px 6px;
border-color: #fff;
border-bottom: 6px solid rgb(221,221,221);
width: 0;
height: 0;
font-size: 0;
line-height: 0;
position: absolute;
left: 32px;
top: -7px;
}.singleL dd.m-summary b s {
border-style: solid;
_border-style: dashed;
border-width: 6px;
border-color: transparent;
border-top-width: 0;
border-bottom: 6px solid #f2f2f2;
width: 0;
height: 0;
font-size: 0;
line-height: 0;
position: absolute;
top: 1px;
left: -6px;
}.singleR {
width: 894px;
border-top: 1px solid #ddd;
}.singleR li {
float: left;
border: 1px solid #ddd;
border-top: 0 none;
text-align: center;
margin-left: -1px;
display: inline;
width: 270px;
height: 222px;
padding: 14px 13px 18px 14px;
overflow: hidden;
}.singleR img {
width: 270px;
height: 195px;
display: block;
}.singleR a p {
display: block;
color: #333;
font-size: 14px;
}
.singleR a:hover p, .singleR a p:hover {
color: #f60!important;
text-decoration: underline!important;
cursor: pointer;
}
.g-zzyging a.blue:hover {
text-decoration: underline;
}.g-hotR a.u-ongoing:hover, .g-hotR .u-see100 a:hover {
color: #f60;
text-decoration: underline;
}.g-hotL-list li.g-hot-name a:hover {
color: #f60;
text-decoration: underline;
}.g-hotL-list li a.u-imm:hover {
background: #f40;
}
.m-all-sort dl a:hover {
color: #f60;
text-decoration: underline;
}
.honesty li a:hover i.i1{background-position:0 -80px;}.honesty li a:hover i.i2{background-position:-39px -79px;}.honesty li a:hover i.i3{background-position:-80px -80px;}.honesty li a:hover i.i4{background-position:0 -121px;}.honesty li a:hover i.i5{background-position:-39px -121px;}.honesty li a:hover i.i6{background-position:-79px -121px;}
.honesty li a:hover {
color: #f60;
}.search .form a:hover {
background: #ddd;
color: #666;
}.g-toolbar li a:hover {
color: #f60;
text-decoration: underline;
}.nav-main li a:hover {
background: #f04900;
color: #fff;
}.nav-cart-btn a:hover {
color: #fff;
text-decoration: underline;
}.commodity li.comm-info a:hover {
color: #f60;
text-decoration: underline;
}.index_news dd a:hover {
color: #f60;
text-decoration: underline;
}.m-other a:hover {
text-decoration: underline;

}.soon-list li.soon-list-name a:hover {
color: #f60;
text-decoration: underline;
}.singleR p {
padding-top: 10px;
height: 20px;
line-height: 20px;
overflow: hidden;
}.singleL dd span a:hover, .singleL dd p cite a:hover {
text-decoration: underline;
}
.singleL dd.u-user {
height: 50px;
padding: 10px 0 10px 13px;
}.singleL dt {
padding-top: 13px;
height: 340px;
}.g-wrap {
margin: 0 auto;
padding-bottom: 35px;
}







</style>
<body id="loadingPicBlock" class="home" rf="1" >
<SCRIPT language=javascript>
<!--
window.onerror=function(){return true;}
// -->
</SCRIPT>



<style>  
 .g-snow-con {
position: relative;
top: 130px;
z-index: 1001;
margin-bottom: -30px;
}
.g-snow {
background: url(<?php echo G_UPLOAD_PATH; ?>/banner/snow.png?v=141217) center no-repeat;
height: 30px;
_width: 1211px;
_margin: 0 auto;
}
.g-snow2 {
background: url(<?php echo G_UPLOAD_PATH; ?>/banner/snow2.png?v=141217) center no-repeat;
height: 30px;
_width: 1012px;
_margin: 0 auto;
display: none;
} 
    .d {
 
 top: 0px;
 margin-top: 0px;
 padding-top:0px;
 margin-right: auto;
 margin-bottom: 0;
 margin-left: auto;
 background-image: url(<?php echo G_UPLOAD_PATH; ?>/banner/bg_2015.gif);
 background-repeat: no-repeat;
 background-position: center top; 
} </style>

<div id="divSnow" class="g-snow-con clrfix">
        <div class="g-snow"></div>
        <div class="g-snow2"></div>
    </div><div class="d"><div>
    <div class="wrapper">
        <!--头部-->
        <!--顶部-->
 <div class="g-toolbar">
     <div class="w1190">
         <ul class="fl">
             <li>
                 <div class="u-menu-hd">
                     <a id="addSiteFavorite" href="javascript:;" title="收藏">收藏<?php echo _cfg("web_name_two"); ?></a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liMobile" class="u-arr">
                 <div class="u-menu-hd">
                     <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" title="手机版">手机<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
               <div class="u-select u-select-weix">
                     <p>
                         <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" target="_blank">
                             <img src="<?php echo G_WEB_PATH; ?>/statics/templates/quyu-1yygkuan/images/sjb.png" />
                             下载客户端
                         </a>
                     </p>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/group_qq" target="_blank" title="官方QQ群">官方QQ群</a>
                 </div>
             </li>
                   <li class="f-gap"><s></s></li>
              <li>
                 
             </li>
             
              <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                    
                 </div>
             </li>
         </ul>
         <ul id="ulTopRight" class="fr">
         <?php if(get_user_arr()): ?>
<li>
<div class="u-menu-hd u-menu-login">
<a class="blue" title="<?php echo get_user_name(get_user_arr(),'username'); ?>" href="<?php echo WEB_PATH; ?>/member/home"><?php echo get_user_name(get_user_arr(),'username'); ?></a>
<a title="退出" href="<?php echo WEB_PATH; ?>/member/user/cook_end">[退出]</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>

<?php  else: ?>
<li id="logininfo">
<div class="u-menu-hd">
<a title="登录" href="<?php echo WEB_PATH; ?>/login">登录</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<li>
<div class="u-menu-hd">
<a title="注册" href="<?php echo WEB_PATH; ?>/register">注册</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<?php endif; ?>
<li id="liMember" class="u-arr">
<div class="u-menu-hd">
<a href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" title="购买记录"><?php echo _cfg('web_name_two'); ?>记录</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/orderlist" title="获得的商品">获得的商品</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/modify" title="个人设置">个人设置</a></span>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liTopUMsg" class="u-arr" style="display: none;">
                 <div class="u-menu-hd">
                     <a href="#" title="消息">消息</a>
                     <h3 style="display: none;"></h3>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="#" title="好友请求">好友请求</a></span>
                     <span><a href="#" title="系统消息">系统消息</a></span>
                     <span><a href="#" title="私信" class="f-msg">私信</a></span>
                 </div>
             </li>
             <li class="f-gap" style="display: none;"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="帮助">快速冲值</a>
                 </div>
             </li>
             <li>
                 <div class="u-menu-hd">
                     <a href="#" title="帮助">帮助</a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a id="btnTopQQ" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                 </div>
             </li>
         </ul>
     </div>
 </div><!--头部-->

 <div class="g-header" >
     <div class="w1190">
     
         <div id="topLogoAd" class="logo_1yyg fl">
			  <a class="logo" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>">
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
				</a>
         </div>
         <div class="search_cart_wrap fr">
             <div class="number">
                 <a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
                      <ul id="ulHTotalBuy">
      <li class="nobor gray6" style="width: 56px;">累计参与</li>

                       <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
				<li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor gray6 u-secondary">人次<b><s></s></b></li>
			</ul>
                 </a>
             </div>

             <div class="search">
                 <div class="form">
                      <input id="txtSearch" type="text" value=""输入手机试试"" />
                     <span>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/电脑" target="_blank">电脑</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/手机" target="_blank">手机</a>
                     </span>
                 </div>
                 <a id="butSearch" href="javascript:;" class="seaIcon"><i></i></a>
             </div>
         </div>
     </div>
 </div>

  



 <!--导航-->
 <!--
 <?php 
		if($this->db){
			$cmodel=$this->db;
		}else{
			$cmodel=$mysql_model;
		}

		$two_cate_list = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");
	 ?>
 <div class="g-nav">
     <div class="w1190">
         <div id="divGoodsSort" class="m-menu fl">
             <div class="m-menu-all">
                 <h3><a href="<?php echo WEB_PATH; ?>/goods_list">全部商品分类</a><em></em></h3>
             </div>
             <div id="divSortList" class="m-all-sort" >
                 <?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
						<?php 
							//$brand=$this->db->GetList("select id,cateid,name from `@#_brand` where `cateid` LIKE '%$catelist[cateid]%' order by `order` DESC");

								$cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
								//echo "select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC";


 							$i=$key+1;
						 ?>

							<dl>
								<dt class="U-goods-<?php echo $i; ?>">
									<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0"> <i
										class="F-goods-img"></i><?php echo $catelist['name']; ?><i class="F-goods-arrow"></i>
									</a>
								</dt>

								<?php 

									if(is_array($cate2)){
									   foreach($cate2 AS $bval){
								 ?>
								<dd>
									<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $bval['cateid']; ?>_0_0"><?php echo $bval['name']; ?></a>
								</dd>
								<?php 
									 }}
								 ?>

							</dl>

							<?php  endforeach; $ln++; unset($ln); ?>
             </div>

         </div>
         <div class="nav-main fl">
             <ul>
                 <li class="f-nav-home"><a href="/">首页</a></li>
                	<?php echo Getheader('index'); ?>
             </ul>
         </div>
         <div id="divHCart" class="nav-cart fr">
             <div class="nav-cart-btn">
                 <a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" target="_blank"><i class="f-cart-icon"></i>购物车<span id="sCartTotal">(0)</span></a>
             </div>
             <div class="nav-cart-con">
                 <div class="m-loading-2014"><em></em></div>
                 <div class="nav-car-cartEmpty"><i></i>您的购物车为空 !</div>
                 <div class="nav-cart-select"></div>
                 <div class="nav-cart-pay"></div>
             </div>
         </div>

     </div>
 </div>
 -->
 <!--所有商品下拉特效-->
   <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('/statics/templates/quyu-1yygkuan/js/Bottom2.js?v=' + GetVerNum());
 </script>
    <script>
        $(document).ready(function(){
                $("#divGoodsSortList").hover(function() {
                $(this).addClass("U-goods-hover").children("div.U-goods-class").show().prev().find("b").addClass("b_Triangle")
                }
                ,function() {
                    $(this).removeClass("U-goods-hover").children("div.U-goods-class").hide().prev().find("b").removeClass("b_Triangle")
                }
                ).find("dl").each(function() {
                    $(this).hover(function() {
                    $(this).addClass("U-list-hover")
                }
                ,function() {
                    $(this).removeClass("U-list-hover")
                }
                )});

        });
    </script>
    <script>
$(function(){
    $("#sCart,#liTopCart").hover(
        function(){
            $("#sCartlist,#sCartLoading").show();
            $("#sCartlist p,#sCartlist h3").hide();
            $("#sCart .mycartcur").remove();
            $("#sCartTotal2").html("");
            $("#sCartTotalM").html("");
            $.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartheader/="+ new Date().getTime(),function(data){
                $("#sCart .mycartcur").remove();
                $("#sCartLoading").before(data.li);
                $("#sCartTotal2").html(data.num);
                $("#sCartTotalM").html(data.sum);

                $("#sCartLoading").hide();
                $("#sCartlist p,#sCartlist h3").show();
            });
        },
        function(){
            $("#sCartlist").hide();
        }
    );
    $("#sGotoCart").click(function(){
        window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
    });
})
function delheader(id){
    var Cartlist = $.cookie('Cartlist');
    var info = $.evalJSON(Cartlist);
    var num=$("#sCartTotal2").html()-1;
    var sum=$("#sCartTotalM").html();
    info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];

    delete info[id];
    //$.cookie('Cartlist','',{path:'/'});
    $.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
    $("#sCartTotalM").html(info['MoenyCount']);
    $('#sCartTotal2').html(num);
    $('#sCartTotal').text(num);
    $('#btnMyCart em').text(num);
    $("#mycartcur"+id).remove();
}
$(function(){
    $(".M-my-1yyg").mouseover(function(){
        $(this).addClass("menu-hd-hover");
    });
    $(".M-shop").mouseover(function(){
        $(this).addClass("menu-hd-hover");
    });
    $(".M-my-1yyg").mouseout(function(){
        $(this).removeClass("menu-hd-hover");
    });
    $(".M-shop").mouseout(function(){
        $(this).removeClass("menu-hd-hover");
    });
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='输入"汽车"试试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入"汽车"试试');
		}
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});

var getAllNum = function(){
    var a = $("#spBuyCount");
    var b = a.text();
    $.ajax({
        url: "<?php echo WEB_PATH; ?>/api/wrenciajax/get",
        type:"POST",
        success: function(data){
            if(b == data){

            }else{
                a.css({
                    color:"white",background:"red"
                }).html(data);
                a.animate({
                    opacity:0.1
                }
                ,{
                    queue:false,duration:1000,complete:function(){
                        a.show().css({
                            color:"#22AAFF",background:"#F5F5F5",opacity:1
                        })
                    }
                })

            }
        }
    });
    //setTimeout(getAllNum,3000);
};
getAllNum();
</script>
 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_JS; ?>/Bottom.js?v=' + GetVerNum());
 </script>
<!--end所有商品下拉特效-->
