<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>登陆与注册－<?php echo C('site_title');?></title>
<meta name="keywords" content="LANRAIN 微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<!-- add new html css -->
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/indexhome.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<!-- old html mode -->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery183.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>
<!-- add new html mode -->
<script type="text/javascript" src="<?php echo RES;?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/project.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/wei-index.js"></script>

<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body oncontextmenu="return false" onselectstart ="return false">
	 <!--[if lte IE 8]>  <script language="javascript">$(function (){$.browser.msie&&$("#ie9-tips").show().find("#stopSuggestA").click(function(){$("#ie9-tips").hide()})})</script><![endif]-->
<div class="nav clearfix">
	<div class="nav-content">
		<h1 class="left" onclick="location.herf='#'">创想·微信营销，如此简单！</h1>
		<div class="left city">
			<h2>微信营销，如此简单！</h2>
				
		</div>
		<div class="right line-li">
			<ul>
				<li>
					<a href="/" class="hover">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/fc');?>" >功能介绍</a>
				</li>
				
				<li>
					<a href="<?php echo U('Home/Index/price');?>">资费说明</a>
				</li>
				
				<li>
					<a href="<?php echo U('Home/Index/about');?>">关于我们</a>
				</li>
				<li>
					<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>" class='hover'>登录</a>
					<a href="<?php echo U('Index/login');?>">注册</a>
					<?php else: ?>
					您好,<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>
					<a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
				</li>
                <li>
					<a href="<?php echo U('Home/Index/help');?>"  class="navtwo" target="_black">帮助</a>
				</li>
			</ul>
		</div>
	</div>
</div>

	<div id="loginBox">
		<div class="login-panel">
			<h3>登录</h3>
			<div class="login-mod">
				<div class="login-err-panel dn" id="err_area">
					<span class="icon-wrapper"><i class="icon24-login err" style="margin-top:-.2em;*margin-top:0;"></i></span>
					<span id="err_tips"></span>
				</div>
				<form class="login-form" id="login-form">
					<div class="login-un">
						<span class="icon-wrapper"><i class="icon24-login un"></i></span>
						<input type="text" id="username" placeholder="未来购号">
					</div>
					<div class="login-pwd">
						<span class="icon-wrapper"><i class="icon24-login pwd"></i></span>
						<input type="password" id="password" placeholder="密码">
					</div>
				</form>
				<div class="login-help-panel">
					<a id="rememberPwd" class="login-remember-pwd" href="javascript:;">
						<input type="checkbox" id="rememberPwdIcon">记住帐号
					</a>
					<a class="login-forget-pwd" href="<?php echo U('Index/reg');?>">我是新用户!<strong>申请入驻</strong></a>
				</div>
				<div class="login-btn-panel">
					<a class="login-btn" title="点击登录" href="javascript:;" id="login_button" onclick="login();">登录</a>
				</div>
			</div>
		</div>
		<div class="login-cover" onclick="loginBox.toggle(this, event);"></div>
	</div>
<div id="ie9-tips" class="clearfix">
	<div id="tipsPanel">
		<div id="tipsDesc">系统检测到您所使用的浏览器版本较低，推荐使用<a href="http://www.firefox.com.cn/download/" target="_blank">Firefox</a>或<a href="http://www.google.cn/intl/zh-CN/chrome/browser/index.html" target="_blank">Chrome</a>浏览器打开，否则将无法体验完整产品功能。</div>
		<a id="stopSuggestA" href="javascript:;">×</a>
	</div>
</div>

<script>
var $do_submit = false;

// 绑定回车键
$('#loginBox').keydown(function(e){
	if(13 == event.keyCode){
		login();
	}
});

	function login()
	{
		if (true == $do_submit)
		{
			return false;
		}

		var $pre_submit = '登录', $done_submit = '登录中...';
		var $username = $('#username').val(), $password = $('#password').val(), $keepalive = $('#rememberPwdIcon').val();
		$('#login_button').text($done_submit);
		$do_submit = true;

		// check
		if ('' == $username || '' == $password)
		{
			$('#err_tips').text('您输入的未来购号或密码错误，请重新输入！');
			$('#err_area').show();
			$('#login_button').text($pre_submit);
			$do_submit = false;
			return false;
		}

		var $login_data = {
			username:$username,
			password:$password,
			keepalive:$keepalive
		};
		$.post('/login', $login_data, function(rs){
			if(rs.errno == 200)
			{
				location.href = rs.url_route;
			}
			else
			{
				$('#err_tips').text(rs.error);
				$('#err_area').show();
				$('#login_button').text($pre_submit);
			}
			$do_submit = false;
		}, 'json');
	}
