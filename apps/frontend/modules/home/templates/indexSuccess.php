<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
	<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
	<div class="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="<?php echo url_for('home/index'); ?>">WiTure</a>
				<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="<?php echo url_for('home/index'); ?>">主页</a></li>
						<li><a href="<?php echo url_for('home/about'); ?>">关于WiTure</a></li>
						<li><a href="<?php echo url_for('home/join'); ?>">加入我们</a></li>
						<li><a href="<?php echo url_for('home/faq'); ?>">常见问题</a></li>
						<!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">更多内容 <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<div style="float:right">
						<a class="btn btn-large btn-primary" href="company">商家入口</a>
					</div>
				</div><!--/.nav-collapse -->
			</div><!-- /.navbar-inner -->
		</div><!-- /.navbar -->
	</div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<div class="item active">
			<img src="/images/witure/home-slide-01.jpg" alt="" />
			<div class="container">
				<div class="carousel-caption">
					<h1>比运营商更开放</h1>
					<p class="lead">采用与运营商相同的WEB认证的方式，不同的是我们完全免费开放，只要您的设备支持WiFi，都能连接！</p>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/images/witure/home-slide-02.jpg" alt="" />
			<div class="container">
				<div class="carousel-caption">
					<h1>更多顾客喜欢的WiFi</h1>
					<p class="lead">为用户提供统一的用户认证服务，一次接入，自动接入，自由接入！顾客的畅游，是我们的快乐！</p>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/images/witure/home-slide-03.jpg" alt="" />
			<div class="container">
				<div class="carousel-caption">
					<h1>为商家提供更多服务</h1>
					<p class="lead">通过强大的云服务计算系统，可根据商家的不同需求，自定义功能，为商家提供实时的客户数据分析。</p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="span4">
			<img class="img-circle" data-src="holder.js/140x140" />
			<h2>Heading</h2>
			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		</div><!-- /.span4 -->
		<div class="span4">
			<img class="img-circle" data-src="holder.js/140x140" />
			<h2>Heading</h2>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div><!-- /.span4 -->
		<div class="span4">
			<img class="img-circle" data-src="holder.js/140x140" />
			<h2>Heading</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div><!-- /.span4 -->
	</div><!-- /.row -->
	
	<!-- START THE FEATURETTES -->

	<hr class="featurette-divider" />
	
	<div class="featurette">
		<img class="featurette-image pull-right" src="/images/witure/browser-icon-chrome.png">
		<h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	
	<hr class="featurette-divider" />
	
	<div class="featurette">
		<img class="featurette-image pull-left" src="/images/witure/browser-icon-firefox.png">
		<h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	
	<hr class="featurette-divider" />
	
	<div class="featurette">
		<img class="featurette-image pull-right" src="/images/witure/browser-icon-safari.png">
		<h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	
	<hr class="featurette-divider">
	
	<!-- /END THE FEATURETTES -->

	<!-- FOOTER -->
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	</footer>
</div><!-- /.container -->