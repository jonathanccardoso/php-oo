<!DOCTYPE html>
<html>
<head>
	<title>Aula 03</title>
</head>
<body>
	<h1>Projeto Controle Remoto</h1>
	<pre>
		<?php 
			require_once 'controleRemoto.php';

			$c = new ControleRemoto();
			$c-> ligar();
			$c-> setVolume(50);
			$c-> abrirMenu();
		?>
	</pre>
</body>
</html>