<?php
	require_once 'animal.php';

	class Reptil extends Animal {
		private $corEscama;

		//classe animal
		public function locomover(){
			echo "<p>Rastejando</p>";
		}
		public function alimentar(){
			echo "<p>Comendo vegetais</p>";
		}
		public function emitirSom(){
			echo "<p>Som de Reptil</p>";
		}
		
		public function getCorEscama{
			return $this->corEscama;
		}
		public function setCorEscama{
			$this->corPelo = $corEscama;
		}
	}
 ?>