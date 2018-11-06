	<?php include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>
	<!-- Get all topics -->
	<?php $topics = getAllTopics();	?>
		<title>B.L.0.0.G</title>
	</head>
	<body>
		<!-- admin navbar -->
		<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

		<div class="container content">
			<!-- Left side menu -->
			<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

			<!-- Middle form - to create and edit  -->
			<div class="action create-post-div">
				<h1 class="page-title">CRIAR/EDITAR POSTAGEM</h1>
				<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post.php'; ?>" >
					<!-- validation errors for the form -->
					<?php include(ROOT_PATH . '/includes/errors.php') ?>

					<!-- if editing post, the id is required to identify that post -->
					<?php if ($isEditingPost === true): ?>
						<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
					<?php endif ?>

					<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Titulo" required autofocus>
					<input type="file" name="featured_image" required autofocus>
					<textarea name="body" id="body" cols="30" rows="10" required autofocus><?php echo $body; ?></textarea>
					<select name="topic_id" required autofocus>
						<option value="" selected disabled required autofocus>Escolha a categoria...</option>
						<?php foreach ($topics as $topic): ?>
							<option value="<?php echo $topic['id']; ?>">
								<?php echo $topic['name']; ?>
							</option>
						<?php endforeach ?>
					</select>
					
					<!-- Only admin users can view publish input field -->
					<?php if ($_SESSION['user']['role'] == "Admin"): ?>
						<!-- display checkbox according to whether post has been published or not -->
						<?php if ($published == true): ?>
							<label for="publish">
								Publicar
								<input type="checkbox" value="1" name="publish" checked="checked">&nbsp;
							</label>
						<?php else: ?>
							<label for="publish">
								Publicar
								<input type="checkbox" value="1" name="publish">&nbsp;
							</label>
						<?php endif ?>
					<?php endif ?>
					
					<!-- if editing post, display the update button instead of create button -->
					<?php if ($isEditingPost === true): ?> 
						<button type="submit" class="btn" name="update_post">ATUALIZAR</button>
					<?php else: ?>
						<button type="submit" class="btn" name="create_post">SALVAR</button>
					<?php endif ?>

				</form>
			</div>
			<!-- // Middle form - to create and edit -->
		</div>
	</body>
	</html>

	<script>
		CKEDITOR.replace('body');
	</script>
