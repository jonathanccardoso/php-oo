<?php 

class Caneta{
		private $modelo;
		private $ponta;
		private $cor;
		private $tampada;

		public function Caneta($m, $c, $p){ //or __construct
			
			$this-> modelo = $m;
			$this-> cor = $c;
			$this-> ponta = $p;
			//$this-> tampar();
			$this-> setTampada(true);

			//$this-> cor = "Azul";
			//$this-> tampar();
		}

		public function tampar(){
			$this->tampada = true;
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function getPonta(){
			$this->ponta;
		}
		public function getCor(){
			$this->cor;
		}

		public function setModelo($m){
			$this->modelo = $m;
		}
		public function setTampada($t){
			$this->tampada = $t;
		}
	}
	
?>