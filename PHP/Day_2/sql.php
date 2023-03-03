<?php
require "db.php";

$uid = $_GET["uid"];

// $sql = "select * from userinfo WHERE uid = '{$uid}'";
$sql = "select * from userinfo WHERE uid = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s",$uid); //s表示為string
$stmt->execute();
$result = $stmt->get_result();

// 透過物件導向方法query送出sql指令
// $result = $mysqli->query($sql);
// print_r($result);
// var_dump($result);


// print_r($row["cname"]);
// echo "<br>\n";
// A03'; delete from userinfo where uid = 'Z04';-- 
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
  <table border="1">
    <tr>
      <th>帳號</th>
      <th>姓名</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row["uid"] ?></td>
      <td><?= $row["cname"] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>


