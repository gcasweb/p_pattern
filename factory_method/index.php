<?php
  include_once ('classe_method.php');
  $par01 = levantaParede :: criaParede('paredePersonalizada');
  $par01 -> pintar('branca');
  $par01 -> getParede();
  
  echo '<hr>';
  
  // outra forma -> seguindo, na integra, a ideia do padrão
  
  $par02 = new levantaParede2;
  $p2 = $par02 -> criaParede('paredePersonalizada');
  $p2 -> pintar('colorida');
  $p2 -> getParede();
?>
 