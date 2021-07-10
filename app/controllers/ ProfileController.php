<?php
namespace App\Controllers;
use App\Core\App;

class ProfileController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
       return view('profile', compact('loguser'));
    }else{return redirect('login');}
    }
}

