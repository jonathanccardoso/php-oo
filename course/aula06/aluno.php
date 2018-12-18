<?php 
	require_once 'pessoa.php';

	class Aluno extends Pessoa{
		private $matr;
		private $curso;
		
		public function cancelarMatr(){
			echo "<p>Matricula cancelada</p>";
		}

		public function getMatr(){
			return $this->matr;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function setMatr(){
			$this->matr = $matr;
		}
		public function setCurso(){
			$this->curso = $curso;
		}
	}
 ?>