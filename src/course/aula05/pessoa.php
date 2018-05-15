<?php 
	class Pessoa{
		private nome;
		private idade;
		private sexo;
		
		public function fazerAniver(){
			$this->idade = $this->idade + 1;
		}	

		function __construct($nome, $idade, $sexo) {
			$this->nome = $nome;
			$this->idade = $idade;
			$this->sexo = $sexo;
		}

		//gets ansd sets
		function getNome(){
			return $this->nome;
		}
		function getIdade(){
			return $this->idade;
		}
		function getSexo(){
			return $this->sexo;
		}
		function setNome($nome){
			$this->nome = $nome;
		}
		function setNome($idade){
			$this->idade = $idade;
		}
		function setNome($sexo){
			$this->sexo = $sexo;
		}
	}
?>