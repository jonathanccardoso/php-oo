<?php 
require_once 'acoesVideo.php';

class Video implements Video{
// automaticamente tem que implementar os metodos

	//encapsulamento
	private $titulo;
	private $avaliacao;
	private $views;
	private $curtidas;
	private $reproduzindo;

	//consstrutor para cada video criado
	public function __construct($titulo){
		$this->titulo = $titulo;
		$this->avaliacao = 1;
		$this->views = 0;
		$this->curtidas = 0;
		$this->reproduzindo = false;

	}

	public function play(){
		$this->reproduzindo = true;
	}
	public function pause(){
		$this->reproduzindo = false;
	}
	public function like(){
		$this->curtidas ++;
	}

	//gets e sets das variaveis...
	public function getTitulo(){
		return $this->titulo;
	}
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function getAvaliacao(){
		return $this->avaliacao;
	}
	public function setAvaliacao($avaliacao){
		$media = ($this->avaliacao + $avaliacao) /$this->views;
		$this->avaliacao = $media;
	}
}