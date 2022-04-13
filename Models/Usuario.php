<?php
include_once './Database/DbConnection.php';

class Usuario {

    public function find($user, $pass){
        $conn = DbConnection::getInstance();
        $sql = "SELECT username, password FROM tbl_usuarios WHERE username=:user AND password = :pass";
        $sth = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':user' => $user, ':pass' => $pass));
        $user = $sth->fetch();
        return $user;
        
    }

    public function insert($nombre, $apellidos, $user, $pass){
        try{
            $conn = DbConnection::getInstance();
            $sql = "INSERT INTO tbl_usuarios (nombre, apellidos, username, password) VALUES (:nombre, :apellidos, :user, :pass);";
            $sth = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array(':nombre' => $nombre, ':apellidos' => $apellidos, ':user' => $user, ':pass' => $pass));
            $count = $sth->rowCount();
            return $count;
        }catch(PDOException $ex){
            return "El usuario ya existe";
        }

    }

}