<?php
require_once './Database/DbConnection.php';

class Categoria {

    public function show(){
        $conn = DbConnection::getInstance();
        $sql = "SELECT * FROM tbl_categorias";
        $sth = $conn->prepare($sql);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

}