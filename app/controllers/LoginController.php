<?php
namespace App\Controllers;
use App\Core\App;

class LoginController
{
    public function index()
    {
        return view('login');
    }
    public function auth()
    {
        var_dump('WELKOM '.$_POST['name']);
    }

}