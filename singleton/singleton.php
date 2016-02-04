<?php
  class systema{
	static private $inst;
	
	public function __construct(){
	  echo 'foi ';
	}
	//função que irá gerar apenas uma instância
	public static function instancia(){
	  if(!isset(self::$inst)){
		self::$inst = new systema();
	    return self::$inst; 
	  }else{
	    echo 'classe já instanciada <br>';
		return null;
	  }  
	}
	
	public function get_inst(){
	  echo 'Dados instância<br>';
	  print_r(self::$inst);
	}
	
	public function __destruct(){
	  self::$inst = null;
	}
  }
?>