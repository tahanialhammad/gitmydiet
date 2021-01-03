<?php
namespace App\Controllers;
use App\Core\App;
class DietController
{

    public function diet()
    {
         $diets = App::get('database')->selectAll('alldiets');
         return view('diet', [
             'diets'=>$diets //name of table
         ]);
         return view('diet');
    }

    public function store()
    {
        App::get('database')->insert('alldiets',[
            'title'=>$_POST['title'],
            'description'=>$_POST['description'],
            'images'=>$_POST['images']
        ]);
        // header('Location: /users');//redirect to all users page
        return redirect('diet');
    }

}