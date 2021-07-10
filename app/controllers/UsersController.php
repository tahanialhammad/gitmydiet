<?php
namespace App\Controllers;
use App\Core\App;
class UsersController
{
    public function index()
    {
        $loguser =$_SESSION['user'] ;
        //var_dump($loguser ["name"]);
        
        // $users  = App::get('database')->selectAll('users');
        // return view('users', compact('users')); 
        return view('users', compact('loguser')); 
    }

    // public function store()
    // {
    //     App::get('database')->insert('users',[
    //         'name'=>$_POST['name'],
    //         'email'=>$_POST['email'],
    //         'password'=>$_POST['password']
    //     ]);
        
    //     // header('Location: /users');//redirect to all users page
    //     return redirect('users');
    // }


}