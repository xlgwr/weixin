<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费说明－<?php echo C('site_title');?></title>
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

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style-price.css"/>

<div class="banner jbanner"></div>
<div class="main">
   <div class="pos">当前位置: <a href="<?php echo C('site_url');?>"><?php echo C('site_name');?></a> &raquo; <a href="<?php echo C('site_url');?>">帮助中心</a></div>
<div class="abody">
             <div class="qtcontent">
        <div class="document faq">
            <div class="normalTitle"><h2>资费</h2></div>
            <div class="normalContent">
                <div class="section lastSection">
                	<table width="100%" border="0" cellpadding="0" cellspacing="0" class=" ListProduct8">
<thead>
                			<tr>
                				<th class="lefttitle"><strong>微信号流量套餐</strong></th>
                				<th width="100">vip0</th>
                				<th width="100">vip1</th>
                				<th width="100">vip2</th>
                				<th width="100">vip3</th>
                				<th width="100">vip4</th>
                				<th width="100">vip5</th>
                				<th width="100" class="norightborder">vip6</th>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>VIP只是流量套餐（自定义数和赠送的请求数不同而已），点击问号查看详细购买流程！</p>
</span></a></td>
                				<td><span class="price">1<p>元 / 月</p></span></td>
                				<td><span class="price">30<p>元 / 月</p></span></td>
                				<td><span class="price">50<p>元 / 月</p></span></td>
                				<td><span class="price">100<p>元 / 月</p></span></td>
                				<td><span class="price">150<p>元 / 月</p></span></td>
                				<td><span class="price">200<p>元 / 月</p></span></td>
                				<td class="norightborder"><span class="price">300<p>元 / 月</p></span></td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">自定义条数限额 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p><strong>什么是自定义限额数？</strong></p>
<p>自定义分：自定义文本、自定义图文、自定义语音。意思是，你在lanrain写一个图文就少一个自定义图文〔vip0图文、文本、语音都有2000自定义，够挥霍了。〕</p>
</span></span></td>
                				<td>2000</td>
                				<td>3000</td>
                				<td>5000</td>
                				<td>10000</td>
                				<td>15000</td>
                				<td>20000</td>
                				<td class="norightborder">30000</td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">赠送月请求次数 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是请求数？</strong></p>
<p>用户发送一句话，就代表一个请求。
比如：用户发送 "你好！"，系统回复"你也好！"
这就算一个请求，如果系统没回复，则不计。
〔温馨提示：lanrain3G功能〔分类功能〕请求也算在内。3G请求看不到，只是粉丝在浏览里3G网站时候，浏览一篇文章，或者重新打开一个分类就算一个请求。目前3G功能只统计请求并不收费。〕</p>
<p><strong>什么是赠送请求？</strong></p>
<p>用户购买VIP流量套餐后会赠送用户一些功能和请求数，这个请求数被lanrain称为赠送请求数。</p>
</span></span></td>
                				<td>10000</td>
                				<td>150000</td>
                				<td>300000</td>
                				<td>700000</td>
                				<td>1000000</td>
                				<td>2000000</td>
                				<td class="norightborder">3500000</td>
               				</tr>
                			<tr>
             
                		
               				</tr>
                            <tr >
                				<td height="50" class="lefttitle">每月免收活动创建费次数<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是活动创建费？</strong></p>
<p>创建1次活动的基础费是10元,这就是活动创建费。免收活动创建费就是免10元，其他资源消耗还是要正常扣费（如：SN码费用和实际参与抽奖人数的费用）!</p>
</span></span></td>
                				<td>0次</td>
                				<td>1次</td>
                				<td>2次</td>
                				<td>3次</td>
                				<td>4次</td>
                				<td>5次</td>
                				<td class="norightborder">6次</a></td>
               				</tr>
                             <tr >
                				<td height="50" class="lefttitle">底部版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>版权信息？</strong></p>
<p>	V0 页面有:此页面是由【<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>接口平台</a>】系统生成 版权信息</p>
</span></span></td>
                				<td>有</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td class="norightborder">无</a></td>
               				</tr>
                			<tr >
                				<td height="50" class="lefttitle"> <span class="red">先充值，在购买VIP套餐。</span><span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>简单购买流程提醒</strong></p>
