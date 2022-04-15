<?php 
require_once './Models/Cita.php';

class CitasController {

    private $citas;

    public function __construct(){
        $this->citas = new Cita();
    }

    public function show($slug){
        $data = $this->citas->find($slug);
        echo json_encode($data);
    }

}