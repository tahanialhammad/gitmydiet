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
        $loguser = $_SESSION['user'] ;
        var_dump($loguser);
        
        return view('index', [
            // 'users'=>$users,
            'diets'=>$diets //name of table
        ]);
    }

    public function about()
    {
        $siteinfo=[
            'name'  => 'one day diet',
            'auther' => 'Tahani alhammad',
            'location' => 'Netherland'
        ];
        return view('about', ['siteinfo'=>$siteinfo]);
    }
    public function contact()
    {
        return view('contact');
    }
}