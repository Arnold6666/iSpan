<?php
require("db.php");
$uid = $_GET["uid"];
$stmt = $mysqli->prepare("select * from userinfo where uid = ?");
$stmt->bind_param("s", $uid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$data = $row["image"];
// header('content-type: image/jpeg');
// echo $data;

// img標籤的src也可以直接放圖片內容
// base64 可以將二進位轉換成文字格式，也可以將聲音影片等等轉換成base64編碼的字串存放在JSON內
// 傳回檔案的mime_type格式
$mime_type = (new finfo(FILEINFO_MIME_TYPE))->buffer($data);
// 將突變轉換成base64編碼
$data_base64 = base64_encode($data);

// 指定mime_type格式，放入轉換成base64格式的字串;
$src = "data: {$mime_type}; base64,{$data_base64}";
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
  <?= $row["cname"] ?> <p>
  <img src="<?= $src ?>"><p>
  <?= $mime_type?>
</body>
</html>