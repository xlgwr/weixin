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

<script type="text/javascript" src="<?php echo RES;?>/js/inpage_linkid.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/analytics.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/ga.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/analytics.js"></script>

<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var erwei_time = null;
		$(".erwei").hover(function(){
			$(".erwei_big").show();
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
		$(".erwei_big").mouseenter(function(){
			if(erwei_time){
				clearTimeout(erwei_time);
			}
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
	});
</script>
</head>
<body>
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
				
					<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>" class='hover'>登录</a></li>
					<li><a href="<?php echo U('Index/login');?>">注册</a></li>
					<?php else: ?>
					<li><a href="<?php echo U('User/Index/index');?>" ><span style="color:red"><?php echo (session('uname')); ?></span></a></li>
					<li><a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red">管理中心</span></a></li>
					<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	
				
                <li>
					<a href="<?php echo U('Home/Index/help');?>"  class="navtwo"  target="_black">帮助</a>
				</li>
			</ul>
		</div>
	</div>
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

<div class="Public-content clearfix">
	<div class="Public">
		<h2 class="Public-h2">关于创想微信</h2>
		<div class="Public-box">
			<div class="Proxy">
				<p>   创想微信是打造的一个专门针对商家企业及个人微信公众账号提供营销推广服务的第三方平台。创想微信志在帮助那些不懂技术的个人或企业建立属于自己的接口程序，让完全不懂技术的个人或企业通过简单的配置，即可拥有强大的功能。<br />
			    </p>
			    <p>创想微信是一个快速的，可视化的无线建站工具，让个人或企业可以在几分钟内完成微信网站。乐享微信不仅可以快速生成微信网站，还提供了在线抽奖活动（优惠券，大转盘，刮刮卡），在线投票，在线报名，在线预约，在线试驾，在线预定，图文回复，文本回复，LBS位置回复，地图，电话，视频，欢迎语，会员卡等模块，以后还会支持在线支付等功能。</p>
			    <p>&nbsp;</p>
			    <p>创想平台很好的弥补了微信公众平台本身功能不足、针对性不强、交互不便利的问题，为商家公众账号提供更为贴心的、且是核心需求的功能和服务。在线优惠劵、转盘抽奖、微信会员卡等推广服务更是让微信成为商家推广的利器。智能客服的可调教功能让用户真正从微信繁琐的日常客服工作中解脱出来，真正成为商家便利的新营销渠道。</p>
			    <p> 公司名称：海宁创想科技有限公司  ——海宁极限贸易有限公司<br />
			      公司地址：浙江省海宁市西山路612号龙祥商务楼1506<br />
		        公司电话：0573--87231707 13586378851 </p>
			    <p>银行转帐（请汇完款后及时通知我司,以便及时入帐）</p>
			    <p>&nbsp;</p>
			    <br />
		  </div>
		</div>
        
        	<h2 class="Public-h2">创想平台优势</h2>
		<div class="Public-box">
			<div class="Proxy">
                 <h3>操作简洁</h3>
				<p>创想平台的管理界面简单易用、操作方便，大量人性化设计，一分钟开启微信营销，无需安装任何软件，全自动“云”平台，多账号管理，只需要简单的设置即可完成复杂的微信营销推广功能。</p>
                <h3>功能强大</h3>
				<p>通过创想平台，用户可以轻松管理自己的微信各类信息，对微信公众账号进行维护、开展智能机器人、在线发优惠劵、抽奖、刮奖、派发会员卡、打造微官网、开启微团购等多种活动，对微信营销实现有效监控，在线优惠劵、转盘抽奖、微信会员卡等推广服务更是让微信成为商家推广的利器，智能客服的可调教功能让用户真正从微信繁琐的日常客服工作中解脱出来，真正成为商家便利的新营销渠道，极大扩展潜在客户群和实现企业的运营目标。</p>
                <h3>专业团队</h3>
				<p>一站式管理，平台支持，拥有多年网络营销经验的管理团队，强大的技术支持，专注于社会化媒体的研究，自有全国百万订阅量公众账号、全国主要城市区域号，以及微信电商团队实际操作，运营上海本地公众账号用户过万，熟练掌握获取本地用户的方法，不做整合营销，我们只专注于微信。</p>
                <h3>资深背景</h3>
				<p>创想全国联盟总部位于广州已经引入国内知名风险投资、其技术总监为原百度商务搜索部技术经理，运营团队有着丰富的互联网推广经验和资源，并与腾讯保持密切合作，因此可以为商家提供一个更智能、更便捷的微信公众服务平台。</p>
				
			</div>
		</div>
    
	
	</div>
</div>

<style type="text/css">
<!--
.STYLE1 {color: #484848}
.STYLE2 {font-size: larger}
-->
</style>
<div class="footer STYLE1">
	<div class="footer-content clearfix">
		
		<div class="copyright">
			<p align="center" class="STYLE2">地址：海宁市西山路612号龙翔商务楼1506 </p>
			<p align="center" class="STYLE2">联系方式：0573-87231707 13586378851 18868718085 QQ：1771472817 </p>
			<p align="center" class="STYLE2"> Copyright © 2011-2013 www.weilgo.com. All Rights Reserved   海宁创想科技有限公司——海宁极限贸易有限公司 版权所有    —</p>
			<p align="center" class="STYLE2">——浙ICP备12038865号-1——</p>
		</div>
	</div>
</div>
<!--公告信息-->
	<div id="notice_mask"></div>
	<div id="notice_message" style="position: absolute; left: 373.5px; top: 20%;">
		<div class="title">公 告<a onclick="javascript:jQuery('#notice_mask').hide(),jQuery('#notice_message').hide();">×</a></div>
		<div class="content">
		  <pre style="white-space:pre-wrap;"><p style="text-align:center;">创想微信联盟————VIP微信公众号展示!</p>                              海宁微信第一公众号[海宁未来购生活]

海宁未来购生活官方号--代言人模特--蒋峰--打造海宁最大的娱乐休闲生活全媒体平台（吃货，购物，团购，优惠券，同城活动，便民服务等功能）本地生活尽在这里！
</pre>
<a href="javascript:void(0);"></a>
<pre style="white-space:pre-wrap;"> 
<p><img src="<?php echo RES;?>/images/shouye1.JPG" width="600px"></p>
  <div class="pic"><p style="text-align:right;">
	创想微信营销
</p>
<p style="text-align:right;">
	2013-12-08
</p>
			</div>
			</pre>
		</div>
	</div>

<div class="erwei" title="微信扫一扫">
	<span class="hudongzhushou">官方微信</span>
  <div class="erwei_big" style="display:none;">
	  <p>扫一扫，关注创想官方微信，体验创想智能</p>
  </div>
[海宁微生活]</div>
</body>
</html>