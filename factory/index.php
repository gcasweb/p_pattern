<?php
  include_once('factory.php');
  // instanciar o cliente
  $cli01 = new empresa('maersk');
  $cli01 -> encomenda('emmaMaersk', 'containerShip');
  $cli01 -> pilotar('ancorar');
?>