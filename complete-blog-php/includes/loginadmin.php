	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<?php if (isset($_SESSION['user']['username'])) { ?>
		<div class="logged_in_info">
			<span>Bem-vindo <?php echo $_SESSION['user']['username'] ?></span>
			|
			<span><a href="logout.php">logout</a></span>

			<?php header('location: dashboard.php'); ?>
		</div>
	<?php }else{ ?>

			<div class="login_div">
				<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
					<h2>Login</h2>
					<div style="width: 60%; margin: 0px auto;">
						<?php include(ROOT_PATH . '/includes/errors.php') ?>
					</div>
					<input type="text" name="username" value="<?php echo $username; ?>" placeholder="usuario">
					<input type="password" name="password"  placeholder="senha"> 
					<button class="btn" type="submit" name="login_btn">Entrar...</button>
				</form>
			</div>
		</div>
	<?php } ?>


			
			