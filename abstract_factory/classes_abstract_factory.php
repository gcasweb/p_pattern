<?php
  // classes abstratas
  abstract class mulher{
    protected $nome;
    protected $cpf;
    protected $idade;
    protected $tipo;
	
	protected function criar_acompanhante($_nome, $_cpf, $_idade, $_tipo){
	  $this -> nome = $_nome;
	  $this -> cpf = $_cpf;
	  $this -> idade = $_idade;
	  $this -> tipo = $_tipo;
	}
	protected function criar_diarista($_nome, $_cpf, $_idade, $_tipo){
	  $this -> nome = $_nome;
	  $this -> cpf = $_cpf;
	  $this -> idade = $_idade;
	  $this -> tipo = $_tipo;	
	}
  }
  
  // as demais classes abstratas
  abstract class acompanhante{
    protected $nota;
	protected function aval_servico($_nota){
	  $this -> nota = $_nota;
	}
  }
  abstract class diarista{
    protected $faxina;
	protected function aval_faxina($_faxina){
	  $this -> faxina = $_faxina;
	}	
  }
  
  // classes concretas - fсbricas concretas
  class cara extends mulher{
    public function cadastrar_acompanhante($nome, $cpf, $idade){
	  parent :: criar_acompanhante($nome, $cpf, $idade, 'cara');
	  echo 'Info Acompanhante Nome:'.$this -> nome.', Cpf: '.$this -> cpf.' Idade: '.$this -> idade;
	}
	
	public function cadastrar_diarista($nome, $cpf, $idade){
	  parent :: criar_diarista($nome, $cpf, $idade, 'cara');
	  echo 'Info Diarista Nome:'.$this -> nome.', Cpf: '.$this -> cpf.' Idade: '.$this -> idade;
	}
  }
  
  class barata extends mulher{
    public function cadastrar_acompanhante($nome, $cpf, $idade){
	  parent :: criar_acompanhante($nome, $cpf, $idade, 'barata');
	  echo 'Info Kenga Nome:'.$this -> nome.', Cpf: '.$this -> cpf.' Idade: '.$this -> idade;
	} 
    
	public function cadastrar_diarista($nome, $cpf, $idade){
	  parent :: criar_diarista($nome, $cpf, $idade, 'barata');
	  echo 'Info Escrava Nome:'.$this -> nome.', Cpf: '.$this -> cpf.' Idade: '.$this -> idade;
	}  
  }
  
  // criaчуo das classes "finais"
  
  class acompanhanteCara extends acompanhante{
    public function cad_acompanhante($nome, $cpf, $idade){
	  $aCara = new cara;
	  $aCara -> cadastrar_acompanhante($nome, $cpf, $idade);
	}

    public function aval_atendimento($nota){
	  parent :: aval_servico($nota);
	}	
  }
  
  class acompanhanteBarata extends acompanhante{
    public function cad_acompanhante($nome, $cpf, $idade){
	  $aCara = new barata;
	  $aCara -> cadastrar_acompanhante($nome, $cpf, $idade);
	}

    public function aval_atendimento($nota){
	  parent :: aval_servico($nota);
	}  
  }
  
  class diaristaCara extends diarista{
    public function cad_diarista($nome, $cpf, $idade){
	  $aCara = new cara;
	  $aCara -> cadastrar_diarista($nome, $cpf, $idade);
	}

    public function aval_atendimento($nota){
	  parent :: aval_faxina($nota);
	}  
  }
  
  class diaristaBarata extends diarista{
    public function cad_diarista($nome, $cpf, $idade){
	  $aCara = new barata;
	  $aCara -> cadastrar_diarista($nome, $cpf, $idade);
	}

    public function aval_atendimento($nota){
	  parent :: aval_faxina($nota);
	}  
  }
?>