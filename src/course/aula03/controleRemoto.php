<?php 
	require_once 'controlador.php';

	class ContoleRemoto implements Controlador{
		//atributos
		private $volume;
		private $ligado;
		private $tocando;
		
		//metodos especiais
		public function __construct(){
			$this->volume = 50;
			$this->ligado = false;
			$this->tocando = false;
		}

		private function getVolume(){
			return $this->volume;
		}
		private function getLigado(){
			return $this->ligado;
		}
		private function getTocando(){
			return $this->tocando;
		}
		private function setVolume($volume){
			$this->volume = $volume;
		}
		private function setLigado($ligado){
			$this->ligado = $ligado;
		}
		private function setTocando($tocando){
			$this->tocando = $tocando;
		}

		//adcionado da class controlador
		public abstract function ligar(){
			$this->setLigado(true);
		}
		public abstract function desligar(){
			$this->setLigado(false);
		}
		public abstract function abrirMenu(){
			//operador ternário
			echo "<br />Está ligado?: " . ( $this->getLigado() ) ? "Sim" : "Não";
			echo "<br />Está tocando?: " . ( $this->getTocando() ) ? "Sim" : "Não";
			echo "<br />Volume: " . getVolume();


			for ($i=0; $i < getVolume(); $i+=10){ 
				echo "|";
			}
			echo "<br />";

		}
		public abstract function fecharMenu(){
			echo "<br />Fechando Menu...";
		}
		public abstract function maisVolume(){
			if ($this->getVolume()) {
				$this->setVolume($this->getVolume() + 5);
			}
		}
		public abstract function menosVolume(){
			if ($this->getVolume()) {
				$this->setVolume($this->getVolume() - 5);
			}
		}
		public abstract function ligarMudo(){
			if ($this->getLigado() && $this->getVolume() > 0) {
				$this->setVolume(0);
			}
		}
		public abstract function desligarMudo(){
			if ($this->getLigado() && $this->getVolume() == 0) {
				$this->setVolume(50);
			}
		}
		public abstract function play(){
			if ($this->getLigado() && !($this->	getTocando())) {
				$this->setTocandos(true);
			}
		}
		public abstract function pause(){
			if ($this->getLigado() && $this->	getTocando()) {
				$this->setTocandos(false);
			}
		}
	}

?>