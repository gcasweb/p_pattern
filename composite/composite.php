<?php
  interface empreitada{
    public function cadastrar($obj);
    public function tirar($obj);
    public function mostrar();
  }
  
  class profissional implements empreitada{
    private $nome;
	public function cadastrar($_nome){
	  $this -> nome = $_nome;
	}
	public function tirar($_nome){
	  $this -> nome = null;
	}
	public function mostrar(){
	  echo 'Nome: '. $this -> nome.'<br>';
	}
  }
  
  class alocados implements empreitada{
    private $nome;
	private $lista = array();
	
	public function __construct($_nome){
	  $this -> nome = $_nome;
	}
	public function cadastrar($obj){
	  // aqui coloca-se em um array
	  $msg = (array_push($this -> lista, $obj)) ? 'Objeto adicionado com sucesso' : 'deu problema';
	  echo $msg;
	}
	public function tirar($obj){
	  // procedimento para pegar o número
	  for($i=0;$i<count($this->lista);$i++){
	    if($obj == $this->lista[$i]){
		  $num = $i;
		  break;
		}
	  }
	  // agora tirar do array
	  unset($this -> lista[$num]);
	}
	public function mostrar(){
	  echo 'Projeto: '.$this -> nome.'<br>';
	  print_r($this -> lista);
	}	
  }
?>