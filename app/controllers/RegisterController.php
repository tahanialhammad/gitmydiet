<?php
namespace App\Controllers;
use App\Core\App;

class RegisterController
{
    public function index()
    {
        $users  = App::get('database')->selectAll('users');
        return view('register', compact('users')); 
    }

    public function store()
    {
        $data = [
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'password'   => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
       //var_dump($data);
        App::get('database')->insert('users',$data);
       
        return redirect('users');
    }

}