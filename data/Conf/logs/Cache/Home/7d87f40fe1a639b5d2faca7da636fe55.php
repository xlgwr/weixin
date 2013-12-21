<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费说明－<?php echo C('site_title');?></title>
<meta name="keywords" content="LANRAIN 微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
<style type="text/css">
.qtcontent {
width: 1210px;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style-price.css"/>
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
		<h1 class="left" onClick="location.herf='#'">创想·微信营销，如此简单！</h1>
		<div class="left city">
			<h2>微信营销，如此简单！</h2>
				
		</div>
		<div class="right line-li">
			<ul>
				<li>
					<a href="/" class="hover">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/fc');?>" >案例展示</a>
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

<div class="banner jbanner"></div>



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
                				<th width="100">vip6</th>
                				<th width="100">vip7</th>
                				<th width="100" class="norightborder">vip8</th>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格<br>
                					<a href="#" target="999" class="red">如何充值购买VIP</a> <a href="#" target="999" class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"><span>
<p>VIP只是流量套餐（自定义数和赠送的请求数不同而已），点击问号查看详细购买流程！</p>
</span></a></td>
                				<td><span class="price">10<p>元 / 月</p></span></td>
                				<td><span class="price">30<p>元 / 月</p></span></td>
                				<td><span class="price">50<p>元 / 月</p></span></td>
                				<td><span class="price">100<p>元 / 月</p></span></td>
                				<td><span class="price">150<p>元 / 月</p></span></td>
                				<td><span class="price">200<p>元 / 月</p></span></td>
                				<td><span class="price">300<p>元 / 月</p></span></td>
                				<td><span class="price">4800
                						<p>元 / 年</p>
                					</span></td>
                				<td class="norightborder"><span class="price">6000
<p>元 / 年</p>
               					</span></td>
                				</tr>
                			<tr>
                				<td height="32" class="lefttitle">自定义条数限额 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"><span>
<p><strong>什么是自定义限额数？</strong></p>
<p>自定义分：自定义文本、自定义图文、自定义语音。意思是，你在创想写一个图文就少一个自定义图文〔vip0图文、文本、语音都有2000自定义，够挥霍了。〕</p>
</span></span></td>
                				<td>2000</td>
                				<td>3000</td>
                				<td>5000</td>
                				<td>10000</td>
                				<td>15000</td>
                				<td>20000</td>
                				<td>30000</td>
                				<td>30000</td>
                				<td class="norightborder">30000</td>
                				</tr>
                			<tr>
                				<td height="32" class="lefttitle">赠送月请求次数 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle">
<span>
<p><strong>什么是请求数？</strong></p>
<p>用户发送一句话，就代表一个请求。
比如：用户发送 "你好！"，系统回复"你也好！"
这就算一个请求，如果系统没回复，则不计。
〔温馨提示：创想3G功能〔分类功能〕请求也算在内。3G请求看不到，只是粉丝在浏览里3G网站时候，浏览一篇文章，或者重新打开一个分类就算一个请求。目前3G功能只统计请求并不收费。〕</p>
<p><strong>什么是赠送请求？</strong></p>
<p>用户购买VIP流量套餐后会赠送用户一些功能和请求数，这个请求数被创想称为赠送请求数。</p>
</span></span></td>
                				<td>10000</td>
                				<td>150000</td>
                				<td>300000</td>
                				<td>700000</td>
                				<td>1000000</td>
                				<td>2000000</td>
                				<td>3500000</td>
                				<td>3500000</td>
                				<td class="norightborder">3500000</td>
                				</tr>
                			<tr>
                				<td height="32" class="lefttitle">超出请求数单价 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle">
<span>
<p><strong>什么是超出请求数？</strong></p>
<p>购买VIP后会赠送一部分请求，用完赠送的请求后用户需要单独购买请求数，这就是超出的请求数（也叫付费请求数），一个请求价格是0.0002元。系统会先扣除赠送请求数，然后才会扣除付费请求数，单用户欠费到一定量就会不回复信息。</p>
</span></span></td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td>0.0002元</td>
                				<td class="norightborder">0.0002元</td>
                				</tr>
                             <tr>
                				<td height="50" class="lefttitle">底部版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle">
<span>
<p><strong>版权信息？</strong></p>
<p>	V0 页面有:此页面是由【<a href="#">创想微信接口平台</a>】系统生成 版权信息</p>
</span></span></td>
                				<td>有</td>
                				<td>无</td>
                				<td>无</td>
                				<td>可自定义版权</td>
                				<td>可自定义版权</td>
                				<td>可自定义版权</td>
                				<td>可自定义版权</td>
                				<td>可自定义版权</td>
                				<td class="norightborder">可自定义版权</td>
                				</tr>
                			<tr>
                				<td height="50" class="lefttitle"> <span class="red">先充值，在购买VIP套餐。</span><span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle">
<span>
<p><strong>简单购买流程提醒</strong></p>
<p>先看自己适合什么套餐，然后充值相应人民币得到创想币，用创想币购买VIP套餐。（创想币为创想微信平台通用货币）</p>
</span></span></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=1000"><em>立即充值</em></a></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=30000"><em>立即充值</em></a></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=50000"><em>立即充值</em></a></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=100000"><em>立即充值</em></a></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=150000"><em>立即充值</em></a></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=200000"><em>立即充值</em></a></td>
                				<td><a class="btnGreens" href="http://www.weilgo.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;coin=300000"><em>立即充值</em></a></td>
                				<td>联系客服开通</td>
                				<td class="norightborder">联系客服开通</td>
                				</tr>
                            <tr>
                              <td height="36" class="lefttitle"><strong>高级功能</strong><br><span class="red">（部分功能需要单独收费）</span></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="norightborder"></td>
                            </tr>
                            <tr>
                              <td height="36" class="lefttitle"><strong>微信活动</strong><br><span class="red">（超出免费额度的才会另外收费）</span></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="norightborder"></td>
                            </tr>
                            <tr>
                              <td height="50" class="lefttitle">每月免费活动默认个数<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"> <span>
                                <p><strong>什么是免费活动默认个数？</strong></p>
                                <p>比如VIP3，每月免费活动默认个数为3个，也就是同时存在3个活动可以免费，只要活动控制在奖品数300以内，实际参与人数1000以内都免费，删除活动再创建活动免费，但如果列表超过3个活动或者活动超过奖品数300和实际参与人数1000人都需要另外付费，每个活动创建费10元，奖品数按每个0.1元收取，实际参与人数按每人0.01元收取。</p>
                              </span></span></td>
                              <td>0</td>
                              <td align="center"><strong>1个</strong><br>
                                活动奖品数30，实际参与人数500人以内，免费。</td>
                              <td align="center"><strong>2个</strong><br>
                                活动奖品数50，实际参与人数1000人以内，免费。</td>
                              <td align="center"><p><strong>3个<br>
                              </strong> 活动奖品数100，实际参与人数2000人以内，免费。</p></td>
                              <td align="center"><p><strong>4个<br>
                              </strong>活动奖品数150，实际参与人数3000人以内，免费。</p></td>
                              <td align="center"><strong>5个<br>
                              </strong>活动奖品数200，实际参与人数4000人以内，免费。</td>
                              <td align="center"><strong>6个</strong><br>
                                活动奖品数300，实际参与人数6000人以内，免费。</td>
                              <td align="center"><strong>7个<br>
                              </strong> 活动奖品数500，实际参与人数1万人以内，免费。</td>
                              <td align="center" class="norightborder"><strong>8个</strong><br>
                                活动奖品数1000，实际参与人数2万人以内，免费。</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微活动-刮刮卡<a class="tooltips" href="#" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"> <span>
                                <p>刮刮卡和大转盘活动需要单独收费，价格相同，按次按实际参与人和奖品数计算，</p>
                                <p>计算公式：创建活动10元+奖品个数×0.1元+实际参与人数×0.01元，</p>
                                <p>请看详细使用说明及费用说明。点击问号查看详情。</p>
                              </span></a></td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked norightborder">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微活动-大转盘 <a class="tooltips" href="#" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"> <span>
                                <p>刮刮卡和大转盘活动需要单独收费，价格相同，按次按实际参与人和奖品数计算，</p>
                                <p>计算公式：创建活动10元+奖品个数×0.1元+实际参与人数×0.01元，</p>
                                <p>请看详细使用说明及费用说明。点击问号查看详情。</p>
                              </span></a></td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked norightborder">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微活动-优惠券</a <a class="tooltips" href="#" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"> <span>
                                <p>优惠券活动需要单独收费，价格跟刮刮卡大转盘不同，</p>
                                <p>计算公式：创建活动10元+奖品个数×0.02元+实际参与人数×0.01元，</p>
                                <p>请看详细使用说明及费用说明。点击问号查看详情。</p>
                              </span></a></td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked norightborder">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微活动-投票 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"> <span>
                                <p>投票活动需要单独收费，</p>
                                <p>计算公式：创建活动1元+实际参与投票人数×0.002元</p>
                              </span></span></td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked norightborder">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="32" bgcolor="#FFFFFF" class="lefttitle">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                              <td bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微信自定义菜单</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微官网</td><td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微统计</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微相册</td>
                              <td class="error">&nbsp;</td>
                              <td><p>容量10个</p></td>
                              <td>容量20个</td>
                              <td>容量30个<br></td>
                              <td>容量40个</td>
                              <td>容量50个</td>
                              <td>容量60个</td>
                              <td>容量70个</td>
                              <td>容量80个</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微订单</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微酒店（支持多店）</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            
                            <tr>
                              <td class="lefttitle">微留言</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微信照片墙</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">音乐盒</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微团购</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微喜帖</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="lefttitle">微调研</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              </tr>
                            <tr>
                              <td class="lefttitle">微点菜（支持多店）</td>
                              <td class="error">&nbsp;</td>
                              <td>80元/店/月</td>
                              <td>80元/店/月</td>
                              <td>80元/店/月</td>
                              <td>80元/店/月</td>
                              <td align="center">送一个</td>
                              <td align="center">送一个</td>
                              <td align="center">送一个</td>
                              <td align="center" class="norightborder">送一个</td>
                              </tr>
                            <tr>
                              <td class="lefttitle">微外卖（支持多店）</td>
                              <td class="error">&nbsp;</td>
                              <td>80元/店/月</td>
                              <td>80元/店/月</td>
                              <td>80元/店/月</td>
                              <td>80元/店/月</td>
                              <td align="center">送一个</td>
                              <td align="center">送一个</td>
                              <td align="center">送一个</td>
                              <td align="center" class="norightborder">送一个</td>
                              </tr>
                            <tr>
                              <td class="lefttitle">微会员卡（支持多店）</td>
                              <td class="error">&nbsp;</td>
                              <td>50元/店/月</td>
                              <td>50元/店/月</td>
                              <td>送一个</td>
                              <td>送一个</td>
                              <td align="center">送一个</td>
                              <td align="center">送一个</td>
                              <td align="center">送一个</td>
                              <td align="center" class="norightborder">送一个</td>
                              </tr>
                            
                            <tr>
                              <td class="lefttitle">360全景</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="error">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked ">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                              <td class="checked">&nbsp;</td>
                            </tr>
                            <tr style=" display:none">
                              <td class="lefttitle">一战到底</td>
                              <td class="error">&nbsp;</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td class="norightborder">待定</td>
                            </tr>
                            <tr style="display:none">
                              <td class="lefttitle">微请帖（邀请函）</td>
                              <td class="error">&nbsp;</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td class="norightborder">待定</td>
                            </tr>
                            <tr style=" display:none">
                              <td class="lefttitle">微商城</td>
                              <td class="error">&nbsp;</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td>待定</td>
                              <td class="norightborder">待定</td>
                            </tr>
                                <tr>
                                  <td class="lefttitle">翻译朗读开关</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked norightborder ">&nbsp;</td>
                                </tr>
                                 <tr>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              </tr>
                                <tr>
                                  <td height="36" class="lefttitle"><strong>第三方接口融合功能</strong></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td class="norightborder"></td>
                                </tr>
                                <tr>
                                  <td class="lefttitle"><a  href="#" target="999">第三方接口融合</a> <a class="tooltips" href="#" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"> <span>
                                    <p>创想可以融合其他的接口，跟创想接口一起使用。点击问号查看详情，论坛还有很多教程可以查看。</p>
                                  </span></a></td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked">&nbsp;</td>
                                  <td class="checked">&nbsp;</td>
                                  <td class="checked norightborder">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="lefttitle">第三方接口优先处理图片</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked norightborder ">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="lefttitle">回答不上启用第三方接口</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked norightborder ">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="lefttitle">第三方接口优先支持LBS</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked">&nbsp;</td>
                                  <td class="checked">&nbsp;</td>
                                  <td class="checked norightborder">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="lefttitle">第三方接口优先(无触发词)</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked norightborder ">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="lefttitle">&nbsp;第三方接口包含匹配触发</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked norightborder ">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                                </tr>
                			<tr>
                				<td height="36" class="lefttitle"><strong>基础功能</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
                				</tr>
                                <tr>
                                  <td class="lefttitle">天气，人品计算，手机归属地查询，
                                  身份证查询，糗事，笑话，
                                  人品计算，陪聊纯洁版,绕口令,车牌归属，成语字典，谜语，今日体彩，健康指数计算器，过滤敏感词汇，小黄鸡陪聊</td>
                                  <td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                                <td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                                <tr>
                                  <td class="lefttitle">语音播报天气，查快递，翻译，成语接龙，诗歌接龙，藏头藏尾诗，诗歌赏析，网络音乐检索，解梦，公交查询，火车查询，机器人学习功能，电影检索，小黄鸡英文版</td>
                                  <td class="error">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked ">&nbsp;</td>
                                  <td class="checked">&nbsp;</td>
                                  <td class="checked">&nbsp;</td>
                                  <td class="checked norightborder">&nbsp;</td>
                                </tr>
                			<tr>
                			  <td class="lefttitle">今日影讯，查药价，黄金白银期货，路况查询，驾车导航，步行导航，公交换乘地图版，周边生活地图版，发地理位置直接显示周边</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                			  <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
              			  </tr>
                            <tr>
                			  <td class="lefttitle">文本回复包含匹配</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked norightborder ">&nbsp;</td>
              			    </tr>
                            <tr>
                			  <td class="lefttitle">图文回复包含匹配</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked norightborder ">&nbsp;</td>
              			    </tr>
                            <tr>
                			  <td class="lefttitle">模糊匹配保存用户留言</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="error">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked ">&nbsp;</td>
                			  <td class="checked norightborder ">&nbsp;</td>
              			    </tr>
                            <tr>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                              <td height="32" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                			<tr>
                			  <td height="36" class="lefttitle"><strong>技术指导</strong></td>
                			  <td></td>
                			  <td></td>
                			  <td></td>
                			  <td></td>
                			  <td></td>
                			  <td></td>
                			  <td></td>
                			  <td></td>
                			  <td class="norightborder"></td>
              			  </tr>
                			<tr>
                				<td class="lefttitle">3G网站</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
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
                				<td class="checked">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
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
                				<td class="checked">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
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
                				<td class="checked">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
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
                				<td class="checked">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
</tbody>
               			</table>
                </div>
            <div class="section lastSection">
<p>如何充值购买VIP，有疑问的请到　QQ:1771472817　提问。</p>
               		</div>
            </div>
        </div>
    </div>


<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
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