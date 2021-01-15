<?php
namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        //test login user
        //$loguser = $_SESSION['user'] ;
        //var_dump($loguser);

        $bestDiet =  App::get('database')->selectSome('SELECT * FROM mydietdb.alldiets
        left join ( SELECT diet_id, sum(likes) likes FROM mydietdb.dietlike 
        group by diet_id ) likes  on likes.diet_id= alldiets.id order by likes desc limit 1');
        
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
            'location' => 'Nederland-Groningen',
            'description' => 'Ik ben Tahani Al Hammad web developer in opleiding bij CodeGorilla. Het idee voor dit project zijn eendaagse dieetmethodes, ontvangen uit een database MYSQL en verbonden met PHP PDO. Abonnees van websites kunnen het gebruiken en hun favoriete dieet aan hun pagina (MyDiet) toevoegen'
        ];
        return view('about', ['siteinfo'=>$siteinfo]);
    }
    public function contact()
    {
        return view('contact');
    }
}