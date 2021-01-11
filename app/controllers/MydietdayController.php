<?php
namespace App\Controllers;
use App\Core\App;
class MydietdayController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user']))
        {
        $loguser =$_SESSION['user'];
        $myday = App::get('database')->selectOne('* FROM mydietdb.mydiet
        JOIN alldiets on diet_id = alldiets.id','user_id', $loguser['id']);
        //var_dump($myday);

        return view('mydietday', compact('myday')); 
        }else{return redirect('login');}
    }
   
    public function deleteMydiet()
    {
       if (isset($_SESSION) && isset($_SESSION['user']))
       {
       $loguser =$_SESSION['user'];
      $checkboxdiet = $_REQUEST['diet_id'];
    //   var_dump($checkboxdiet);

       App::get('database')->deleteOneMydiet('mydiet',$checkboxdiet, $loguser['id'] );
       return redirect('mydietday');
       }else{return redirect('login');}
    }

}