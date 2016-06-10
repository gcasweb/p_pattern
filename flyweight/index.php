<?php
  include 'flyweight.php';
  //arr
  $arr = verValor::insArray();
  
  $ob1 = verValor::veObj('ouro', '30');
  $ob1 -> adapta(5);
  echo '<br>';
  $ob2 = verValor::veObj('petroleo', '1000');
  $ob2 -> adapta(2);
  echo '<br>';
  $ob3 = verValor::veObj('petroleo', '10');
  $ob3 -> adapta(4);
?>