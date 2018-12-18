<!DOCTYPE html>
<html>
<head>
	<title>Aula 02</title>
</head>
<body>
	<pre>
		<?php 
		require_once 'caneta.php';
		
		$c1 = new Caneta("BIG", "Azul", 0.5);	
		$c2 = new Caneta("BIG - 1", "Verde", 1.0);	
		
		print_r($c1);
		print_r($c2);

/*
		$c1 = new Caneta;
		$c1->setModelo("BIG"); // or $c1->modelo = "BIG"; modelo is public
		$c1->setPonta(0.5);

		//print_r($c1);
		print "Eu tenho uma caneta {$c1-> getModelo() } de ponta {$c1-> getPonta() }"
		
*/
		?>
	</pre>
</body>
</html>