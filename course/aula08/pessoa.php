<?php 
//não pode ser insstaciada
abstract class Pessoa{
	protected $nome;
	protected $idade;
	protected $sexo;
	protected $experiencia;

	public function __construct($nome, $idade,$sexo){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->sexo = $sexo;
		$this->experiencia = 0;
	}
	protected function ganharExp($n){
		$this->experiencia +=$n;	
	}

	//gets e sets dos atributos

}