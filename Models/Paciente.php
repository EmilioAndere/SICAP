<?php
require_once './Database/DbConnection.php';

class Paciente {

    public function show(){
        $conn = DbConnection::getInstance();
        $sql = 'SELECT p.id, concat(p.nombre, " ", p.apellidos) AS nombre, p.telefono, p.carrera, c.nombre AS categoria, t.nombre AS tipo,sp.nombre AS status FROM tbl_pacientes AS p INNER JOIN tbl_categorias AS c ON p.categoria_id = c.id INNER JOIN tbl_tipos AS t ON p.tipo_id = t.id INNER JOIN tbl_statuspaciente AS sp ON p.status_id = sp.id;';
        $sth = $conn->prepare($sql);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    public function findExp($search){
        $conn = DbConnection::getInstance();
        $sql = 'SELECT p.id, concat(p.nombre, " ", p.apellidos) AS nombre, concat("Tel: ",p.telefono,"\nMail: ",p.correo) AS contacto,p.num_citas AS citas, c.nombre AS categoria, sp.nombre AS status FROM tbl_pacientes AS p INNER JOIN tbl_categorias AS c ON p.categoria_id = c.id INNER JOIN tbl_statuspaciente AS sp ON p.status_id = sp.id WHERE p.nombre=:name AND p.apellidos=:ape AND p.categoria_id=:cat;';
        $sth = $conn->prepare($sql);
        $sth->execute(array(":name" => $search['nombre'], ":ape" => $search['apellidos'], ":cat" => $search['categoria']));
        $data = $sth->fetch();
        return $data;
    }

    public function get($id){
        $conn = DbConnection::getInstance();
        $sql = "SELECT p.*,c.nombre AS categoria,t.nombre AS tipo,sp.nombre AS status FROM tbl_pacientes AS p INNER JOIN tbl_categorias AS c ON p.categoria_id = c.id INNER JOIN tbl_tipos AS t ON p.tipo_id = t.id INNER JOIN tbl_statuspaciente AS sp ON p.status_id = sp.id WHERE P.id = :id AND usuario_id = 1;";
        $sth = $conn->prepare($sql);
        $sth->execute(array(':id' => $id));
        $data = $sth->fetch();
        return $data;
    }

    public function update($id){
        // $conn = DbConnection 
    }

}