<p>先看自己适合什么套餐，然后充值相应人民币得到lanrain币，用lanrain币购买VIP套餐。（lanrain币为<?php echo C('site_name');?>平台通用货币）</p>
</span></span></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>0));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>1));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>2));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>3));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>4));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>5));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>6));?>"><em>立即充值</em></a></td>
                				
                				
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"><strong>基础功能</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle">天气</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">查快递</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                                <tr>
                				<td class="lefttitle">股票查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">翻译</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">百科</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">百度问答</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">人品计算</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">手机归属地查询</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">身份证查询</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">糗事</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">笑话</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">成语字典</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">谜语</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">成语接龙</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">诗歌接龙</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">藏头藏尾诗</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">诗歌赏析</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">解梦</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">号码吉凶</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">健康指数计算器</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">公交查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">火车查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">电影检索</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">网络音乐搜索</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">今日体彩</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">陪聊纯洁版</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">小黄鸡中文陪聊</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">中文过滤敏感词汇</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">小黄鸡英文版</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr >
                				<td class="lefttitle">音英语4-6级(2012-12月)</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>
<td class="lefttitle">语音播报天气</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">机器人学习功能</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">文字转语音</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr >
                				<td class="lefttitle">黄金白银期货</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">翻译朗读开关</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">路况查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">步行导航</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">驾车导航</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">周边生活地图版</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">公交换乘地图版</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">发地理位置直接显示周边</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">自定义LBS数据</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">文本回复模糊匹配</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">图文回复包含匹配</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">回答不上启用第三方接口</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">第三方接口优先支持LBS</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">第三方接口优先(无触发词)</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>



                			<tr>
                				<td height="36" class="lefttitle"><strong>高级功能（需要单独收费）</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999">刮刮卡活动</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>刮刮卡和大转盘活动需要单独收费，价格相同，按次按实际参与人和奖品数计算，</p><p>计算公式：创建活动10元+奖品个数×0.1元+实际参与人数×0.01元，</p><p>请看详细使用说明及费用说明。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999">大转盘活动</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>刮刮卡和大转盘活动需要单独收费，价格相同，按次按实际参与人和奖品数计算，</p><p>计算公式：创建活动10元+奖品个数×0.1元+实际参与人数×0.01元，</p><p>请看详细使用说明及费用说明。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=696&amp;page=1&amp;extra=#pid3753" target="999">优惠券活动</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=696&amp;page=1&amp;extra=#pid3753" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>优惠券活动需要单独收费，价格跟刮刮卡大转盘不同，</p><p>计算公式：创建活动10元+奖品个数×0.02元+实际参与人数×0.01元，</p><p>请看详细使用说明及费用说明。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">投票活动 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>投票活动需要单独收费，</p><p>计算公式：创建活动1元+实际参与投票人数×0.002元</p></span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">会员卡管理</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">店铺管理</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=340" target="999">第三方接口融合</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=340" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>lanrain可以融合其他的接口，跟lanrain接口一起使用。点击问号查看详情，论坛还有很多教程可以查看。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=173&amp;extra=page=2" target="999">淘宝客模块</a> <a href="forum.php?mod=viewthread&amp;tid=173&amp;extra=page=2" target="999" class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>手机淘宝客，结合微信3G网站生成淘宝客网站，轻松赚取佣金。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">其他功能（待定）</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle">技术指导</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">3G网站</td>
                				<td class="checked " >&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义语音</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义图文</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义文本</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">文本导入导出</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">图文导入导出</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                                <tr>
                				<td class="lefttitle">语音导入导出</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
</tbody>
               			</table>
                </div>
            <div class="section lastSection">
<p><a href="forum.php?mod=viewthread&amp;tid=258&amp;page=1#pid1575" target="999" class="red">如何充值购买VIP，请点击查看。</a>有疑问的请QQ<?php echo C('site_qq');?>提问。</p>
               		</div>
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