<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       // return view('welcome_message.php');
    echo "Welcome";
    }
    public function show($p){
        echo 'THis is  a'.$p;
    }
}
