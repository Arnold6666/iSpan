<?php 
class UserInfo {
  function __construct($db)
  {
    $this->db = $db;
  }

  function login($uid,$pwd,$completion){
    $this->db->select("CALL login1(?,?)", function($rows){
      $this->token = $rows[0]["token"];
      if($this->token != null){
        $this->db->select("SELECT * FROM userinfo WHERE token = ?", function($rows){
          $this->cname = $rows[0]["cname"];
        }, [$this->token]);
      }
    }, [$uid, $pwd]);
    $completion($this->token);
  }
}