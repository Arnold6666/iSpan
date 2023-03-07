<?php
// A01';delete from userinfo where uid = 'A04'; --
// A01' union all select * from userinfo; --
require "db.php";

$uid = $_REQUEST["uid"];
$pwd = $_REQUEST["pwd"];

$sql = "select * from userinfo WHERE uid = '{$uid}' and pwd = '{$pwd}' ";
// $sql = "select * from userinfo WHERE uid = ? and pwd = ?";
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s",$uid); //s表示為string
// $stmt->execute();
// $result = $stmt->get_result();

// 透過物件導向方法query送出sql指令
// query一次只能執行一條sql command(一般來說)
$result = $mysqli->query($sql);
// print_r($result);
// var_dump($result);

// 測試sql injection用
// $result = $mysqli->multi_query($sql);
// die('done');

// print_r($row["cname"]);
// echo "<br>\n";
// A03'; delete from userinfo where uid = 'Z04';-- 

// 如sql command中有多個指令透過以下程式碼取出
// $mysqli->multi_query($sql);
// while (true) {
//     if ($result = $mysqli -> store_result()) {
//         while($row = $result->fetch_row()) {
//             print_r($row);
//         }   
//     }   


//     if ($mysqli -> more_results()) {
//         $mysqli -> next_result();
//         printf("-------------\n");
//     } else {
//         break;
//     }   


// }

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



