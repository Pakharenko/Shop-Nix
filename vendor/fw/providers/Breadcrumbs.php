<?php

namespace fw\providers;

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

    public static function testAllResult($a, $b)
    {
        $c = $a * $b;
        return $c;
    }


}