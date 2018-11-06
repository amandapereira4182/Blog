	<?php 
		session_start();

		$conn = mysqli_connect("localhost", "root", "", "complete-blog-php");

		if (!$conn) {
			die("ERRO AO CONECTAR NO BANCO DE DADOS: " . mysqli_connect_error());
		}

		define ('ROOT_PATH', realpath(dirname(__FILE__)));
		define('BASE_URL', 'http://localhost/complete-blog-php/');
	?>