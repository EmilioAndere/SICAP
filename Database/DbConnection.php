<?php

class DbConnection {

    private static $conn = null;
    private static $stringConnection = "mysql:dbname=db_CAP;host=127.0.0.1";

    private function __construct(){}

    public static function getInstance(){
        if(self::$conn == null){
            self::$conn = new PDO(self::$stringConnection,"root","");
        }
        return self::$conn;
    }

}