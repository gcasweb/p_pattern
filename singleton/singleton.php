<?php
  class systema{
	static private $inst;
	
	public function __construct(){
	  echo 'foi ';
	}
	//fun��o que ir� gerar apenas uma inst�ncia
	public static function instancia(){
	  if(!isset(self::$inst)){
		self::$inst = new systema();
	    return self::$inst; 
	  }else{
	    echo 'classe j� instanciada <br>';
		return null;
	  }  
	}
	
	public function get_inst(){
	  echo 'Dados inst�ncia<br>';
	  print_r(self::$inst);
	}
	
	public function __destruct(){
	  self::$inst = null;
	}
  }
?>