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
  case "POST":
    $uid = $_REQUEST["uid"];
    $pwd = $_REQUEST["pwd"];
    $sha = $sha = hash('sha256', $pwd);
    $sql = "call login2(?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $uid, $sha); //s表示為string
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
      $_SESSION['token'] = $row['token'];
      echo "登入成功";
      echo '<a href="profile.php">查看個人資料</a>';
    }else{
      echo "帳號或密碼錯誤，請重新輸入";
    }
    break;
  default:
    $sql = "unknow";
}
