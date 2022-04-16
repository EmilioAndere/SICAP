<?php
require_once './Models/Paciente.php';

class PacientesController {

    public function __construct(){
        $this->paciente = new Paciente();
    }

    public function all(){
        $data = $this->paciente->show();
        echo json_encode($data);
    }

    public function get(){
        $search = $_POST;
        $data = $this->paciente->findExp($search);
        echo json_encode($data);
    }

    public function change($slug){
        $paciente = $_POST;
        var_dump($paciente);
    }

}