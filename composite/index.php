<?php
  include '_composite.php';
  // cadastrar pessoas - profiçionais
  $p1 = new profissional;
  $p1 -> cadastrar('jarbas');

  $p2 = new profissional;
  $p2 -> cadastrar('tiburcio');

  $p3 = new profissional;
  $p3 -> cadastrar('janete');

  $p4 = new profissional;
  $p4 -> cadastrar('maria');
  
  // botar pra rodar
  $proj1 = new alocados('farinha');
  $proj1 -> cadastrar($p1);
  echo '<br>';
  $proj1 -> cadastrar($p2);
  echo '<br> Resultado: <br>';
  $proj1 -> mostrar();
  
  echo '<hr>';
  echo 'segundo Projeto <br>';  
  // segundo projeto
  $proj2 = new alocados('veraum');
  $proj2 -> cadastrar($p2);
  echo '<br>';
  $proj2 -> cadastrar($p3);
  echo '<br>';
  $proj2 -> cadastrar($p4);
  echo '<br>';
  $proj2 -> tirar($p2);
  echo '<br>';
  $proj2 -> mostrar();
  
?>