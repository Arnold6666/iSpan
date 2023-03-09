<?php
session_reset();
require "DB_main.php";
require "login_T.php";

$user = new UserInfo($db);
$user->login('A02','1234',function($token){
  // echo $token;
  // if($token == null){
  //   echo "error.php";
  // }else{
  //   $_SESSION['token'] = $token;
  //   echo "welcome.php";
  // }

  // echo $token;
});

