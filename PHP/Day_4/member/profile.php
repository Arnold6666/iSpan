<?php 
session_start();
require "db.php";
print_r($_SESSION == "");
if($_SESSION == ""){
  echo '<script>alert("請先登入")</script>';
  header("refresh:0;url=login.php");
}else{
  $uid = $_SESSION['uid'];
  $sql = "SELECT * FROM userinfo WHERE uid = ?";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("s",$uid);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($row = $result->fetch_assoc()) {
    echo $row["uid"] . "<br>";
    echo $row["pwd"] . "<br>";
  }
  echo '<a href="logout.php">登出</a>';
}
?>


