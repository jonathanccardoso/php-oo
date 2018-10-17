<?php 
	class Pessoa{
		private $nome;
		private $idade;
		private $sexo;
		
		public function fazerAniversario(){
			$this->idade++;
		}

		//gets and sets
		public function getNome(){
			return $this->nome;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function getSexo(){
			return $this->sexo;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setNome($idade){
			$this->idade = $idade;
		}
		public function setNome($sexo){
			$this->sexo = $sexo;
		}
	}
 ?>