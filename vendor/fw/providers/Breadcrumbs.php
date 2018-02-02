<?php

namespace fw\providers;

use app\models\Comment;

class Breadcrumbs
{

    public static function crumbs()
    {
        $cur_url = $_SERVER['REQUEST_URI'];
        $urls = explode('/', $cur_url);
        $crumbs = [];
        foreach ($urls as $key => $url) {
            if($key == 0) {
                continue;
            } else {
                $crumbs[] = $url;
            }
        }
        return $crumbs;
    }


    public function subscribe() 
    {

        $subscribe = new Comment;

        if (isset($_POST['subscribe'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];

            $subscribe->setSubscribe($name, $email);
            header("location: /");

        }

    }


}