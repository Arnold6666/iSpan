<?php
require "db.php";

$uid = $_REQUEST['uid'];
$pwd = $_REQUEST['pwd'];
$filename = $_FILES['file']['tmp_name'];
// 透過list將兩數據存入對應變數
list($width,$height) = getimagesize($filename);
// 取得長寬比
$ratio = $width / $height;
$newwidth = 320;
$newheight = $newwidth / $ratio;

// 將jpeg檔案處理成php可以處理的格式
$src = imagecreatefromjpeg($filename); //原本大小畫布
$dst = imagecreatetruecolor($newwidth,$newheight); //新大小畫布
//參數1目的，2來源,3456：座標參數,7：新高，8：新寬，9：舊高，10：舊寬
imagecopyresized($dst, $src , 0, 0, 0, 0, $newwidth, $newheight, $width, $height); 
// 
ob_start();
imagejpeg($dst);
$image = ob_get_contents();
ob_end_clean();

// $image = file_get_contents($filename);

$sql = "UPDATE userinfo SET image = ? WHERE uid = ? AND pwd = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("bss", $image, $uid, $pwd);
$stmt->send_long_data(0,$image);
$stmt->execute();
die("<a href=\"showimage.php?uid={$uid}\">show image</a>");

$result = $stmt->get_result();

$row = $result->fetch_assoc();
$data = $row["image"];
header('content-type: image/jpeg');
echo $data;
