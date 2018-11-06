	<?php include('config.php'); ?>
	<?php include('includes/registration_login.php'); ?>
	<?php include('includes/head_section.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>

	<title>B.L.0.0.G</title>

	<link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">

	</head>
	<body class="text-center">
	<div class="container">

		<div style="width: 40%; margin: 20px auto;">
			<form method="post" action="login.php" >

				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<img class="mb-4" src="static/images/Administrador.png" width="120" height="120">
	      		
				<input type="text" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Digite o usuário..." required autofocus>
				
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha..." required>
				
				<button type="submit" name="login_btn" class="btn btn-lg btn-primary btn-block">LOGIN</button>
				<p>
					Não é cadastrado? <a href="register.php">Acesse...</a>
				</p>
			</form>
		</div>
	</div>

