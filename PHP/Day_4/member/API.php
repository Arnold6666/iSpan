<?php
session_start();
require "db.php";
$method = $_SERVER['REQUEST_METHOD'];
// echo $method;

// 從header到body需隔一行
// header中的HTTP/1.1 指封包協定的版本 1.1 為連線結束後即斷線 瀏覽器預設為1.1
// HTTP/2.0 僅連線斷線一次，便取得所有資料
// RESTful API 指的為API的機制(風格)如以下程式碼
// 部分的web serve會檢查Header是否有對應資料，通常為user-agent

switch ($method) {
  case "GET":
    $uid = $_REQUEST["uid"];
    $sql = "select * from userinfo WHERE uid = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $uid); //s表示為string
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
      echo $row['uid'] . "<br>";
      echo $row['cname'] . "<br>";
    }
    break;

  case "POST":
    $uid = $_REQUEST["uid"];
    $pwd = $_REQUEST["pwd"];
    $sha = hash('sha256', $pwd);
    $sql = "SELECT * FROM userinfo WHERE uid = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $uid); //s表示為string
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
      echo "帳號已存在";
    }else{
      $sql = "INSERT INTO userinfo(uid, pwd) VALUE(?,?)";
      $stmt = $mysqli->prepare($sql);
      $stmt->bind_param("ss", $uid, $sha);
      $stmt->execute();
      echo '註冊成功，請<a href="login.php">登入</a>';
    }
    break;
  
  default:
    $sql = "unknow";
}
