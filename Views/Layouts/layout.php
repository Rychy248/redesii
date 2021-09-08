<!DOCTYPE html>
<html lang="es">
<head>
	<title>Redes de comutadoras II</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!--hoja que yo agregue-->
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="p-3 mb-2 bg-info text-dark">
	
	<?php if ( $controller == 'login'):?>
		<header> <?php require_once('unregisterCabecera.php'); ?> </header>
	<?php  else: ?>
		<header> <?php require_once('cabecera.php'); ?> </header>
	<?php endif; ?>

	<section> <?php require_once('routing.php'); ?> </section>

	<footer> <?php require_once('pie.php'); ?> </footer>

</body>
</html>