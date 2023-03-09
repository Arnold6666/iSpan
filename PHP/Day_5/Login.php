<?php
session_start();
$uid = $_REQUEST['uid'];
$pwd = $_REQUEST['pwd'];

$login = [$uid, $pwd];
class Login{
  private static $mysqli;
  function __construct(){
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "addressbook";

    Login::$mysqli = new mysqli($host, $user, $pwd, $db);
  }

  private static function getTypes($params){
    $types = "";
    foreach($params as $param){
      switch(gettype($param)){
        case "string":
          $types .= "s";
          break;
        case "integer":
          $types .= "i";
          break;
        case "double":
          $types .= "f";
          break;
      }
    }
    return $types;
  }

  static function login($uid, $pwd){
    $sql = "SELECT COUNT(*) as isLogin FROM userinfo WHERE uid = ? AND pwd = ?";
    $params = [$uid, $pwd];
    if ($params == null) {
      echo "請輸入帳號密碼";
    } else {
      $types = Login::getTypes($params);
      $stmt = Login::$mysqli->prepare($sql);
      $stmt->bind_param($types, $uid, $pwd);
      $stmt->execute();
      $result = $stmt->get_result();
    }
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $row){
      // echo $row["isLogin"];
      if($row["isLogin"] == 1){
        echo "登入成功";
      }else{
        echo "帳號或密碼錯誤請重新登入";
      }
    }
    return $rows;
  }

}

$connect = new Login;

Login::login($uid, $pwd);