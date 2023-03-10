<?php

// 透過封裝將連線資料庫
class DB
{
  // private static $mysqli;
  // private static $host = "localhost";
  // private static $root = "root";
  // private static $pwd = "";
  // private static $addressbook = "addressbook";
  // DB::$mysqli = new mysqli($host,$user$pwd,$db);
  
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
  private static function query($sql, ?array $params = null){
    if ($params == null) {
      // $result = DB::$mysqli->query($sql);
      // 一般來說一個sql僅有一個查詢結果
      // 塞車問題，前一個sql command結果沒有處理完
      // 在此呼叫store procedure會產生兩個查詢結果

      // 測試
      // echo "more results" . "\n";
      // var_dump(DB::$mysqli->more_results());
      // echo "next results" . "\n";
      // var_dump(DB::$mysqli->next_result());
      // die();

      // 解法1: 將沒讀完的結果讀取完
      $result = DB::$mysqli->query($sql);
      while(DB::$mysqli->next_result()){};

      // 解法2: 透過預備陳述式執行
      // $stmt = DB::$mysqli->prepare($sql);
      // $stmt->execute();
      // $result = $stmt->get_result();
      // $stmt->close();

    } else {
      $types = DB::getTypes($params);
      $stmt = DB::$mysqli->prepare($sql);
      $stmt->bind_param($types, ...$params);
      $stmt->execute();
      $result = $stmt->get_result();
      $stmt->close();
    }
    // $rows = $result->fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  static function select($sql, $completion, ?array $params = null){
    $result = DB::query($sql, $params);
    // print_r($result);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $completion($rows);
  }

  static function insert($sql, ?array $params = null){
    $result = DB::query($sql, $params);
    echo "新增成功";
    return $result;
  }

  static function update($sql, ?array $params = null){
    $result = DB::query($sql, $params);
    echo "修改成功";
    return $result;
  }

  static function delete($sql, ?array $params = null){
    $result = DB::query($sql, $params);
    echo "刪除成功";
    return $result;
  }
}

// 創建一個實體建立資料庫連線
$db = new DB();

