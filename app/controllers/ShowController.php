<?php
namespace App\Controllers;
use App\Core\App;
class ShowController
{
    public function show()
    {
        //Select one Record with All Comments (v-1)
        $diets = App::get('database')->selectOne('alldiets');
        $comments =  App::get('database')->selectAllCom('comments');
         return view('show', [
             'diets'=>$diets,
             'comments'=>$comments
         ]);
         //var_dump($_REQUEST['id']);
        return view('show');
    }
    // //Add To MyDiet (v-1)
    // public function addtomydiet()
    // {
    //     App::get('database')->insert('mydiet',[
    //        'diet_id'=>  $_GET['id']
    //      ]);
    //      return redirect('mydietday');
    // }

    //Add To MyDiet (v-2)
    public function addtomydiet()
    {
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
        App::get('database')->insert('mydiet',[
        'diet_id'=>  $_GET['id'],
        'user_id'=> $loguser ["id"]
        ]);
        return redirect('mydietday');
        }else{return redirect('login');}
    }
     //Delet a diet (v-1)
     public function delete()
     {
        App::get('database')->delete('alldiets');
        return redirect('diet');
     }

    //Update like (v-1)
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