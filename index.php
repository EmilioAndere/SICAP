<?php

$url = $_GET['url'];
$url = explode("/", $url);

if(count($url) == 1){
    require_once './Views/'.ucfirst($url[0]).".php";
}else{
    $controller = ucfirst($url[0])."Controller";
    include_once './Controllers/'.$controller.".php";
    $instance = new $controller();
    $instance->{$url[1]}();
}