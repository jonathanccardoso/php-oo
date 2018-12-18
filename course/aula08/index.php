<!DOCTYPE html>
<html>
<head>
	<title>YouTube</title>
</head>
<body>
	<pre>
		<?php 
			require_once 'video.php';
			require_once 'gafanhoto.php';
			require_once 'visualizacao.php';

			$v[0] = new Video("Aula 1 de POO");
			$v[1] = new Video("Aula 12 de PHP");
			$v[2] = new Video("Aula 10 de HTML5");

			//$p = new Pessoa("Jubileu", 22, "")
			$g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
			$g[1] = new Gafanhoto("Jubileu 1", 32, "M", "juba");

			$vis[0] = new Visualizacao($g[0], $v[2]);//jubileu assiste html5

			$vis[1] = new Visualizacao($g[0], $v[1]);

			$vis[0]->avaliar();
			$vis[1]->avaliarPorc(85);

			print_r($vis);
			//print_r($v);
			//print_r($g);

		 ?>
	</pre>
 </body>
</html>