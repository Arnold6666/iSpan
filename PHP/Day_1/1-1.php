<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // echo '<script>alert("hi")</script>';
  // echo  "<script>\n";
  // echo  "alert('hi')\n";
  // echo  "</script>\n";

  // php 沒有object 只有array
  // php 的object 指的為物件導向的物件
  $arr = ["age"=>20, "name"=>"David"];
  // echo "{$arr['name']} is {$arr['age']} years old";
  // echo PHP_INT_MIN;
  // echo "<br>";
  // echo PHP_INT_MAX;
  // var_dump((string)100);
  // echo "<br>";
  // var_dump((int)"100");
  // echo "<br>";
  // var_dump((bool)0);
  // echo "<br>";
  // var_dump((bool)1);
  // echo "<br>";
  // var_dump((float)"3.14");

  // $i = 90;
  // switch ($i){
  //   case $i >= 60:
  //     echo "及格";
  //     break;
  //   case $i < 60 && $i >= 0:
  //     echo "不及格";
  //     break;
  //   default:
  //     echo "???";
  // }

  // header("location: https://google.com");
  
  // $islogin = true;
  // if($islogin === true){
  //   die("die");
  //   header("location: welcome.php");
  // }else{
  //   header("location: fail.php");
  // }

  $str = <<<END
    hi
        Hello
  nice
  END;
  
  echo $str;
  ?>
</body>
  <?php // echo "Hello, World!<br>";?>
</html>

