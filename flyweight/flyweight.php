<?php
  class verValor{
    private static $cesta = array();
	
	public static function insArray(){
	  self::$cesta['ind'][0] = 'boi';
	  self::$cesta['obj'][0] = new valor('boi', 20);
	  self::$cesta['ind'][1] = 'soja';
	  self::$cesta['obj'][1] = new valor('soja', 100);
	}
	public static function veObj($nome, $valor){
	  if(in_array($nome, self :: $cesta['ind'])){
        $num = array_search($nome, self :: $cesta['ind']);
		return self::$cesta['obj'][$num];
		echo 'objeto retornado';
	  }else{
	    // primeiro criar-se-á o objeto
		$num = count(self :: $cesta['obj']);
		$ob = new valor($nome, $valor);
		self::$cesta['ind'][$num] = $nome;
		self::$cesta['obj'][$num] = $ob;
		return self::$cesta['obj'][$num];
		echo 'objeto criado <br>';
	  }
	}
  }
  
  interface contextua{
    public function adapta($valor);
  }
  
  class valor implements contextua{
    private $nome;
    private $valorBruto;
	
	public function __construct($_nome, $vBruto){
	  $this -> nome = $_nome;
	  $this -> valorBruto = $vBruto;
	}
	
	public function adapta($valor){
	  $vTotal = $this -> valorBruto * $valor;
	  //return $vTotal;
	  echo '<br>'.$vTotal;
	}
  }
?>