<?php
namespace App\Controllers;
use App\Core\App;
class DietController
{
    public function diet()
    {
        $diets = App::get('database')->selectSome('SELECT * FROM mydietdb.alldiets
        left join ( SELECT diet_id, sum(likes) likes FROM mydietdb.dietlike 
        group by diet_id ) likes  on likes.diet_id= alldiets.id
        order by alldiets.id desc');
        
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
            'images'=>$_POST['images'],
            'article'    =>$_POST['article'],
            'breakfast'  =>$_POST['breakfast'],
            'Inbetween'  =>$_POST['Inbetween'],
            'lunch'      =>$_POST['lunch'],
            'supper'     =>$_POST['supper'],
        ]);
        return redirect('diet');
    }

}