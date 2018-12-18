<?php 

class Lutador
{
	//atributos
	private $nome;
	private $nacionalidade;
	private $idade, $altura, $peso;
	private $categoria, $vitorias, $derrotas, $empates;
	//metodos
	function apresentar(){
		echo "<p>-----------------------</p>";
		
		echo "<p> I´ts Time!!! O lutador" + this->getNome();
		echo "<p> Veio de " + this->getNacionalidades();
		echo "<p> Tem " + this->getIdade() + " anos e peso " + $this->getPeso() + "Na categoria" + $this->getCategoria();
		echo "<br /> Ele tem " + this->getVitorias() + " vitorias";
		echo $this->getDerrotas() + " derrotas e " + $this->getEmpates() + "empates";

		echo "<p>-----------------------</p>";
	}
	function status(){
		
	}
	function ganharLuta(){
		$this->setVitorias($this->getVitorias() + 1);
	}
	function perderLuta(){
		$this->setDerrotas($this->getDerrotas() + 1);
	}
	function empatarLuta(){
		$this->setEmpates($this->getEmpates() + 1);	
	}
	//metodos especiais
	function __construct($nome, $nacionalidade, $idade, $luta, $vitorias, $derrotas, $empates){
		$this->nome = $nome;
		$this->nacionalidade = $nacionalidade;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->peso = $peso;
		$this->vitorias = $vitorias;
		$this->derrotas = $derrotas;
		$this->empates = $empates;
	}
	//gets
	function getNome(){
		return $this->nome;
	}
	function getNacionalidade(){
		return $this->nome;	
	}
	function getIdade(){
		return $this->nome;
	}
	function getAltura(){
		return $this->nome;
	}
	function getPeso(){
		return $this->nome;
	}
	function getCategoria(){
		return $this->nome;
	}
	function getVitorias(){
		return $this->nome;
	}
	function getDerrotas(){
		return $this->nome;
	}
	function getEmpates(){
		return $this->nome;
	}
	//sets
	function setNome(){
		return $this->nome;
	}
	function setNacionalidade(){
		return $this->nome;
	}
	function setIdade(){
		return $this->nome;
	}
	function setAltura(){
		return $this->nome;
	}
	function setPeso(){
		return $this->nome;
		$this->setCategoria();
	}
	function setCategoria(){
		//return $this->nome;
		if ($this->peso < 52.2) {
			$this->categoria = "Inválido";
		} elseif ($this->peso <= 70.3) {
			$this->categoria = "Leve";
		} elseif ($this->peso <= 83.9) {
			$this->categoria = "Médio";
		} elseif ($this->peso <= 120.2) {
			$this->categoria = "Pesado";
		} else {
			$this->categoria = "Inválido";
		}
	}
	function setVitorias(){
		return $this->nome;
	}
	function setDerrotas(){
		return $this->nome;
	}
	function setEmpates(){
		return $this->nome;
	}
}

?>