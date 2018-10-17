<!DOCTYPE html>
<html>
<head>
	<title>Polimorfismo</title>
</head>
<body>
	<?php 
		require_once 'animal.php';
		require_once 'mamifero.php';
		require_once 'reptil.php';

		$m = new Mamifero();
		$r = new Reptil();

		$m->locomover();
		$r->locomover();

	 ?>
</body>
</html>