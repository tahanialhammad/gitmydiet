<?php
namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        //test logn user
        $loguser = $_SESSION['user'] ;
        var_dump($loguser);
        $bestDiet = App::get('database')->selectoneJoin('alldiets', '( SELECT max(likes) best FROM mydietdb.alldiets) mostlike', 'mostlike.best', 'alldiets.likes');
        $newDiet = App::get('database')->selectoneJoin('alldiets', '( SELECT max(id) new FROM mydietdb.alldiets) newdiet', 'newdiet.new', 'alldiets.id');
        return view('index', [
            'bestDiet'=> $bestDiet,
            'newDiet' => $newDiet
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