<?php
  interface Pessoal{
    public function getDado($tipo);
  }
  
  interface Dados{
    public function pesqDado();
  }
  
  class pessoa implements Pessoal{
    public function getDado($tipo){
	  //colocar "dadosPublico" ou "dadosPrivado"
	  $p1 = new $tipo;
	  $p1 -> pesqDado();
	}
  }
  
  class dadosPublico implements Dados{
    public function pesqDado(){
	  echo 'dados publicos';
	}
  }
  
  class dadosPrivado implements Dados{
    public function pesqDado(){
	  echo 'dados privados';
	}  
  }
?>