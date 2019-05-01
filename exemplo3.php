<?php
$nome = "oie <br>";

$num = $num + 1;
$num += 1;

//$num++;

function teste(){
  global $nome;
  echo $nome;
}

function teste2(){
  $nome = "joão";
  echo $nome . " Agora no teste2";
}

teste();
teste2();

?>
