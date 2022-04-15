<?php
require_once './Database/DbConnection.php';

class Cita {

    public function find($id){
        $conn = DbConnection::getInstance();
        $sql = "SELECT fecha_cita FROM tbl_citas WHERE paciente_id = :id";
        $sth = $conn->prepare($sql);
        $sth->execute(array(':id' => $id));
        $data = $sth->fetchAll();
        return $data;
    }

}