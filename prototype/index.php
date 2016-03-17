<?php
  include 'prototype.php';
  echo 'exemplo livro <br>';
  // copia de livro
  $l1 = new leitor();
  $l1 -> pedir('livro', 'livro01');
  $l1 -> altera('livro02');
  $l1 -> usar();

  echo '<hr width=\'100%\'>';
  
  echo 'exemplo CD <br>';
  $c1 = new leitor();
  $c1 -> pedir('cd', 'cd01');
  $c1 -> altera('cd02');
  $c1 -> usar();
  
  echo "<hr width='100%'>";
  echo 'faixa bonus, com método estático <br>';
  
  $item1 = leitor :: sta_pedido('cd', 'cd003');
  echo '<br> CLONADO <br>';
  $item1 -> alterar('cd02');
  $item1 -> get_obj($item1);
?>