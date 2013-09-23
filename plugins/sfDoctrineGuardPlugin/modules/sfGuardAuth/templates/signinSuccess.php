<div class="container">
	<div class="row">
		<div id="login_form" class="span4 offset8">
			<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
				<h2>登录到 WiTure</h2>
				<label>登录名</label>
				<?php echo $form['username']->render() ?>
 						<label>密码<span class="">忘记密码？</span></label>
				<?php echo $form['password']->render() ?>
				<label class="msg"><?php echo $form['username']->getError() ?></label>
				<?php echo $form['_csrf_token']->render() ?>
				<input class="orange_button" type="submit" value="登录" id="login" />
			</form>
		</div>
	</div>
</div>
