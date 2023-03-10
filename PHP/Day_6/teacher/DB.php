<?php
class DB {
    private static $mysqli;

    function __construct() {
        $host = "127.0.0.1";
        $user = "root";
        $pwd  = "";
        $db   = "AddressBook";

        DB::$mysqli = new mysqli($host, $user, $pwd, $db);
    }

    private static function getTypes($params) {
        $types = "";
        foreach($params as $param) {
            switch(gettype($param)) {
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

    private static function query($sql, ?Array $params=null) {
        if ($params == null) {
            // $result = DB::$mysqli->query($sql);

            // 解法1:
            // $result = DB::$mysqli->query($sql);
            // while (DB::$mysqli->next_result()) {
                
            // }

            // 解法2:
            $stmt = DB::$mysqli->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
        } else {
            $types = DB::getTypes($params);
            $stmt = DB::$mysqli->prepare($sql);
            $stmt->bind_param($types, ...$params);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
        }

        return $result;
    }

    static function select($sql, $completion, ?Array $params=null) {
        $result = DB::query($sql, $params);
        $rows = $result->fetch_all(MYSQLI_ASSOC);

        $completion($rows);
    }

    static function insert($sql, ?Array $params=null) {
        return DB::query($sql, $params);
    }

    static function update($sql, ?Array $params=null) {
        return DB::query($sql, $params);
    }

    static function delete($sql, ?Array $params=null) {
        return DB::query($sql, $params);
    }
}

$db = new DB();