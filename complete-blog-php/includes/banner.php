	<?php if (isset($_SESSION['user']['username'])) { ?>
		<div class="logged_in_info">
			<span>Bem-vindo <?php echo $_SESSION['user']['username'] ?></span>
			|
			<span><a href="logout.php">Sair</a></span>
		</div>
	<?php }else{ ?>
		<div class="banner">
			<div class="welcome_msg">
				<h1>Today's Inspiration</h1>
				<p> 
				    One day your life <br> 
				    will flash before your eyes. <br> 
				    Make sure it's worth watching. <br>
					<span>~ Gerard Way</span>
				</p>
				<a href="register.php" class="btn">Cadastre-se...</a>
			</div>

			<div class="login_div">
				<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
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
