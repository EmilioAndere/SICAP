<?php

include_once './Core/Application.php';

$url = $_GET['url'];
$url = explode("/", $url);
foreach($middle as $middleware => $classes){
    if(in_array(ucfirst($url[0]), $classes)){
        include_once './Middlewares/'.$middleware.".php";
        $instanceMiddle = new $middleware();
        $instanceMiddle->handle($url);
    }else{
        if(count($url) == 1){
            $title = ucfirst($url[0]);
            include_once './Views/'.ucfirst($url[0]).".php";
        }else{
            $controller = ucfirst($url[0])."Controller";
            include_once './Controllers/'.$controller.".php";
            $instance = new $controller();
            if(array_key_exists(2, $url)){
                $instance->{$url[1]}($url[2]);
            }else{
                $instance->{$url[1]}();
            }
        }
    }
}

