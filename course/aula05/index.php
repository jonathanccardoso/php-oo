<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<pre>
	<?php 
		require_once 'pessoa.php';
		require_once 'livro.php'; 

		$p[0] = new Pessoa("Isa", 22, "M");
		$p[1] = new Pessoa("Vini", 22, "M");

		$l[0] = new Livro("php", "José", 340, $p[0]);
		$l[1] = new Livro("html", "José", 340, $p[0]);
	 
		print_r($l[0]);
	 ?>
	</pre>
	
</body>
</html>