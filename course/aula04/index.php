<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
</head>
<body>
	<p>Falta completar o 16:00 | Compostos em PHP</p>

	<?php 
		require_once "lutador.php";

		$i = array();
		$i[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90, 11, 2, 1);
		$i[1] = new Lutador("Putsscript", "Brazil", 30, 1.75, 90, 11, 2, 1);
		$i[2] = new Lutador("Pretty Boy1", "França", 30, 1.75, 90, 11, 2, 1);
		$i[3] = new Lutador("Pretty Boy2", "França", 30, 1.75, 90, 11, 2, 1);
		$i[4] = new Lutador("Pretty Boy3", "França", 30, 1.75, 90, 11, 2, 1);
		$i[5] = new Lutador("Pretty Boy4", "França", 30, 1.75, 90, 11, 2, 1);

		//$i[3]->setCategoria(); //não pode ser chamado. 
		$i[3]->perderluta();
		$i[3]->apresentar();
		$i[4]->status();

	?>
</body>
</html>