<?php
	require_once 'animal.php';
	//para extender da classe animal tem que atribuir os metodos abstratos de animal
	class Mamifero extends Animal {
		private $corPelo;

		// classe animal
		public function locomover(){
			echo "<p>Correndo</p>";
		}
		public function alimentar(){
			echo "<p>Mamando</p>";
		}
		public function emitirSom(){
			echo "<p>Som de Mamifero</p>";
		}
		
		public function getCorPelo{
			return $this->corPelo;
		}
		public function setCorPelo{
			$this->corPelo = $corPelo;
		}
	}
 ?>