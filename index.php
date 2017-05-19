<!DOCTYPE html>
<?php 
require './config/config.php';
$data = "juste pour le test";

$req = $mysql->prepare("INSERT INTO content SET ");
echo "tonton";
?>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>tp back coté front avec jquery et methode ajax </title>
		<meta name="description" content="">
		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/01.css">
		
	</head>
	<body>
		<!-- header -->
		<header>
			entete
		</header>
		<!-- /header -->

		<!-- main -->
		<main contenteditable="true">
			main
		</main>
		<!-- /main -->

		<!-- footer -->
		<footer>
			<p contenteditable="true">lorem</p>
		</footer>
		<!-- /footer -->
		<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	</body>
</html>