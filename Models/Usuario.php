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

}