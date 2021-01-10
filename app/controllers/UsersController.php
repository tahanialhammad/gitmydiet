<?php
namespace App\Controllers;
use App\Core\App;
class UsersController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
        //var_dump($loguser ["name"]);
        // $users  = App::get('database')->selectAll('users');
        // return view('users', compact('users')); 
        return view('users', compact('loguser')); 
        }else{return redirect('login');}
    }
}