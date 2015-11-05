<?php
  require_once('classes_builder.php');
  
  $bike = new bicicleta;
  $bike -> setMarcha('18') -> cad_veicu('azul', '2000');
  $vis1 = new agencia_veiculo;
  $vis1 -> le_dados($bike);
  echo "<hr>";
  $caranga = new carro;
  $caranga -> setPorta('4') -> cad_veicu('prata', '1989');
  $vis2 = new agencia_veiculo;
  $vis2 -> le_dados($caranga);
  echo "<hr>";
  $motoca = new moto;
  $motoca -> cad_veicu('verde e preta', '2013');
  $vis3 = new agencia_veiculo;
  $vis3 -> le_dados($motoca);
  echo "<hr>";
  $carro2 = new carro;
  $carro2 -> setPorta('2') -> cad_veicu('preto', '2015');
  $vis4 = new agencia_veiculo;
  $vis4 -> le_dados($carro2);
?>