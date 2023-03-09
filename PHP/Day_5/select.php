<?php
// require "DB.php";
// require "DB_copy.php";
require "DB_main.php";

// $rows = $db->select("SELECT * FROM userinfo WHERE uid = ? AND pwd = ?", ['A02', '1234']);
// $rows = $db->select("SELECT * FROM userinfo");

// 查詢
// $rows = DB::select("SELECT * FROM Bill WHERE tel = ? and fee = ?", ['1111', 300]);
// foreach ($rows as $row) {
//   echo $row["tel"] . ":" . $row["fee"] . "\n";
// }

DB::select("SELECT * FROM userinfo where cname like ?",function($rows){
  foreach ($rows as $row) {
  echo $row["uid"] . ":" . $row["cname"] . "\n";
  }
},['王%']);

// 新增
// DB::insert("INSERT INTO userinfo(uid, pwd) VALUES(?,?)",["C99","9999"]);

// 修改
// DB::update("UPDATE userinfo set pwd = ? WHERE uid = ? and pwd = ?", ['8888',"C99","9999"]);
// 
// 刪除
// DB::delete("DELETE FROM userinfo WHERE uid = ?", ["Z66"]);
