<?php
require_once './Models/Categoria.php';

class CatController {

    private $cat;

    public function __construct(){
        $this->cat = new Categoria();
    }

    public function all(){
        $data = $this->cat->show();
        echo json_encode($data);
    }

}