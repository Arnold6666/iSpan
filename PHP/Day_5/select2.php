<?php
session_reset();
require "DB_main.php";
require "login_T.php";

$user = new UserInfo($db);
$user->login('A02','1234',function($token){
  if($token == null){
    echo "error.php" . "\n";
  }else{
    $_SESSION['token'] = $token;
    echo "welcome.php" . "\n";
  }

  echo $token;
});

