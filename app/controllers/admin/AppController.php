<?php

namespace app\controllers\admin;

use fw\core\base\Controller;
use fw\providers\Auth;

class AppController extends Controller
{
    public $layout = 'admin';

    public function __construct($route)
    {
       if (Auth::getAdminAuth() == 1) {
           parent::__construct($route);
       } else {
           header("location: /");
       }
    }

}