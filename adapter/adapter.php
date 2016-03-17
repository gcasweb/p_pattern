<?php
  /*Primeiro a interface*/
  interface comandos{
    public function getDados();
    public function enviaDados($peso, $altura, $largura);
  }
  
  class produto{
    // trabalha com medidas brasileiras
    private $medidas = array();
	
	public function getMedida(){
	  //[0] -> peso, [1]-> altura, [2] -> largura
	  // pegar as medidas estrangeiras já convertidas
	  $adap = new adaptador;
      $this -> medidas = $adap -> getDados();	  
	}

	public function mostraProduto(){
	  print_r($this -> medidas);
	  echo '<br> Agora a validação <br>';
	  $p = $this -> medidas[0];
	  $a = $this -> medidas[1];
	  $l = $this -> medidas[2];	  
	  $adap1 = new adaptador;
	  $adap1 -> enviaDados($p, $a, $l);
	}
	
  }
  
  class adaptador implements comandos{
    public function getDados(){
	  $d1 = new medidas;
	  $dados = $d1 -> getMedidas();
	  
	  $peso = ($dados[0] * 453/1000);
	  $altura = ($dados[1] / 3);
	  $largura = ($dados[2] / 3);
	  
	  $dadosConvertidos = array($peso, $altura, $largura);
	  return $dadosConvertidos;
	}
    public function enviaDados($peso, $altura, $largura){
	  $_peso = $peso / 0.453;
	  $_altura = $altura * 3;
	  $_largura = $largura * 3;
	  
	  $d2 = new medidas;
	  $d2 -> validaMedida($_peso, $_altura, $_largura);
	}
  }
  
  class medidas{
	// medidas gringas
    //libra = 0.453 Kg, ft = 0,3 mts.
  
    private $peso;
    private $altura;
    private $largura;
	
	public function getMedidas(){
	  $medida = array('50', '6', '3');
	  return $medida;
	}
	public function validaMedida($_peso, $_altura, $_largura){
	  $this -> peso = $_peso;
	  $this -> altura = $_altura;
	  $this -> largura = $_largura;
	  
	  echo '<br> originais: '.$this -> peso.', '.$this -> altura.', '.$this -> largura; 
	}
  }
?>