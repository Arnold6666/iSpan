<?php

// require 載入錯誤即停止，require載入速度大於require_once
// include 載入錯誤仍繼續，
require "array.php";
require "a.php";
$str2 = json_encode($arr3, JSON_UNESCAPED_UNICODE);
// print_r($str2);
// var_dump($str2);

// echo f("3", 5);

// call by value
// function swap($a,$b){
//   $tmp = $a;
//   $a = $b;
//   $b = $tmp;
// }

// call by address 需在變數前加上&
// function swap(&$a,&$b){
//   $tmp = $a;
//   $a = $b;
//   $b = $tmp;
// }

// $a = 10;
// $b = 20;
// swap($a,$b);
// echo "a=$a";
// echo "b=$b";

// function內的變數為區域變數，外面的為全域變數
// function test(){
//   $n = 20;
// }

// 透過global可以將變數宣告為全域變數
// function test(){
//   global $n;
//   $n = 20;
// }

// $n = 10;
// test();
// echo $n;

// $n = 0;

// static 可以宣告為靜態，使用在變數的時候初始化其address，
// 並使其不會在function執行結束後address被gabage collection回收，
// 但會使其佔據記憶體，直到該程式執行結束
// function counter(){
//   static  $n = 0;
//   $n += 1;
//   echo $n . "\n";
// }

// counter();
// counter();
// counter();
// counter();

// nullable
// 若運算式為數學運算，null視為0
// 若運算式為字串運算，null視為空字串""
// function counter(?int $n){
//   echo $n * 3;
// }

// counter(null);

// closure

function counter($x){
  return $x(true);
}

$n = counter(function($error){
  if(!$error){
    return 5 + 3;
  }else{
    die("error");
  }
  return 20;
});

echo $n;