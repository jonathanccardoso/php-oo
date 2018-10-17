<!DOCTYPE html>
<html>
<head>
	<title>Herança</title>
</head>
<body>
	<pre>
		<?php
			require_once 'pessoa.php';
			require_once 'aluno.php';
			require_once 'professor.php';
			require_once 'funcionario.php';
			//programa principalsss

			$p1 = new Pessoa();
			$p2 = new Aluno();
			$p3 = new Professor();
			$p4 = new Funcionario();

			$p1->setNome("Pedro");
			$p2->setNome("Maria");
			$p3->setNome("Claúdio");
			$p4->setNome("Fabiana");

			$p2->setCurso("Informática");
			$p3->setSalario(2500.75);
			$p4->setSetor("Estoque");

			$p3->receberAum(550.02);
			$p4->mudarTrabalho();
			$p2->cancelarMatr();

			print_r($p1);
			print_r($p2);
			print_r($p3);
			print_r($p4);
		?>
	</pre>
</body>
</html>