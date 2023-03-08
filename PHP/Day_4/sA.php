<?php session_start();?>
<?php 
  $_SESSION["str"] = "hello";
  // session.cookie_lifetime=0 ，0表示永久有效
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="sB.php">next</a>
</body>
</html>