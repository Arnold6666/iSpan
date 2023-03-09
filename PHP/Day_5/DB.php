<?php

// 透過封裝將連線資料庫
class DB
{
  private static $mysqli;
  function __construct(){
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "addressbook";

    DB::$mysqli = new mysqli($host, $user, $pwd, $db);
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

  // ?為可選參數，續有第二參數需型態為Aarray 且有預設值null
  static function select($sql, ?array $params = null){
    if ($params == null) {
      $result = DB::$mysqli->query($sql);
    } else {
      $types = DB::getTypes($params);
      $stmt = DB::$mysqli->prepare($sql);
      $stmt->bind_param($types, ...$params);
      $stmt->execute();
      $result = $stmt->get_result();
    }
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    return $rows;
  }

  static function insert($sql, ?array $params = null){
    if ($params == null) {
      echo "請輸入帳號與密碼";
      return;
    } else {
      $types = DB::getTypes($params);
      $stmt = DB::$mysqli->prepare($sql);
      $stmt->bind_param($types, ...$params);
      $stmt->execute();
      echo "新增成功";
    }
    return;
  }

  static function update($sql, ?array $params = null){
    if ($params == null) {
      echo "請輸入帳號與新密碼";
      return;
    } else {
      $types = DB::getTypes($params);
      $stmt = DB::$mysqli->prepare($sql);
      $stmt->bind_param($types, ...$params);
      $stmt->execute();
      echo "修改成功";
    }
    return;
  }

  static function delete($sql, ?array $params = null){
    if ($params == null) {
      echo "請輸入帳號與新密碼";
      return;
    } else {
      $types = DB::getTypes($params);
      $stmt = DB::$mysqli->prepare($sql);
      $stmt->bind_param($types, ...$params);
      $stmt->execute();
      echo "刪除成功";
    }
    return;
  }
}

// 創建一個實體建立資料庫連線
$db = new DB();

