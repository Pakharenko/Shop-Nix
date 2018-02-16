<?php

namespace fw\providers;

class Request
{

    public static function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }

    public static  function isGet()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return true;
        }
        return false;
    }

    public static function redirect($http = false)
    {
        if($http){
            $redirect = $http;
        }else{
            $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
        }
        header("Location: $redirect");
        exit;
    }


}