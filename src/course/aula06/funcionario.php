<?php 
	require_once 'pessoa.php';

	class Funcionario extends Pessoa{
		private $setor;
		private $trabalhando;
		
		public function mudarTrabalho($aum){
			$this->trabalhando = ! $this->trabalhando;
		}

		public function getSetor(){
			return $this->setor;
		}
		public function getTrabalhando(){
			return $this->trabalhando;
		}
		public function setSetor(){
			$this->setor = $setor;
		}
		public function setTrabalhando(){
			$this->trabalhando = $trabalhando;
		}
	}
 ?>