	<?php include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>

		<title>B.L.0.0.G</title>
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
					<h1>Painel de Controle</h1>
				</a>
			</div>
			<?php if (isset($_SESSION['user'])): ?>
				<div class="user-info">
					<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
					<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Sair</a>
				</div>
			<?php endif ?>
		</div>

	<?php
	if ($_SESSION['user']['role'] == "Admin") {
		echo '<div class="container dashboard" align="center">';
			echo '<div class="stats">';
				echo '<a href="users.php" class="first">';
					echo '<span>ADMINISTRAR USUARIOS
					<img class="mb-4" src="../static/images/adminuser.png" width="120" height="120">
					</span>';
				echo '</a>';
				echo '<a href="posts.php">';
					echo '<span>PUBLICAR/AVALIAR POST
						<img class="mb-4" src="../static/images/adminpost.png" width="120" height="120">
					</span>';
				echo '</a>';
			echo '</div>';
					

		} elseif ($_SESSION['user']['role'] == "Author") {
			
		echo '<div class="container dashboard" align="center">';
			echo '<div class="stats">';
				echo '<a href="posts.php">';
					echo '<span>PUBLICAR POST
						<img class="mb-4" src="../static/images/adminpost.png" width="120" height="120">
					</span>';
				echo '</a>';
			echo '</div>';

		}
	?>

		</div>
	</body>
	</html>
