	<?php include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>

	<!-- Get all admin posts from DB -->
	<?php $posts = getAllPosts(); ?>
		<title>B.L.0.0.G</title>
	</head>
	<body>
		<!-- admin navbar -->
		<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

		<div class="container content">
			<!-- Left side menu -->
			<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

			<!-- Display records from DB-->
			<div class="table-div"  style="width: 100%;">
				<!-- Display notification message -->
				<?php include(ROOT_PATH . '/includes/messages.php') ?>

				<?php if (empty($posts)): ?>
					<h1 style="text-align: center; margin-top: 20px;">Não há postagens!</h1>
				<?php else: ?>
					<table class="table">
							<thead>
							<th>ID</th>
							<th>AUTOR</th>
							<th>TITULO</th>
							<th>VISUALIZAÇÕES</th>
							<!-- Only Admin can publish/unpublish post -->
							<?php if ($_SESSION['user']['role'] == "Admin"): ?>
								<th><small>PULICAR</small></th>
							<?php endif ?>
							<th><small>EDITAR</small></th>
							<th><small>APAGAR</small></th>
						</thead>
						<tbody>
						<?php foreach ($posts as $key => $post): ?>
							<tr>
								<td><?php echo $key + 1; ?></td>
								<td><?php echo $post['author']; ?></td>
								<td>
									<a 	target="_blank"
									href="<?php echo BASE_URL . 'single_post.php?post-slug=' . $post['slug'] ?>">
										<?php echo $post['title']; ?>	
									</a>
								</td>
								<td><?php echo $post['views']; ?></td>
								
								<!-- Only Admin can publish/unpublish post -->
								<?php if ($_SESSION['user']['role'] == "Admin" ): ?>
									<td>
									<?php if ($post['published'] == true): ?>
										<a class="fa fa-check btn unpublish"
											href="posts.php?unpublish=<?php echo $post['id'] ?>">
										</a>
									<?php else: ?>
										<a class="fa fa-times btn publish"
											href="posts.php?publish=<?php echo $post['id'] ?>">
										</a>
									<?php endif ?>
									</td>
								<?php endif ?>

								<td>
									<a class="fa fa-pencil btn edit"
										href="create_post.php?edit-post=<?php echo $post['id'] ?>">
									</a>
								</td>
								<td>
									<a  class="fa fa-trash btn delete" 
										href="create_post.php?delete-post=<?php echo $post['id'] ?>">
									</a>
								</td>
							</tr>
						<?php endforeach ?>
						</tbody>
					</table>
				<?php endif ?>
			</div>
			<!-- // Display records from DB -->
		</div>
	</body>
	</html>
