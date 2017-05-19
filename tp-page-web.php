<?php 
session_start();
$_SESSION['user']=true;
require 'config/config.php';
function showText($mysql) {
	$req = $mysql->query("SELECT * FROM content WHERE url = 'tp-page-web' ");
	$data = $req->fetch();
	$content = $data['content'];
	$d = json_decode($content);
	return $d;
}

$show = showText($mysql);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>tp page web </title>
		<meta name="description" content="description unique par page">
		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./icomoon/style.css">
		<link rel="stylesheet" href="./css/grid.css">
		<link rel="stylesheet" href="./css/25.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	</head>
	<body>
		<!-- header -->
		<header class="container">
			<nav>
				<ul>
					<li class="active"><a href="./">lien 1</a></li>
					<li><a href="#">lien 2</a></li>
					<li><a href="#">lien 3</a></li>
					<li><a href="#">lien 4</a></li>
					<li><a href="#">lien 5</a></li>
				</ul>
			</nav>
			<span class="icon-navicon"></span>
		</header>
		<!-- /header -->

		<!-- main -->
		<main class="container">

			<!-- .bandeau -->
			<section class="bandeau" contenteditable="false">
				<?php echo $show[0]; ?>
			</section>
			<!-- /.bandeau -->

			<!-- .accroche -->
			<div class="accroche row">
				<h3 class="col-xs-10" contenteditable="false"><?php echo $show[1]; ?></h3>
				<a href="#" class="col-xs-2">
					<span class="icon-arrow-circle-right"></span>
				</a>
			</div>
			<!-- /.accroche -->

			<!-- .gallery -->
			<div class="gallery row">
				<figure class="col-xs-12 col-sm-4">
					<img src="./img/gal1.jpg" alt="gallery">
				</figure>
				<figure class="col-xs-12 col-sm-4">
					<img src="./img/gal2.jpg" alt="gallery">
				</figure>
				<figure class="col-xs-12 col-sm-4">
					<img src="./img/gal3.jpg" alt="gallery">
				</figure>
			</div>
			<!-- /.gallery -->

			<!-- .content -->
			<section class="content">
				<h1 contenteditable="false"><?php echo $show[2]; ?></h1>
				<div class="row">
					<div class="col-xs-12 col-sm-6" contenteditable="false">
						<?php echo $show[3]; ?>
					</div>
					<div class="col-xs-12 col-sm-6" contenteditable="false">
						<?php echo $show[4]; ?>
					</div>
				</div>
			</section>
			<!-- /.content -->


		</main>
		<!-- /main -->

		<!-- footer -->
		<footer class="container ">
			<ul class="row">
				<li class="col-xs-12 col-sm-6" contenteditable="false">
					<?php echo $show[5]; ?>
				</li>
				<li class="col-xs-12 col-sm-6" contenteditable="false">
					<?php echo $show[6]; ?>
				</li>
			</ul>
		</footer>
		<!-- /footer -->

		<div class="alert">
			<p class="successMsg">text</p>
			<span class="icon-times-circle"></span>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
		<script src="./js/tp.js"></script>
		<?php 
		if(isset($_SESSION['user'])) {
			?>
				<script>
					$('[contenteditable="false"]').attr("contenteditable","true");
				</script>
				<button class="publish">publier</button>
			<?php
		}
		?>
	</body>
</html>