<?php
namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        // $diets = App::get('database')->selectAll('alldiets');
        // // $users  = App::get('database')->selectAll('users');
        $loguser =$_SESSION['user'] ;
        var_dump($loguser);
        // return view('index', [
        //     // 'users'=>$users,
        //     'diets'=>$diets //name of table
        // ]);
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
            'name'  => 'Een dag dieet',
            'subTitle' => 'Principe van het een dag dieet',
            'auther' => 'Tahani alhammad',
            'location' => 'Nederland-Groningen',
            'description' => 'Ik ben Tahani Al Hammad web developer in opleiding bij CodeGorilla. Het idee voor dit project zijn eendaagse dieetmethodes, ontvangen uit een database MYSQL en verbonden met PHP PDO. Abonnees van websites kunnen het gebruiken en hun favoriete dieet aan hun pagina (MyDiet) toevoegen</p>'
        ];
        return view('about', ['siteinfo'=>$siteinfo]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function diet()
    {
         $diets = App::get('database')->selectAll('alldiets');
         return view('diet', [
             'diets'=>$diets //name of table
         ]);
         return view('diet');
    }
    public function show()
    {
        // //test 1
        // $diets = App::get('database')->selectOne('alldiets', '1');
        //  return view('diet', [
        //      'diets'=>$diets 
        //  ]);
        // //  var_dump($_REQUEST['id']);
        // return view('show');

        //test 2 goed  op this moment
        $diets = App::get('database')->selectOne('alldiets', $_REQUEST['id']);
         return view('show', [
             'diets'=>$diets 
         ]);
        //  var_dump($_REQUEST['id']);
        return view('show');
    }
}