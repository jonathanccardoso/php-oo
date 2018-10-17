<?php 
	require_once 'pessoa.php';

	class Professsor extends Pessoa{
		private $especialidade;
		private $salario;
		
		public function receberAumento($aum){
			$this->salario + $aum;
		}

		public function getEspecialidade(){
			return $this->especialidade;
		}
		public function getSalario(){
			return $this->salario;
		}
		public function setEspecialidade(){
			$this->especialidade = $especialidade;
		}
		public function setSalario(){
			$this->salario = $salario;
		}
	}
 ?>