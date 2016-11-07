<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

	<?= inc('commonCss');?>
	<link rel="stylesheet" type="text/css" href="<?=RUTA['css']?>login.css">

    <title><?= $GLOBALS['_TITLE']; ?></title>
</head>
<body>
	<!-- Login -->
	<div class="wrapper">
		<div class="container">
	    	<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel-login">
						<div class="panel panel-heading">
							<div class="row">
								<div class="col-xs-12">
									<h1>Bienvenidos a Maxpedia!</h1>
								</div>

								<hr style="margin: 20px 0px 15px 0px">
								
								<div class="col-xs-6">
									<a href="#" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Register</a>
								</div>
							</div>
							
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form id="login-form" role="form" style="display: block;">
										<div class="form-group">


											
											<!-- User -->
											<input class="form-control" type="email" placeholder="User@mail.com" id="email">



										</div>
										<div class="form-group">


											<!-- Password -->
											<input class="form-control" type="password" placeholder="Password" id="password">



										</div>
										<div class="form-group text-center">
											<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
											<label for="remember"> Remember Me</label>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">


													<!-- Btn login -->
													<button class="btn btn-block btn-login" id="login">Login</button>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12">
													<div class="text-center">


														<!-- Forgot password -->
														<a id="prueba" tabindex="5" class="forgot-password">Forgot Password?</a>
													</div>
												</div>
											</div>
										</div>
									</form>

									<!-- Tab para registrarse -->
									<form id="register-form" method="post" role="form" style="display: none;">
										<div class="form-group">


											<!-- User Name -->
											<input class="form-control" type="text" placeholder="Su nombre" id="rfullname">
											<!--  -->
										</div>
										<div class="form-group">


											<!-- Email -->
											<input class="form-control" type="email" placeholder="email" id="remail">
											<!--  -->
										</div>
										<div class="form-group">

											<!-- Password -->
											<input class="form-control" type="password" placeholder="contrasena" id="rpassword">
											<!--  -->
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">


													<!-- Btn registrar -->

													<button class="btn btn-block btn-login" id="signup">Registrarse</button>
													<!--  -->
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="err">
		
	</div>
	<!-- Fin Login -->
    <?= inc('commonJs'); ?>
	<script type="text/javascript" src="<?=RUTA['js']?>modalLogin.js"></script>
	<script type="text/javascript" src="<?=RUTA['js']?>auht.js"></script>

</body>

</html>