<!DOCTYPE html>
<html>
<head>
	<title>Aula 01</title>
</head>
<body>
	<?php 
		required_once 'caneta.php';

		$c1 = new Caneta;
		$c1- > cor = "Azul";
		$c1- > ponta = 0.5;
		$c1- > tampada = false;
		$c1- > tampar();
		$c1- > rabiscar();

		//var_dump($c1);
		print_r($c1);

		$c2 = new Caneta;
		$c2- >cor = "Verde"; 
		$c2- >cor = "Verde"; 
		$c2- >tampar(); 
		print_r($c2);
	?>
</body>
</html>