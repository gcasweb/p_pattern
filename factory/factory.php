<?php
  //client
  class empresa{
    private $nome;
	private $barco;
	
	public function __construct($_nome){
	  $this -> nome = $_nome;
	}
	
	public function encomenda($nome, $tipo){
	   $emb = new estaleiro;
	   $this -> barco = $emb -> fazBarco($nome, $tipo);
	}
	
	public function pilotar($acao){
	  echo 'Operador / propietário: '.$this -> nome.'<br>'; 
	  $this -> barco -> $acao() -> getBarco();
	}
  }
  
  //factory -> fabrica concreta
  class estaleiro{
    public function fazBarco($nome, $tipo){
	  return new barco($nome, $tipo);
	}
  }
  
  //interface
  interface comandos{
    public function ligar();
    public function navegar();
	public function ancorar();
  }
  
  // concrete product -> produto concreto
  class barco implements comandos{
    private $nome;
	private $estado;
	private $tipo;
	
	public function __construct($_nome, $_tipo){
	  $this -> nome = $_nome;
	  $this -> tipo = $_tipo;
	}
	
	public function ligar(){
	  $this -> estado = 'ligado... Zarpando...';
	  return $this;
	}	
	
	public function navegar(){
	  $this -> estado = 'Desbravando os mares...';
	  return $this;
	}	
	
	public function ancorar(){
	  $this -> estado = 'Desligar motores... Soltar ancôra';
	  return $this;
	}
	
	public function getBarco(){
	  echo 'Tipo: '.$this-> tipo.', Nome: '.$this -> nome.', Operação: '.$this -> estado;
	}
  }
?>