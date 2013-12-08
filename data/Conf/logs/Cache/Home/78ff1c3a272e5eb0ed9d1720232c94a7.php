<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>关于我们－微信通 微信营销专家</title>
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

<div class="banner hbanner"></div>
<div class="main">
   <div class="pos">当前位置: <a href="<?php echo C('site_url');?>"><?php echo C('site_name');?></a> &raquo; <a href="<?php echo C('site_url');?>">帮助中心</a></div>
<div class="abody">
          <div>
                    	<img style="float:left;margin:0 0 15px 15px;" alt="<?php echo U('site_name');?>" src="tpl/Home/new/common/images/ewm2.jpg">
                        <p>
  <?php echo C('site_name');?>志在帮助那些不懂技术的个人或企业建立属于自己的接口程序，让完全不懂技术的个人或企业通过简单的配置，即可拥有强大的功能。企业使用<?php echo C('site_name');?>可以用低廉的成本实现智能客服机器人功能，淘宝店家可以轻松实现店铺商品和粉丝的关联与互动，我们也即将为微信地方号运维人员提供强大的地方运维的管理功能模块（如商家管理,店铺管理,会员管理,活动管理,优惠券管理,以及基于LBS的各种服务的开发!）</p><br />
                        <p><?php echo C('site_name');?>不提供文章内容库，避免同质化的内容泛滥，同时<?php echo C('site_name');?>对用户有门槛要求，必须拥有自己的域名空间。<?php echo C('site_name');?>为个人或企业提供了强大的自定义回复及图文信息分类功能，通过此功能能更好做出属于自己或企业特色的内容，并自动建立一个个人或企业手机3G网站，更好的服务于您的客户。</p><br />
<p><?php echo C('site_name');?>还提供了一些便民查询和娱乐游戏功能供个人或企业使用，如：查天气，查快递，翻译，百科，人品计算，手机归属地查询，笑话，成语接龙，公交查询，谜语，百度问答，解梦，古诗欣赏等等，根据需求的不同选择某些功能，能更好的提高粉丝活跃度，忠诚度。</p><br />
<p><?php echo C('site_name');?>除了自定义库,也支持自定义关键词触发指定接口url处理业务(完美的兼容第三方微信接口和自己的业务接口)即可实现和你们自己的数据库的信息通信!  
                        </p>
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