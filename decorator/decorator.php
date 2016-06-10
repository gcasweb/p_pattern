<?php
  interface func01{
    public function trabalhar();
  }
  
  class funcionario implements func01{
    private $nome;
    private $mat;
    private $funcao;
	
	public function __construct($_nome, $_mat, $func){
	  $this -> nome = $_nome;
	  $this -> mat = $_mat;
	  $this -> funcao = $func;
	}
	
	public function trabalhar(){
	  echo " trabalhando ";
	}
	
	public function mostraFunc(){
	  echo 'Nome: '.$this -> nome.' Matricula: '.$this -> mat.' Função: '.$this -> funcao;
	}
  }
  
  class promovedor implements func01{
    protected $obj;
	
	public function __construct(&$_obj){
	  $this -> obj = $_obj;
	}
	
	public function trabalhar(){
	  $this -> obj -> trabalhar();
	}	
	
  }
  
  class peao extends promovedor{
  
    public function trabalhar(){
	  $this -> obj-> trabalhar();
	  $this -> funcExtra();
	}
	
	public function funcExtra(){
	  echo '<br> Vida de gado - funcao extra sem dinheiro :( <br>';
	}
	
	public function mostrar(){
	  //print_r($this -> obj);
	  $this -> obj -> mostraFunc();
	}
	
  }
?>