<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>
		<?php if (!include_slot('title')): ?> WiTure&trade; | WiFi是一种文化 <?php endif ?>
	</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
	<?php use_stylesheet('bootstrap/bootstrap.css') ?>
	<?php use_stylesheet('bootstrap/bootstrap-responsive.css') ?>
	<?php use_stylesheet('witure/home.css') ?>
    <?php use_javascript('jquery/jquery.js') ?>
    <?php use_javascript('bootstrap/bootstrap.js') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
</head>
<body>
    <!-- Content -->
    <?php echo $sf_content ?>
    <!-- End of Content -->
</body>
</html>