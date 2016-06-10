<?php
  include 'decorator.php';
  
  $p1 = new funcionario('jarbas', '001', 'mecanico');
  
  //upgrade
  
  $p1 = new peao($p1);
  $p1 -> trabalhar();
  $p1 -> mostrar();
?>