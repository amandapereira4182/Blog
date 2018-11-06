	<div class="menu">
		<div class="card">
			<div class="card-header">
				<h2>Ações</h2>
			</div>
	<?php

	if ($_SESSION['user']['role'] == "Admin") {
			
				echo '<div class="card-content">';
				echo '<a href="../admin/create_post.php">CRIAR ARTIGO</a>';
				echo '<a href="../admin/posts.php">GERENCIAR ARTIGO(s)</a>';
				echo '<a href="../admin/users.php">GERENCIAR USUARIO(s)</a>';
				echo '<a href="../admin/topics.php">GERENCIAR CATEGORIA(s)</a>';
				echo '</div>';

		} elseif ($_SESSION['user']['role'] == "Author") {
			
				echo '<div class="card-content">';
				echo '<a href="../admin/create_post.php">CRIAR ARTIGO</a>';
				echo '</div>';
		}

	?>
		</div>
	</div>