<?php
namespace App\Controllers;
use App\Core\App;
class ShowController
{
    public function show()
    {
        //test 2 goed  op this moment
        $diets = App::get('database')->selectOne('alldiets', $_REQUEST['id']);        
         return view('show', [
             'diets'=>$diets,
             'comments'=>$comments
         ]);
         //  var_dump($_REQUEST['id']);
        return view('show');
    }

}