<?php
  require_once("ex_classes_abstract_factory.php");
  /*
  // agora a instanciação
  $kenga_cara = new acompanhanteCara;
  $kenga_cara -> cad_acompanhante('joelma', '18', '000.000.000-00');
  
  //vamos criar uma acompanhante barata
  echo "<hr>";
  $kenga_barata = new acompanhanteBarata;
  $kenga_barata -> cad_acompanhante('txumbunina', '100', '111.111.111-11');
  
  //agora vamos criar uma diarista cara
  echo "<hr>";
  $diarista_cara = new diaristaCara;
  $diarista_cara -> cad_diarista('tiburcia', '25', '222.222.222-22');
  
  //agora uma diarista barata
  echo "<hr>";
  $diarista_barata = new diaristaBarata;
  $diarista_barata -> cad_diarista('tiruneida', '40', '333.333.333-33');
  
  //echo $kenga_cara -> nome;
  */
  
  class cliente{
    public function escolhe($op, $nome, $idade, $cpf){
	  switch ($op){
	    case 'acompanhanteCara':
          $kenga_cara = new acompanhanteCara;
          $kenga_cara -> cad_acompanhante($nome, $cpf, $idade);		
		break;
		case 'acompanhanteBarata':
		  $kenga_barata = new acompanhanteBarata;
          $kenga_barata -> cad_acompanhante($nome, $cpf, $idade);
		break;
		case 'diaristaCara':
		  $diarista_cara = new diaristaCara;
          $diarista_cara -> cad_diarista($nome, $cpf, $idade);
		break;
		case 'diaristaBarata':
		  $diarista_barata = new diaristaBarata;
          $diarista_barata -> cad_diarista($nome, $cpf, $idade);
		break;
	  }
	}
  }
  
  // instanciar 
  
  $cli1 = new cliente;
  $cli1 -> escolhe('acompanhanteBarata', 'tburcia', '60', '777.111.111-11');
?>