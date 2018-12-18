<?php 

public class Caneta{
	private var $modelo;
	private var $cor;
	private var $ponta;
	private var $carga;
	private var $tampada;

	public function rabiscar(){
		if($this->tampada == true){
			echo "<p>não posso rabiscar</p>";
		} else {
			echo "<p>estou rabiscando</p>";
		}
	}
	public function tampar(){
		$this-> tampada = true;
	}
	public function destampar(){
		$this-> tampada = false;	
	}
}

?>