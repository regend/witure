<?php 
$site_name = apAuthpuppyConfig::getConfigOption("site_name","");

if ($site_name != '') {
  sfContext::getInstance()->getResponse()->setTitle($site_name);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
	    <?php include_http_metas() ?>
	    <?php include_metas() ?>
	    <?php include_title() ?>
	    <link rel="shortcut icon" href="/favicon.ico" />
	    <?php include_stylesheets() ?>
	    <?php include_javascripts() ?>
	    <style type="text/css">
		body { 
			padding-top: 60px;
			padding-bottom: 40px;
		}
		
		.sidebar-nav {
			padding: 9px 0;
		}
		
		@media ( max-width : 980px) { /* Enable use of floated navbar text */
			.navbar-text.pull-right {
				float: none;
				padding-left: 5px;
				padding-right: 5px;
			}
		}
		</style>
    </head>
    
    <body>
    	<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="<?php echo url_for('home/dashboard');?>">WiTure商家后台</a>
					<div class="nav-collapse collapse">
						<p class="navbar-text pull-right">
                                    当前用户：<font color="#ffffff"><?php echo $sf_user->getGuardUser()->getUsername(); ?>&nbsp;&nbsp;
							<a href="<?php echo url_for('sfGuardAuth/signout'); ?>" class="navbar-link"><u>退出登录</u></a></font>
						</p>
						<ul class="nav">
							<li class="active">
								<a href="<?php echo url_for('home/dashboard'); ?>">常规业务</a>
							</li>
							<li>
								<a href="<?php echo url_for('sfGuardUser/index'); ?>">用户管理</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">
								常规
							</li>
							<li class="<?php include_slot('company_show') ?>">
								<a href="<?php echo url_for('company/show'); ?>" data-toggle="popover" data-placement="right" title="您公司的信息">公司信息</a>
							</li>
							<li class="<?php include_slot('node_index') ?>">
								<?php echo link_to(__('管理热点'), '@node_index'); ?>
							</li>
							<li class="<?php include_slot('sf_guard_user') ?>">
								<?php echo link_to(__('用户管理'), '@sf_guard_user'); ?>
							</li>
							<li class="<?php include_slot('sf_guard_group') ?>">
		                		<?php echo link_to(__('用户组'), '@sf_guard_group'); ?>
		                	</li>
		                	<li class="<?php include_slot('sf_guard_permission') ?>">
								<?php echo link_to(__('权限管理'), '@sf_guard_permission'); ?>
							</li>
						</ul>
					</div>
					<!--/.well -->
				</div>
				<!--/span-->
				<div class="span10">
					<div class="hero-unit" style="padding:30px">
						<?php if ($sf_user->hasFlash('notice')): ?>
		            		<div class="notice"><?php echo __($sf_user->getFlash('notice')) ?></div>
		        		<?php endif; ?>
		 
		        		<?php if ($sf_user->hasFlash('error')): ?>
		            		<div class="error"><?php echo __($sf_user->getFlash('error')) ?></div>
		        		<?php endif; ?>
		        		<?php echo $sf_content ?>
					</div>
				</div>
				<!--/span-->
			</div>
			<!--/row-->
			
			<hr>
			<footer>
				<p>
					&copy; WiTure Studio 2013
				</p>
			</footer>
		</div>		
    </body>
</html>
