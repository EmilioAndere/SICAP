<?php
include_once './Models/Usuario.php';

class AuthController {

    public function logIn(){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $user = new Usuario();
        $data = $user->find($username, $pass);
        if(!$data){
            echo json_encode([
                'msg' => "Error en el usuario y/o contraseña",
                'err' => true
            ]);
        }else{
            if($data['username'] === $username && $data['password'] === $pass){
                echo json_encode([
                    'msg' => "Te has loggeado con exito",
                    'err' => false              
                ]); 
            }
        }
    } 

}