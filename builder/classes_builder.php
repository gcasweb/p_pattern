<?php
  // implementação das classes de "fabrica"

  abstract class veiculo{
    protected $tipo;
    protected $ano;
    protected $cor;
	
	protected function cad_veic($_tipo, $_ano, $_cor){
	  $this -> tipo = $_tipo;
	  $this -> ano = $_ano;
	  $this -> cor = $_cor;
	}
	
	abstract function dados_veic();
  }
  
  // classes filhas
  
  class bicicleta extends veiculo{
    private $num_marchas;
	
	public function setMarcha($_num_marchas){
	  $this -> num_marchas = $_num_marchas;
	  return $this;
	}
	
	public function cad_veicu($ano, $cor){
	  parent :: cad_veic('bicicleta', $ano, $cor);
	}
	
	public function dados_veic(){
	  echo 'Tipo: '.$this -> tipo.' Ano: '.$this -> ano.' Cor: '.$this -> cor.' Qtde Marchas: '.$this -> num_marchas;
	}
  }
  
  class carro extends veiculo{
    private $num_portas;
	
	public function setPorta($_num_portas){
	  $this -> num_portas = $_num_portas;
	  return $this;
	}
	
	public function cad_veicu($ano, $cor){
	  parent :: cad_veic('carro', $ano, $cor);
	}

	public function dados_veic(){
	  echo 'Tipo: '.$this -> tipo.' Ano: '.$this -> ano.' Cor: '.$this -> cor.' Qtde Portas: '.$this -> num_portas;
	}	
  }
  
  class moto extends veiculo{
	public function cad_veicu($ano, $cor){
	  parent :: cad_veic('moto', $ano, $cor);
	}

	public function dados_veic(){
	  echo 'Tipo: '.$this -> tipo.' Ano: '.$this -> ano.' Cor: '.$this -> cor.' <br>Bela moto!!!! ';
	}  
  }
  
  // classe diretora
  
  class agencia_veiculo{
    private $dados;
	public function le_dados($_dados){
	  $this -> dados = $_dados;
	  $this -> dados -> dados_veic();
	}
  }
?>