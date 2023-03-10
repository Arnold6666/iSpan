<?php
session_start();
require "DB.php";
require "UserInfo.php";

$user = new UserInfo($db);
$user->login('A02', '1234', function($token) {
    echo $token;
});

// 透過sql command呼叫會傳回兩個查詢結果的 store procedure 會產生錯誤，僅能在資料庫頁面的程序下按執行。

// echo "\n===============\n";
// echo $user->cname . "\n";


// DB::insert("insert into UserInfo (uid, cname) values (?, ?)", ["Z01", "張三"]);

/*
$rows = DB::select("select * from UserInfo");
foreach($rows as $row) {
    echo $row["uid"] . ": " . $row["cname"] .  "\n";
}
$db->select("select * from UserInfo where cname like ?", function($rows) {
    foreach($rows as $row) {
        echo $row["uid"] . ": " . $row["cname"] .  "\n";
    }    
}, ['王%']);
*/
