<?php

class UserInfo {
    function __construct($db) {
        $this->db = $db;
    }

    function login($uid, $pwd, $completion) {
        $this->db->select("call login1('{$uid}', '{$pwd}')", function($rows) {
            $this->token = $rows[0]["token"];
        });

        if ($this->token != null) {
            $this->db->select("select * from UserInfo where token = ?", function($rows) {
                $this->cname = $rows[0]["cname"];
            }, [$this->token]);
        }    

        $completion($this->token);
    }
}