<?php
  session_start();
  
  class credencial{
    private $nome;
	
	public function __construct($_nome){
	  $this -> nome = $_nome;
	}
	
	public function mostra(){
	  echo 'Nome Pessoa: '. $this -> nome;
	}
	
	public function __destruct(){
	  unset($this -> nome);
	}
  }
  
  class gCred{
    private $obj;
	static private $bacia = array();
	
    public static function criaObj(){
	  // array com nomes de objetos a serem instanciados
	  $nomes = array('jose', 'maria', 'joao');
	  for($i=0;$i<count($nomes);$i++){
	    self::$bacia['chave'][$i] = $nomes[$i];
	    self::$bacia['obj'][$i] = new credencial($nomes[$i]);
	    self::$bacia['sta'][$i] = 'livre';
	  }
	  $_SESSION['arr'] = self::$bacia;
	}
	
	public static function veInst($cred){
	  $arr1 = $_SESSION['arr'];
	  //fazer um for pra pegar o numero
	  for($i=0;$i<count($arr1['chave']);$i++){
	    if($cred == $arr1['chave'][$i]){
          $num = $i;
		  break;
	    }
	  }
	  
	  if(!in_array($cred, $arr1['chave'])){
		$inst = new credencial($cred);
		$ob_pool = ($inst instanceof credencial)? new gCred($inst): null;
		//agora adicionar ao array
		$elemento = count($arr1['obj']);
		self::$bacia['chave'][$elemento] = $cred;
		self::$bacia['obj'][$elemento] = $inst;
		self::$bacia['sta'][$elemento] = 'ocupado';
		echo 'Objeto NOVO -> <br>';
		// jogar na session
		$_SESSION['arr']['chave'][$elemento] = $cred;
		$_SESSION['arr']['obj'][$elemento] = $inst;
		$_SESSION['arr']['sta'][$elemento] = 'ocupado';
	  }else if($cred == $arr1['chave'][$num] and $arr1['sta'][$num] == 'livre'){
		// verificar se foi instanciado
		
		echo 'Objeto REAPROVEITADO -> <br>';
		$ob_pool = new gCred($arr1['obj'][$num]);
        self::$bacia['sta'][$num] = 'ocupado';
        $_SESSION['arr']['sta'][$num] = 'ocupado';		
	    return $ob_pool;
	  }else{
	    echo 'Objeto INDISPONÍVEL <br>';
		$ob_pool = null;
	  }
	  $_SESSION['arr'] = self::$bacia;
	  return $ob_pool;
	}
	
	public static function mostra(){
	  $arr1 = $_SESSION['arr'];
	  print_r(self::$bacia);
	  echo '<hr>';
	  print_r($arr1);
	}
	
	public function get(){
	  echo $this -> obj -> mostra();
	}
	
	public function __construct($_obj){
	  $this -> obj = $_obj;
	}	
	
	public static function devolver($num){
	  $_SESSION['arr']['sta'][$num]='livre';
	  self::$bacia['sta'][$num] = 'livre';
      echo "<br> Credencial Liberada: ".self::$bacia['chave'][$num] ;  
	}
	
  }
?>