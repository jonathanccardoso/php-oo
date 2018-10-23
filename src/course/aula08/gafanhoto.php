<?php 
require_once 'pessoa.php';
class Gafanhoto extends Pessoa{
	private $login;
	private $totAssistido;

	function __construct($nome, $idade, $sexo, $login){
		//chamada da super classe
		parent::__construct($nome, $idade, $sexo);
		$this->login = $login;
		$this->totAssistido = 0;		
	}

	public function assistirMaisUm(){
		$this->totAssistido ++;
	}
	//gets e sets dos atributos

}
