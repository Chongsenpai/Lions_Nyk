<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Sigende titel</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!-- Menu -->
<?php include 'include/menu.php';?>
	<!-- Carousel -->
<?php include 'include/carousel.php';?>

<section class="counter_section">
	<div class="counter">
		<h5 class="counter__header">Lions Nykøbing har i år indsamlet:</h5>
		<h1 class="counter__sum">21.401.301 kr</h1>
		<p class="counter__update">opdateres hvert minut</p>
		<hr>
		<div class="counter-btn">
			<a href="#"><div class="counter-btn__donate"><p>Støt</p></div></a>
			<a href="#"><div class="counter-btn__member"><p>Bliv medlem</p></div></a>
		</div>


	</div>
</section>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
