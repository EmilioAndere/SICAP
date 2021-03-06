<?php

class Authentication {

    public function handle($next){
        $cookies = getallheaders()['Cookie'];
        $cookies = explode(";", $cookies);
        foreach($cookies as $item){
            if(str_contains($item, "token")){
                if(count($next) == 1){
                    require_once './Views/'.ucfirst($next[0]).".php";
                }else{
                    $controller = ucfirst($next[0])."Controller";
                    include_once './Controllers/'.$controller.".php";
                    $instance = new $controller();
                    if(array_key_exists(2, $next)){
                        $instance->{$next[1]}($next[2]);
                    }else{
                        $instance->{$next[1]}();
                    }
                }
            }else{
                header('Location: /login');
            }
        }
    }

}