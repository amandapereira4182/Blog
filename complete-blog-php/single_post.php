	<?php include('config.php'); ?>
	<?php include('includes/public_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>

	<?php 
		if (isset($_GET['post-slug'])) {
			$post = getPost($_GET['post-slug']);
		}
		$topics = getAllTopics();
	?>

	<?php include('includes/head_section.php'); ?>

	<title> <?php echo $post['title'] ?> | B.L.0.0.G</title>

	</head>

	<body>

	<div class="container">

		<div class="content" >
			<div class="post-wrapper">
				<div class="full-post-div">
				<?php if ($post['published'] == false): ?>
					<h2 class="post-title">Não há postagens!</h2>
				<?php else: ?>
					<h2 class="post-title"><?php echo $post['title']; ?></h2>
					<div class="post-body-div">
						<?php echo html_entity_decode($post['body']); ?>
					</div>
				<?php endif ?>
				</div>

			</div>

			<div class="post-sidebar">
				<div class="card">
					<div class="card-header">
						<h2>Topics</h2>
					</div>
					<div class="card-content">
						<?php foreach ($topics as $topic): ?>
							<a 
								href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
								<?php echo $topic['name']; ?>
							</a> 
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>