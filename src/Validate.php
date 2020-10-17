<?php

namespace App;

class Validate{
    public static function email($value){
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($url){
        return (bool) filter_var($url, FILTER_VALIDATE_URL);
    }

    public static function password($password){
        $valid = boolval(preg_match("/^[a-z0-9]{6,30}$/",$password));
        return $valid;
    }
}