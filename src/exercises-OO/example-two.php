<?php 
	//relacões entre classes.
	class Fabricante{
		private $nome;
		
		public function __construct($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}
	}
	class Produto{
		private $descricao;
		private $preco;
		private $fabricante;

		//Fabricante $fabricante -> para forçar um objeto da class produto.
		public function __construct($descricao, $preco, Fabricante $fabricante){
			$this->descricao = $descricao;
			$this->preco = $preco;
			$this->fabricante = $fabricante;
		}

		public function getDetalhes{
			return "O produto {$this->descricao} custa {$this->preco} reais. fabricante: {$this->fabricante->getNome()}";
			//return "O produto {$this-> descricao} custa {$this -> preco} reais. fabricante: {$this-> fabricante}";
		}
	}

//object criado
$f1 =  new Fabricante('Editora A');
$p1 = new Produto('Book', 50, $f1);
//$p1 = new Produto('Book', 50, 'Editora A');

//var_dump($p1);
echo $p1 -> getDetalhes();

