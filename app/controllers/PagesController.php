<?php
namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        //reciev the request , delegate ask db for some records, returen a response
        $diets = App::get('database')->selectAll('alldiets');
        // $users  = App::get('database')->selectAll('users');
        // require 'views/index.view.php';
        return view('index', [
            // 'users'=>$users,
            'diets'=>$diets //may be name of table or any name
        ]);
    }

    public function about()
    {
        // require 'views/about.view.php';
        $company = 'Tahani Alhammad';
        return view('about', ['company'=>$company]);
    }
    public function contact()
    {
        // require 'views/contact.view.php';
        return view('contact');
    }
    public function diet()
    {
         // require 'views/diet.view.php';
         $diets = App::get('database')->selectAll('alldiets');
         return view('diet', [
             'diets'=>$diets //may be name of table or any name
         ]);
         return view('diet');
    }
    public function show()
    {
        return view('show');
    }
}