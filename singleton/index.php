<?php
  include ('singleton.php');
  // primeira instância
  $ins01 = systema::instancia();
  $ins01 -> __destruct();
  echo '<hr>';
  $ins02 = systema::instancia();
  $ins02 -> get_inst();
?>