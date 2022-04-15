<?php
require_once './Models/Expediente.php';

class ExpedientesController {

    private $exp;

    public function __construct(){
        $this->exp = new Expediente();
    }

    public function all(){
        $exp = new Expediente();
        $data = $exp->show();
        echo json_encode($data);
    }

    public function show($slug){
        $data = $this->exp->find($slug);
        echo json_encode($data);
    }

    public function modify($slug){
        $post = $_POST;
        $data = $this->exp->update($post, $slug);
        if($data == 1){
            echo json_encode([
                'msg' => "Se ha actualizado con exito el EXPEDIENTE",
                'err' => FALSE,
            ]);
        }else{
            echo json_encode([
                'msg' => "Ocurrio un error al actualizar",
                'err' => true,
            ]);
        }
    }

}