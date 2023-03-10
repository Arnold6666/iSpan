<?php

// file_put_contents("data.txt","123456", FILE_APPEND);
// explode 然後透過換行符號存成陣列，再透過foreach迴圈找到內容需要的那行修改，並透過append全部存回
$content = file_get_contents("my.ini");
$array = explode("\n",$content);
file_put_contents("my.ini","");

echo $array[162] . "\n";
// echo trim($array[162]) . "\n";
// $str = "max_allowed_packet=16M";
// if($array[162] == "max_allowed_packet=16M"){
//   echo "true";
// }else{
//   echo "false";
// }

foreach($array as $text){
  echo $text . "<br>";
  if(trim($text) == 'max_allowed_packet=16M'){
    echo "find";
    $text = "max_allowed_packet=256M";
    file_put_contents("my.ini","{$text}\n", FILE_APPEND);
  }else{
    file_put_contents("my.ini","{$text}\n", FILE_APPEND);
  }
}

// echo file_get_contents("my.ini");
// $pos = strpos($content,"max_allowed_packet=16M");
// $content = str_replace("max_allowed_packet=16M","max_allowed_packet=2M",$content);
// file_put_contents("my.ini",$content);
// // $content = file_get_contents("my.ini");
// echo "OK";
