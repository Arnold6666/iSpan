<?php 
require "db.php";
$sql = "select uid, cname from UserInfo";
$result = $mysqli->query($sql);
$arr = [];
while ($row = $result->fetch_assoc()) {
  $arr[] = $row;
}
header("content-type: application/json");
echo json_encode($arr, JSON_UNESCAPED_UNICODE);
?>