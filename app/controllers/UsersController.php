<?php
namespace App\Controllers;
use App\Core\App;
class UsersController
{
    public function index()
    {
        $users  = App::get('database')->selectAll('users');
        return view('users', compact('users')); 
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