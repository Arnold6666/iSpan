<?php
$animals = ["Lion", "Elephent", "Giraffe", "Zebra"];

// for($i = 0; count($animals) > $i; $i++){
//   echo $animals[$i];
//   echo "<br>";
// }

// foreach($animals as $animal){
//   echo $animal;
//   echo "<br>";
// }

// 輸出陣列使用以下函式
// print_r($animals);
// echo "<br>";
// var_dump($animals);
// echo "<br>";
// var_export($animals);
// echo "<br>";

// 字典(key => value形式的陣列)
$users = [];
$users[count($users)] = ['name' => 'John', 'age' => '36'];
// print_r($users);
// echo "<br>";
$users[count($users)] = ['name' => 'Mei', 'age' => '27'];
// print_r($users);

// foreach($users as $user){
//   echo $user["name"] . ":" . $user["age"] . "\n";
//   echo "<br>";
// }

// foreach ($users as $user) {
//   foreach ($user as $key => $value) {
//     echo $key . ":" . $value . "\n";
//     // echo "<br>";
//   }
// }

// 陣列排序
$arr = [5,2,9,7];
// print_r($arr);
sort($arr);
// print_r($arr);
rsort($arr);
// print_r($arr);

// key=>value陣列排序：ksort 按照key排、asort 按照value排

$arr1 = ["name"=>"David", "age"=> 36, "score"=> 20];
// ksort($arr1);
asort($arr1);
// print_r($arr1);

// Json解析 json_decode($變數,true)，第二個參數預設為false會轉換成stdClass，輸入true轉換成陣列型態
$json = '[{"name":"David","age":36},{"name":"Mei","age":27}]';
$data = json_decode($json,true);

$json2 = '[{"name":"David"}, {"age":36}, {"score":36}]';
$json2 = json_decode($json2,true);

// 將額外key=>value加入陣列
$json2[0]["sex"] = "M"; 
// print_r($json2[0]["sex"]);

// 陣列轉字串 json_encode($陣列, JSON_UNESCAPED_UNICODE)，第二參數JSON_UNESCAPED_UNICODE設定會令其不要轉為unicode，預設為轉換成unicode
$arr2 = ["text" =>"中文也可以"];
$str = json_encode($arr2, JSON_UNESCAPED_UNICODE);
// echo $str;

$arr3 = [["name"=>"大衛","age"=>36],["name"=>"小美","age"=>27]];
// $str2 = json_encode($arr3, JSON_UNESCAPED_UNICODE);
// echo $str2;




