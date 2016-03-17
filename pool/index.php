<?php
  include 'pool2.php';
  $vet = gCred :: criaObj();
  
  echo '<hr>';
  $ins2 = gCred :: veInst('gcas');
  $ins2 -> get();
  
  echo '<hr>';
  $ins3 = gCred :: veInst('jose');
  $ins3 -> get();

  echo '<hr>';
  $ins4 = gCred :: veInst('maria');
  $ins4 -> get();

  
  echo '<hr>';
  gCred::devolver(1); 
  
  echo '<hr>';
  $ins5 = gCred :: veInst('jose');
  $ins5 -> get();  
  
  echo '<hr>';
  gCred::mostra();
?>