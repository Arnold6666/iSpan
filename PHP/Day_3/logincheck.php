<?php
require "db.php";

$uid = $_REQUEST['uid'];
$pwd = $_REQUEST['pwd'];


$sql = "SELECT * FROM userinfo WHERE uid = ? AND pwd = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $uid, $pwd);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows == 1) {
  header('location: showimage.php?uid=' . $uid);
} else {
  // header('location: error.php');
  echo "login error";
}
