<?php
include_once './Models/Usuario.php';
require_once './Core/Helpers.php';

class AuthController {

    public function logIn(){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $user = new Usuario();
        $data = $user->find($username, $pass);
        if(!$data){
            echo json_encode([
                'msg' => "Error en el usuario y/o contraseña",
                'err' => true,
            ]);
        }else{
            if($data['username'] === $username && $data['password'] === $pass){
                echo json_encode([
                    'msg' => "Te has loggeado con exito",
                    'err' => false,
                    'token' => Helpers::genToken(10)              
                ]); 
            }
        }
    } 

    public function register(){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $username = $_POST['user'];
        $pass = $_POST['pass'];
        $user = new Usuario();
        $data = $user->insert($nombre, $apellidos, $username, $pass);
        if(gettype($data) == "string"){
            echo json_encode([
                'msg' => $data,
                'err' => true,
            ]);
        }else if($data < 1){
            echo json_encode([
                'msg' => "Error en el usuario no se pudo registrar",
                'err' => true,
            ]);
        }else{

            echo json_encode([
                'msg' => "Felicidades te has registrado con exito",
                'err' => false,        
            ]);
        }

    }

}