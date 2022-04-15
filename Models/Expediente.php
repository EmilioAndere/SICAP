<?php
require_once './Database/DbConnection.php';

class Expediente {

    public function show(){
        $conn = DbConnection::getInstance();
        $sql = 'SELECT p.id, concat(p.nombre, " ", p.apellidos) AS nombre, concat("Tel: ",p.telefono,"\nMail: ",p.correo) AS contacto,p.num_citas AS citas, c.nombre AS categoria, sp.nombre AS status FROM tbl_pacientes AS p INNER JOIN tbl_categorias AS c ON p.categoria_id = c.id INNER JOIN tbl_statuspaciente AS sp ON p.status_id = sp.id;';
        $sth = $conn->prepare($sql);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    public function find($id){
        $conn = DbConnection::getInstance();
        $sql = 'SELECT e.diagnostico,e.observaciones,p.*	FROM tbl_expedientes AS e INNER JOIN tbl_pacientes AS p ON e.paciente_id = p.id WHERE paciente_id = :id;';
        $sth = $conn->prepare($sql);
        $sth->execute(array(':id' => $id));
        $data = $sth->fetch();
        return $data;
    }

    public function update($post, $id){
        $conn = DbConnection::getInstance();
        $sql = 'UPDATE tbl_expedientes SET diagnostico = :diagnostico, observaciones = :observaciones WHERE paciente_id = :id;';
        $sth = $conn->prepare($sql);
        $sth->execute(array(':diagnostico' => $post['diagnostico'], ':observaciones' => $post['observaciones'], ':id' => $id));
        $count = $sth->rowCount();
        return $count;
    }

}