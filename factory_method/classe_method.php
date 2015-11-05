<?php
  // classe abstrata e interface
  abstract class parede{
    abstract function criaParede($classe);
  }
  
  interface mexeParede{
    public function pintar($cor);
	public function derrubar();
  }
  
  // classes concretas
  class levantaParede{
	public static function criaParede($tipo){
	  return new $tipo;
	}
  }
  
  class levantaParede2 extends parede{
	public function criaParede($classe){
	  return new $classe;
	}
  }
  
  class paredePersonalizada implements mexeParede{
	private $cor;
	public function pintar($_cor){
	  $this ->cor = $_cor;
	  return $this;
	}
	
	public function derrubar(){
	  echo "parede derrubada";
	}
	
	public function getParede(){
	  echo 'Cor: '.$this -> cor;
	}
  }
?>