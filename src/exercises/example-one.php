<?php 
	class Produto{
		private $descricao;
		private $preco;

		public function __construct($descricao, $preco){
			$this- >descricao = $descricao;
			$this- >preco = $preco;

			//return "Objeto criado";
		}

		public function getDetalhes{
			return "O produto {$this- > descricao} custa {$this - > preco} reais";
		}

		public function setDescricao($valor){
			$this- > descricao = $valor;
		}
		public function setPreco($valor){
			$this- > preco = $valor;
		}
		
		public function getDescricao(){
			return $this- > descricao;
		}
		public function getPreco(){
			return $this- > preco;
		}
	}

//object criado
//$p1 = new Produto;

//forma correta com o metodo construtor
$p1 = new Produto('Book', 50);

//forma errada
//$p1 - > descricao = 'Book';
//$p1 - > preco = 50;

//forma correta com 'set'
//$p1 - > setDescricao('Book');
//$p1 - > setPreco(50);

var_dump($p1);
//echo $p1 - > getDetalhes();

