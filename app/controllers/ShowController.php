<?php
namespace App\Controllers;
use App\Core\App;
class ShowController
{
    public function show()
    {
//test 2 goed  op this moment
        // $diets = App::get('database')->selectOne('alldiets');
        $diets = App::get('database')->selectOne('* from alldiets', 'id', $_REQUEST['id']);
        $dietlike = App::get('database')->selectOne('diet_id, sum(likes) likes FROM mydietdb.dietlike', 'diet_id', $_REQUEST['id']);
        $comments =  App::get('database')->selectAllCom('comments');
        return view('show', [
             'diets'=>$diets,
             'comments'=>$comments,
             'dietlike'=>$dietlike,
             '$loguser' =>$loguser
         ]);
         //  var_dump($_REQUEST['id']);
        return view('show');
    }
// //test Add To MyDiet
//     public function addtomydiet()
//     {
//         App::get('database')->insert('mydiet',[
//            'diet_id'=>  $_GET['id']
//          ]);
//          return redirect('mydietday');
//     }
//test2 Add To MyDiet
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
//test Delet Diet
     public function delete()
     {
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
        App::get('database')->delete('alldiets');
        return redirect('diet');
        }else{return redirect('login');}
     }

    // //test update like (v-1)
    // public function like()
    // {
    //     App::get('database')->like('alldiets');
    //     return redirect('diet');
    // }
    // //test update like (v-2)
    // public function like()
    // {
    //     $loguser =$_SESSION['user'];
    //     App::get('database')->insert('dietlike',[
    //         'user_id'=>$loguser ["id"],
    //        'diet_id'=> $_GET['id'],
    //        'likes'=> 1
    //     ]);
    //     return redirect('diet');
    // }
    //test update like (v-3)
    public function like()
    {
        if (isset($_SESSION) && isset($_SESSION['user']))
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
        App::get('database')->insert('comments',[
            'body'=>$_POST['body'],
           'diet_id'=>  $_GET['id'],
           'user_id'=> $loguser['id']
        ]);

        return redirect('show?id=' . $_GET['id']);
        }else{return redirect('login');}
    }
}