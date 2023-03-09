<?php
class Math {
  public static $pi = 3.14;

  static function add($a,$b){
    return $a + $b;
  }
}

// static的屬性或方法可以不用實體化即可訪問
// echo Math::$pi . "\n";
// echo Math::add(8,9) . "\n";

// $m1 = new Math();
// echo $m1->add(5,3) . "\n"; //方法可讀取到
// echo $m1->pi . "\n"; //屬性無法讀取到

// class 赋值 有reference type(參考相同記憶體位置)與struct: value type(複製一份值給予)
$m1 = new Math();
$m2 = new Math();
$m3 = $m1;

// 對物件而言，兩個等於為比較內容，三個等於為比較記憶體位置
var_dump($m1 === $m2);
