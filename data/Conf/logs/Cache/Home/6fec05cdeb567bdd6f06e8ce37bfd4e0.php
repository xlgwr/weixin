<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>创想-微信营销专家</title>
<meta name="keywords" content="LANRAIN 创想微信营销平台 微信创业  海宁创业  海宁微信营销  嘉兴创业  嘉兴微信营销  桐乡创业  桐乡微信营销  湖州创业  湖州微信营销  杭州微信营销  杭州创业微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="创想微信营销平台 微信创业  海宁创业  海宁微信营销  嘉兴创业  嘉兴微信营销  桐乡创业  桐乡微信营销  湖州创业  湖州微信营销  杭州微信营销  杭州创业 微信公众平台接口开发、托管、营销活动、二次开发"/>
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

   <style type="text/css">
<!--
.STYLE1 {font-size: larger}
.STYLE4 {
	color: #0066FF;
	font-weight: bold;
}
.STYLE5 {color: #666666}
.STYLE6 {
	color: #999999;
	font-size: smaller;
}
.STYLE9 {color: #333333}
.STYLE10 {
	font-size: x-large;
	color: #0033FF;
}
-->
   </style>
<div class="header clearfix">
	<div class="hd-c">
		<div class="banner">
			<ul>
									<li class="pic-intro" >
						<div class="text">
							<h4>已有<font>嘉善-德清-海宁-嘉兴-平湖-湖州-德清-余杭-绍兴等30多个地区3000多个人及企业</font>入驻创想，微信营销 如此简单</h4>
							<a id="start_btn" class="start" href="<?php echo U('Index/reg');?>" title="入驻创想"></a>
						</div>
						<div class="regin pic">
							<img src="<?php echo RES;?>/images/banner-a.png?v=2013-12-06-5" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>3000多个人及企业</font>入驻创想，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Index/reg');?>" title="入驻创想"></a>
						</div>
						<div class="pic">
							<img src="<?php echo RES;?>/images/banner-b.png?v=2013-12-06-5" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>嘉善-德清-海宁-嘉兴-平湖-湖州-德清-余杭-绍兴等30多个地区3000多个人及企业</font>入驻创想，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Index/reg');?>" title="入驻创想"></a>
						</div>
						<div class="pic">
							<img src="<?php echo RES;?>/images/banner-c.png?v=2013-12-06-5" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>嘉善-德清-海宁-嘉兴-平湖-湖州-德清-余杭-绍兴等30多个地区3000多个人及企业</font>入驻创想，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Index/reg');?>" title="入驻创想"></a>
						</div>
						<div class="pic">
							<img src="<?php echo RES;?>/images/banner-d.png?v=2013-12-06-5" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>嘉善-德清-海宁-嘉兴-平湖-湖州-德清-余杭-绍兴等30多个地区3000多个人及企业</font>入驻创想，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Index/reg');?>" title="入驻创想"></a>
						</div>
						<div class="pic">
							<img src="<?php echo RES;?>/images/banner-e.png?v=2013-12-06-5" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>嘉善-德清-海宁-嘉兴-平湖-湖州-德清-余杭-绍兴等30多个地区3000多个人及企业</font>入驻创想，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Index/login');?>" title="入驻创想"></a>
						</div>
						<div class="pic">
							<img src="<?php echo RES;?>/images/banner-f.png?v=2013-12-06-5" class="png-24" alt="banner" />
						</div>
					</li>
							</ul>
			<div class="frame">
				<span class="changing-over">
																	<a href="#" class="now"></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" class="last"></a>
									</span>
			</div>
		</div>
	</div>
</div>

<!-- trade -->
<div class="content clearfix">
			<div id="notice-panel">
			<div style="width:600px; margin:0 auto; position:relative;">
				<h1><div class="notice_icon"></div>公众号：</h1>
			  <div class="notice">
					<label>
						<a href="javascript:;" onclick="javascript:$('#notice_mask').show(), $('#notice_message').show();" title="">创想微信联盟————VIP微信公众号展示！！</a>
						<span class="date">2013-12-09</span>
					</label>
			  </div>
			</div>
		</div>
		<div class="feature-content">
		<script>
			$(document).ready(function(){
				$(".feature-content dd").hover(
					function(){
						$(this).addClass("active")
					},
					function(){
						$(this).removeClass("active");
					}
				);
			});
		</script>
		<dl class="clearfix">
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#site">
					<div class="fimg icon mstate"></div>
					<h3>微信官网</h3>
				</a>
			  <p>快速轻松建立一个微网站<br>
打造自己独一无二的企业形象</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#member">
					<div class="fimg icon member"></div>
					<h3>微信会员卡</h3>
				</a>
				<p>帮助企业建立品牌推广，会员管理，营销一体的微会员管理平台</p>
			</dd>
		  <dt>&nbsp;</dt>
		  <dd class="vborder">
			  <a href="<?php echo U('Home/Index/fc');?>#activities">
				  <div class="fimg icon activities"></div>
				  <h3>微信活动</h3>
			  </a>
			  <p>商家发起营销活动吸引用户参与增强用户沉淀</p>
		  </dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#push">
					<div class="fimg icon Push"></div>
					<h3>微信订单</h3>
				</a>
				<p>无线下单，及时通知<br>
				  商场订单，酒店，餐饮订单，方便快捷
			  </p>
			</dd>
			<dd>
				<a href="<?php echo U('Home/Index/fc');?>#services">
					<div class="fimg icon service"></div>
					<h3>便民微服务</h3>
				</a>
				<p>提供生活服务，快递，天气，公交，翻译<br>
				  增加用户粘性，方便与众</p>
			</dd>
		</dl>
		<div class="line"></div>
		<dl class="clearfix">
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#message">
					<div class="fimg icon message"></div>
					<h3>微留言，招聘，二手</h3>
				</a>
			  <p>留言，互动，招聘，二手，交友，私信<br>
			  一键留言&nbsp;&nbsp;，一见私信</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#photo">
					<div class="fimg icon albums"></div>
					<h3>微相册</h3>
				</a>
				<p>提供精美相册系统，完美展示图片效果</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#menu">
					<div class="fimg icon menu"></div>
					<h3>自定义菜单</h3>
				</a>
			  <p>服务号无需定制，完全自定义。用户无需输入关键词触发回复，直接点击</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#research">
					<div class="fimg icon research"></div>
					<h3>微调研</h3>
				</a>
				<p>无需人力&nbsp;电子调研<br>为市场调研加一份有力数据</p>
			</dd>
			<dd>
				<a href="<?php echo U('Home/Index/fc');?>#addup">
					<div class="fimg icon mtatistics"></div>
					<h3>微统计</h3>
				</a>
				<p>创想后台可以实时统计微信粉丝关注情况，清晰查询数据助力企业营销</p>
			</dd>
		</dl>
		<div class="line"></div>
		<dl class="clearfix">
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#estate">
					<div class="fimg icon mstate"></div>
					<h3>360全景看房看车</h3>
				</a>
				<p>全方位360度展示产品，把宝贝让你尽收眼底</p>
			</dd>
			<dd  class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#car">
					<div class="fimg icon car"></div>
					<h3>微汽车</h3>
				</a>
				<p>即将开放</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#wedd">
					<div class="fimg icon card"></div>
					<h3>微喜帖</h3>
				</a>
				<p>电子喜帖&nbsp;微信来袭<br>提供用户特别服务</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#medical">
					<div class="fimg icon medical"></div>
					<h3>微医疗</h3>
				</a>
				<p>在线挂号或咨询<br>了解病情 微信都可以</p>
			</dd>
			<dd>
				<a href="<?php echo U('Home/Index/fc');?>#hotels">
					<div class="fimg icon hotel"></div>
					<h3>微酒店</h3>
				</a>
				<p>在线订房融入微信<br>酒店营销多一条有力途径</p>
			</dd>
		</dl>
        
        <div class="line"></div>
		<dl class="clearfix">
           <dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#reser">
					<div class="fimg icon reserve"></div>
					<h3>微预约</h3>
				</a>
				<p>各种预约 一键即可<br>短信邮件会立即通知商户</p>
		  </dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#vshop">
					<div class="fimg icon vshop"></div>
					<h3>微商城</h3>
				</a>
				<p>微信也有大商城，分享，下单，一键合成<br>
				  电商轻松让你走入微信时代</p>
			</dd>
			<dd  class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#cate">
					<div class="fimg icon cate"></div>
					<h3>微餐饮无线gprs下单</h3>
				</a>
				<p>无线gprs何时何地都能轻松看订单<br>
				  微信轻轻一点，打印机轻松打印
				</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#life">
					<div class="fimg icon life"></div>
					<h3>微信支付</h3>
				</a>
				<p>微商城，团购，订单<br>一键支付，快捷安全</p>
			</dd>
			<dd  class="vborder">
				<a href="<?php echo U('Home/Index/fc');?>#buy">
					<div class="fimg icon buy"></div>
					<h3>微团购</h3>
				</a>
				<p>微团购从网络搬进微信公众平台<br>
				  同微信分享团购，简单，方便</p>
			</dd>

			
		</dl>
	</div>
</div>
<!-- case -->
<div>
	<div class="list_carousel">
		<ul id="foo2">
										<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case1.jpg?v=2013-12-06-5" alt="case1.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case2.jpg?v=2013-12-06-5" alt="case2.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case3.jpg?v=2013-12-06-5" alt="case3.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case4.jpg?v=2013-12-06-5" alt="case4.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case5.jpg?v=2013-12-06-5" alt="case5.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case6.jpg?v=2013-12-06-5" alt="case6.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case7.jpg?v=2013-12-06-5" alt="case7.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case8.jpg?v=2013-12-06-5" alt="case8.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case9.jpg?v=2013-12-06-5" alt="case9.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case10.jpg?v=2013-12-06-5" alt="case10.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case11.jpg?v=2013-12-06-5" alt="case11.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case12.jpg?v=2013-12-06-5" alt="case12.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case13.jpg?v=2013-12-06-5" alt="case13.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case14.jpg?v=2013-12-06-5" alt="case14.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case15.jpg?v=2013-12-06-5" alt="case15.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case16.jpg?v=2013-12-06-5" alt="case16.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case17.jpg?v=2013-12-06-5" alt="case17.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case18.jpg?v=2013-12-06-5" alt="case18.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case19.jpg?v=2013-12-06-5" alt="case19.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case20.jpg?v=2013-12-06-5" alt="case20.jpg" />
					</a>
				</li>
	  </ul>
		<div class="clearfix"> 
		  <div align="center" class="STYLE1">
		    <p class="STYLE5 STYLE4 STYLE10">创你所想 想你所创</p>
		    <p class="STYLE5 STYLE1 STYLE4">&nbsp;</p>
		    <p class="STYLE5 STYLE1 STYLE4"><span class="STYLE6 STYLE5"><span class="STYLE9">创想微信不断推出新功能，降低您的运营成本，提高微信营销效果。 </span></span></p>
		  </div>
		</div>
		<a id="prev2" class="prev" href="#"></a>
		<a id="next2" class="next" href="#"></a>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#foo2').carouFredSel({
					//auto: true,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
			});
		</script>
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