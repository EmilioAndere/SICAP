<?php

class Helpers {

    public static function genToken($long){
        if($long < 4) { $long = 4; }
        return bin2hex(random_bytes(($long - ($long % 2)) / 2));
    }

}