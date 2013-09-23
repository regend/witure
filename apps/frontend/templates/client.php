<?php 
$site_name = apAuthpuppyConfig::getConfigOption("site_name","");

if ($site_name != '') {
  sfContext::getInstance()->getResponse()->setTitle($site_name);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>
      <?php if (!include_slot('title')): ?>
        WiTure&trade; | WiFi是一种文化
      <?php endif ?>
    </title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
	<?php use_stylesheet('bootstrap/bootstrap.css') ?>
	<?php use_stylesheet('bootstrap/bootstrap-responsive.css') ?>
    <?php use_javascript('jquery/jquery.js') ?>
    <?php use_javascript('bootstrap/bootstrap.js') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    
    <style type="text/css">
      #footer {
        height: 40px;
      }
      #footer {
        background-color: #f5f5f5;
      }
      .container {
        width: auto;
        max-width: 1024px;
      }
      .container .credit {
        margin: 10px 0;
      }
    </style> 
      
  </head>
    <body>
    

	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <br/><br/>
      <img src="../images/witure/coffee.jpg" alt="" />
	  <?php echo $sf_content ?>
    </div> <!-- /container -->
    
    <div id="footer">
      <div class="container">
        <p class="muted credit">Provided by <a href="http://www.baidu.com">Witure&trade;</a>.</p>
      </div>
    </div>

    </body>
</html>
