<?php 
//Herança entre classes.

class Conta{
	protected $agencia;
	protected $conta;
	protected $saldo;

	public function __construct($agencia, $conta, $saldo){
		$this- >agencia = $agencia;
		$this- >conta = $conta;
		$this- >saldo = $saldo;
	}

	public function getDetalhes(){
		return "Agência: {$this- >agencia} | Conta: {$this- >conta} | Saldo: {$this- >saldo} <br /> "
	}

	public function depositar($valor){
		$this- > saldo += $valor;
		echo "Desposito de: {$valor} | Saldo atual: {$this- >saldo} <br />";
	}
}

class Poupanca extends conta{
	public function saque($valor){
		if(this- >saldo >= $valor):
			$this- >saldo -= $valor;
			echo "Saque de {$valor} | Saldo atual: {$this- > saldo} <br /> ";
		else:
			echo "Saque não autorizado de {$valor} | Saldo atual: {$this- > saldo} <br /> ";
		endif;
	}
}

class Corrente extends conta{
	protected $limite;

	public function __construct($agencia, $conta, $saldo, $limite){
		//$this- >agencia = $agencia;
		//$this- >conta = $conta;
		//$this- >saldo = $saldo;
	//substitui por:
		parent:: __construct($agencia, $conta, $saldo);
		$this- >limite = $limite;
	}

	public function saque($valor){
		if((this- >saldo + this- >limite) >= $limite):
			
			$this- >saldo -= $valor;
			echo "Saque de {$valor} | Saldo atual: {$this- > saldo} <br /> ";
		else:
			echo "Saque não autorizado de {$valor} | Saldo atual: {$this- > saldo} | Limite: {$this- > limite} <br /> ";
		endif;
	}
}

//$c1 = new Conta(100, 2560, 5000);

/*
$c1 = new Poupanca(100, 2560, 5000);
$c1- >depositar(800);
$c1- >saque(2500);
*/

//$c1- >saque(4500);// saque não autorizado.

$c1 = new Corrente(100, 2560, 5000, 500);
$c1- >depositar(800);
$c1- >saque(2500);

echo $c1- >getDetalhes();
