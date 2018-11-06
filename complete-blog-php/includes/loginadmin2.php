  <?php if (isset($_SESSION['user']['username'])) { ?>
  	<div class="logged_in_info">
  		<span>Bem-vindo <?php echo $_SESSION['user']['username'] ?></span>
  		|
  		<span><a href="logout.php">Sair</a></span>

  		<?php header('location: dashboard.php'); ?>
  	</div>
  <?php }else{ ?>

  <?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>

  <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">

    <body class="text-center">
    	<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" class="form-signin">
      
        <img class="mb-4" src="../static/images/Administrador.png" width="120" height="120">
        <h1 class="h3 mb-3 font-weight-normal">ADMINISTRADOR</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Digite o usuário..." required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha..." required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_btn">Acessar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>
    </body>

  <?php } ?>