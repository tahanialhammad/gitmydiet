<?php
namespace App\Controllers;
use App\Core\App;
class ShowController
{
    public function show()
    {
        //Select one Record with All Comments (v-1)
        $diets = App::get('database')->selectOne('* from alldiets', 'alldiets.id', $_GET['id']);
        $dietlike = App::get('database')->selectOne('diet_id, sum(likes) likes FROM mydietdb.dietlike', 'diet_id', $_REQUEST['id']);
        $comments =  App::get('database')->selectAllCom('comments');
         return view('show', [
             'diets'=>$diets,
             'comments'=>$comments,
             'dietlike'=>$dietlike
         ]);
         //var_dump($_REQUEST['id']);
        return view('show');
    }

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
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
        App::get('database')->delete('alldiets');
        return redirect('diet');
        }else{return redirect('login');}
     }

     //test update like (v-3)
     public function like()
     {   if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
        $checkLike = App::get('database')->countLike('likes', 'dietlike', $_REQUEST['id'], $loguser ["id"] );
           //var_dump($checkLike);
            if($checkLike > 0)
                {
                    App::get('database')->deleteOne('dietlike',$_REQUEST['id'], $loguser ["id"]);
                    return redirect('diet');
                }
                else{
                    App::get('database')->insert('dietlike',[
                    'user_id'=>$loguser ["id"],
                    'diet_id'=> $_GET['id'],
                    'likes'=> 1
                    ]);
                    return redirect('diet');
                }
        }else{return redirect('login');}
     }

    public function comment()
    {
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
         $loguser =$_SESSION['user'];
        // $dietId= $_GET['id'];
        App::get('database')->insert('comments',[
            'body'=>$_POST['body'],
           'diet_id'=>  $_GET['id'],
           'user_id'=> $loguser['id']
        ]);
        return redirect('show');
        }else{return redirect('login');}
    }
}