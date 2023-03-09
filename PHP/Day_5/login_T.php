<?php 
class UserInfo {
  function __construct($db)
  {
    $this->db = $db;
  }

  function login($uid,$pwd,$completion){
    $this->db->select("CALL login1(?,?)", function($rows){
      $this->token = $rows[0]['token'];
    }, [$uid, $pwd]);
    $completion($this->token);
  }
}