</script><!-- banner -->

<div class="banner gbanner"></div>
<div class="main">
<style>

.contaier{ zoom: 1; }
.contaier:after{ content : '.'; display: block; width: 0; height: 0; visibility: hidden; line-height: 0; font-size: 0; clear: both; }
/*基础*/
body{ font-size:16px; font-family: Century Gothic, \5FAE\8F6F\96C5\9ED1,\5E7C\5706, Arial, Verdana; color: #323232; }
select,input,textarea{ outline: none; font-family: Century Gothic, \5FAE\8F6F\96C5\9ED1,\5E7C\5706, Arial, Verdana; font-size: 16px;color:#323232 }
textarea{ resize: none; overflow: auto;}
a{ text-decoration: none; color: #007DDB; }
a:hover{ text-decoration: underline; }
/*布局*/
.header{ width: 100%; height: 54px; background-color: #323232; line-height: 54px; color: #fff; position: fixed!important; position: absolute; top: 0; left: 0; z-index: 5;border-bottom:1px solid silver }
.wp{ max-width: 980px!important; width: auto!important; width: 980px; padding: 0 12px; margin: 0 auto; position:relative;}
.contaier{ padding-bottom: 18px; padding-top: 24px; background: #fff; height: auto!important; min-height: 500px; height: 500px; }

.header{ width: 100%; height: 54px; background-color: #323232; line-height: 54px; color: #fff; position: fixed!important; position: absolute; top: 0; left: 0; z-index: 5;border-bottom:1px solid silver }
.think-login,.think-register{ padding-right: 60px; border-right: 1px solid #ddd; }
.think-login,.think-register,.login-other{ margin-top: 36px; min-width: 320px; }
.think-login .head,.think-register .head,.login-other .head{ height: 36px; line-height: 36px; }
.think-login .head strong,.think-register .head strong{ font-weight: normal; font-size: 30px; vertical-align: bottom; }
.think-login .head span,.think-register .head span{ margin-left: 24px; color: #999; }
.think-login .head a,.think-register .head a{ color: #007DDB; margin-left: 6px; text-decoration: underline; }
.think-login .body,.think-register .body{ padding-top: 12px; }
.think-login,.think-register{ float: left; }
.think-form{ padding-bottom: 36px; }
.think-form .must{ font-style: normal; color: #c00; margin-right: 3px; }
.think-form th,.think-form td{ padding: 6px 0; }
.think-form th{ font-weight: normal; vertical-align: top; line-height: 32px; padding-right: 9px; text-align: left; }
.think-form .text{ height: 24px; width: 350px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.think-form .text:focus{ box-shadow: 0 0 5px rgba(52,143,212,.6); border-color: #348FD4; }
.think-form .checkbox{ margin-right: 6px; }
.think-form .submit{ background: #348FD4; color: #fff; font-size: 16px; height: 30px; line-height: 21px; padding: 0 24px; vertical-align: middle; border: 0; cursor: pointer; }
.think-form .submit:hover{ background-color: #2F81BF; }
.think-form select{ height: 32px; padding: 3px; border: 1px solid #ccc; }
.think-form .login .text { height: 24px; width: 250px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.think-form .login .verify { height: 24px; width: 150px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.login-other{ float: left; padding-left: 60px; margin-left: -1px; display: inline; border-left: 1px solid #ddd; }
.login-other .head strong{ font-weight: normal; color: #999; }
</style>
<div class="abody">
        <div class="contaier wp cf">

    <div class="think-login">
        <div class="head">
            <strong>用户登录</strong>
        </div>
        <div class="body think-form ">
            <form action="<?php echo U('Users/checklogin');?>" method="post" class="login">
                <table>
                    <tbody><tr>
                        <th>用户名</th>
                        <td>
                            <input class="text" type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <th>密　码</th>
                        <td>
                            <input class="text" type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <input class="submit" type="submit" value="登录">
                        </td>
                    </tr>
					<tr>
                        <th>&nbsp;</th>
                        <td>
                            &nbsp;
                        </td>
                    </tr><tr>
                        <th>&nbsp;</th>
                        <td>
                            &nbsp;
                        </td>
                    </tr><!--
					   <tr>
                        <th>帐号审核：</th>
                        <td>
                            QQ:<?php echo C('site_qq');?>
                        </td>
                    </tr>-->
                </tbody></table>
            </form>
        </div>
    </div>
    <div class="login-other">
          <div class="head">
            <strong style="font-weight: normal;font-size: 30px;vertical-align: bottom;color: #323232;">用户注册</strong>
		　</div>
        <div class="body think-form ">
            <form action="<?php echo U('Users/checkreg');?>" method="post" class="login">
                <table>
                    <tbody><tr>
                        <th>用户名</th>
                        <td>
                            <input class="text" required="" value="请输入用户名" onclick="if(this.value=='请输入用户名'){this.value=''}" onblur="if(this.value==''){this.value='请输入用户名'}" type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <th>密　码</th>
                        <td>
                            <input class="text" type="password" name="password">
                        </td>
                    </tr>
					 <tr>
                        <th>重复密码</th>
                        <td>
                            <input class="text" type="password" name="repassword">
                        </td>
                    </tr>
					<tr>
                        <th>邮　箱</th>
                        <td>
                            <input class="text" type="text" name="email" value="请输入电子邮箱" onclick="if(this.value=='请输入电子邮箱'){this.value=''}" onblur="if(this.value==''){this.value='请输入电子邮箱'}">
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <input class="submit" type="submit" value="注册">
                        </td>
                    </tr>
					<tr>
                        <th>&nbsp;</th>
                        <td>
                            &nbsp;
                        </td>
                    </tr><!--
					   <tr>
                        <th>帐号审核：</th>
                        <td>
                            QQ:<?php echo C('site_qq');?>
                        </td>
                    </tr>-->
                </tbody></table>
            </form>
        </div>
    </div>
</div>
</div>
    </div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
<div class="footer">
	<div class="footer-content clearfix">
		
		<div class="copyright">
			Copyright © 2011-2013 www.weilgo.com. All Rights Reserved 创想公司版权所有 
		</div>
	</div>
</div>
<script>
	function feedbackSubmit(){
		var $data = {
			feedback: $('#feedback-text').val(),
			email: $('#feedback-input').val(),
			url: self.location.href
		};
		$.post('/site/feedback', $data, function(rs){
			alert(rs.error);
			if (200 == rs.code)
			{
				$('#feedback, #feedback_cover').toggleClass('on');
			}
		}, 'json');
	}
</script>
<!--公告信息-->
	<div id="notice_mask"></div>
	<div id="notice_message" style="position: absolute; left: 373.5px; top: 20%;">
		<div class="title">公 告<a onclick="javascript:jQuery('#notice_mask').hide(),jQuery('#notice_message').hide();">×</a></div>
		<div class="content">
			<pre style="white-space:pre-wrap;"><p style="text-align:center;">
	创想官网模板管理改版啦！
</p>
<p>
	随着您们对于模板需求的增加，微官网模板也越来越多，为了以后创想能够有越来越多的漂亮模板，创想团队对模板进行的详细划分，以便您们能更加便捷的选择所需模板。
</p>
<p>
	<span style="line-height:1.5;">亮点一：系统通过对创想7万多用户使用模板的数据统计，筛选出前10名的热门模板推荐给大家，让您能够一键就能找到最钟爱的模板，便捷又高效。</span>
</p>
<p>
	<span style="line-height:1.5;">亮点二：模板进行了详细的划分，分别有经典大方、简约时尚、五彩斑斓、个性定制、VIP尊享，风格各异，根据您们官网模板的需求赶紧来体验吧！</span>
</p>
<p>
	VIP尊享仅支持增强版、至尊版及行业版商户，如果您没有权限，并且已经使用此类模板，请谨慎替换，一旦替换则不能再次使用，给您带来的不便尽请谅解。
</p>
<p style="text-align:right;">
	创想
</p>
<p style="text-align:right;">
	2013-12-08
</p></pre>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#notice_mask').click(function(){
			$('#notice_mask').hide();
			$('#notice_qrcode').hide();
			$('#notice_message').hide();
		});

		$(window).resize(function(){
			$('#notice_qrcode').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_qrcode').outerWidth())/2,
				top: ($(window).height() - $('#notice_qrcode').outerHeight())/2
			});

			$('#notice_message').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_message').outerWidth())/2,
				top: ($(window).height() - $('#notice_message').outerHeight())/2
			});
		});
	});
</script>
</body>
</html>