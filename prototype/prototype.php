<?php
  // classes principais
  abstract class produtor{
	abstract function __clone();
  }
  
  class livro extends produtor{
    private $autor;
	
	public function __construct($aut){
	  $this -> autor = $aut;
	}
	
	public function alterar($aut){
	  $this -> autor = $aut;
	}	
	
	public function __clone(){
	  $inst = new livro($this -> autor);
	  return $inst;	  
	}
	
	public function get_obj($obj){
	  print_r($obj);
	}
	
  }

  class cd extends produtor{
    private $banda;
	
	public function __construct($ban){
	  $this -> banda = $ban;
	}
	
	public function alterar($ban){
	  $this -> banda = $ban;
	}
	
	public function __clone(){
	  $inst = new cd($this -> banda);
	  return $inst;	  
	}
	
	public function get_obj($obj){
	  print_r($obj);
	}	
  }
  
  class leitor{
    private $copia;
    public function pedir($classe, $p1){
	  $inst = new $classe($p1);
	  $this -> copia = clone $inst;
	  
	  echo 'objeto original: <br>';
	  print_r($inst);
	}
	
	public static function sta_pedido($classe, $p1){
	  $inst = new $classe($p1);
	  $copia2 = clone $inst;
	  
	  echo 'objeto original: <br>';
	  print_r($inst);
	  
	  return $copia2;
	}
	
	public function altera($ded){
	  $this -> copia -> alterar($ded);
	}
	
	public function usar(){
	  echo '<br> objeto Clonado <br>';
	  print_r($this -> copia);
	}
  }
?>