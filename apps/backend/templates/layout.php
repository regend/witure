<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>WiTure Admin Interface</title>
<link rel="shortcut icon" href="/favicon.ico" />

<?php use_stylesheet('witure/admin.css') ?>
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<a href="<?php echo url_for('homepage') ?>"> <img
					src="/images/witure/logo.jpg"
					alt="Jobeet Job Board" /> </a>
			</h1>
		</div>
		<?php if ($sf_user->isAuthenticated()): ?>
			<div id="menu">
				<ul>
					<li>
						<?php echo link_to('Companies', 'company') ?>
					</li>
					<li>
						<?php echo link_to('Nodes', 'node') ?>
					</li>
				</ul>
			</div>
		<?php endif ?>
		
		<!-- Content -->
		<div id="content">
			<?php echo $sf_content ?>
		</div>
		<!-- End of Content -->
		
		<!-- Footer -->
		<div id="footer">
		</div>
		<!-- End of Footer -->
	</div>
</body>
</html>
