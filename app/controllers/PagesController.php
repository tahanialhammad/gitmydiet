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