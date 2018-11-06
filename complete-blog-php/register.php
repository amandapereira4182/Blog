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
			<form method="post" action="register.php" class="form-signin">
				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<img class="mb-4" src="static/images/Administrador.png" width="120" height="120">
	      					
				<input type="text" name="username" value="<?php echo $username; ?>"  placeholder="Nome de usuário..." class="form-control" placeholder="Digite o usuário..." required autofocus>
				
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" name="email" value="<?php echo $email ?>" id="inputEmail" placeholder="Email..." class="form-control" placeholder="Digite o email..." required autofocus>
				
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password_1" placeholder="Digite a senha..." id="inputPassword" class="form-control" placeholder="Senha..." required>
				
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password_2" placeholder="Repita a senha..." id="inputPassword" class="form-control" placeholder="Senha..." required>
				
				<input type="hidden" name="role" value="Author">
				
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user">CADASTRAR</button>
				
				<p>
					Já é cadastrado? <a href="login.php">Acesse...</a>
				</p>
			</form>
		</div>
	</div>
