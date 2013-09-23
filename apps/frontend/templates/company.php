<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>
      <?php if (!include_slot('title')): ?>登陆到WiTure<?php endif ?>
    </title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
	<?php include_javascripts() ?>
	<?php include_stylesheets() ?>
  </head>

  <body>
	<div id="header">
		<div class="container">
			<div class="row">
				<a href="<?php echo url_for('home/index'); ?>"><img src="/images/witure/logo.jpg" alt="" id="logo" class="span2" /></a>
				<div id="slogan" class="span4">无需密码 免费上网</div>
				<div id="phone" class="right">4000-817-017</div>
			</div>
		</div>
	</div>
	
	<!-- Content -->
	<div id="content">
		<?php echo $sf_content ?>
	</div>
	<!-- End of Content -->
	
	<div id="feature">
		<div class="container">
			<ul class="row">
				<li id="real_time_statistics" class="span4">
					<h3>实时客流统计</h3>
					<p>智能客流分析算法</p>
					<p>自动生成实时客流报表</p>
					<p>营销统计图表对比分析</p>
					<p>远程登录随时随地查询</p>
				</li>
				<li id="enhance_user_experience" class="span4">
					<h3>提升客户体验</h3>
					<p>手机就是会员卡，促进多次消费</p>
					<p>发送最新特惠信息、活动详情</p>
					<p>老顾客到店提醒、实时互动</p>
					<p>大型活动、展览宣传展示</p>
				</li>
				<li id="security_and_smarty" class="span4">
					<h3>安全、灵活、智能</h3>
					<p>符合国家标准的安全防范功能</p>
					<p>智能宽带分配，有效提高网速</p>
					<p>自动检测，避免无消费蹭网</p>
					<p>安全隔离用户网络和办公网络</p>
				</li>
			</ul>
		</div>
	</div>
	

	<!-- Footer -->
	<?php include_partial('home/company_footer') ?>
	<!-- End of Footer -->
  </body>
	

	
</html>