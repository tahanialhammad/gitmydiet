<?php
namespace App\Controllers;
use App\Core\App;
class ShowController
{
    public function show()
    {
        //test 2 goed  op this moment
        $diets = App::get('database')->selectOne('alldiets');
        $comments =  App::get('database')->selectAllCom('comments');
         return view('show', [
             'diets'=>$diets,
             'comments'=>$comments
         ]);
         //  var_dump($_REQUEST['id']);
        return view('show');
    }
    //test Add To MyDiet
    public function addtomydiet()
    {
        App::get('database')->insert('mydiet',[
           'diet_id'=>  $_GET['id']
         ]);
         return redirect('mydietday');
    }
     //test delet diet
     public function delete()
     {
        App::get('database')->delete('alldiets');
        return redirect('diet');
     }

    //test update like
    public function like()
    {
        App::get('database')->like('alldiets');
        return redirect('diet');
    }

    public function comment()
    {
        // $dietId= $_GET['id'];
        App::get('database')->insert('comments',[
            'body'=>$_POST['body'],
           'diet_id'=>  $_GET['id']
        ]);

        return redirect('show');
    }
}