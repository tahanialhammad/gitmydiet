<?php
namespace App\Controllers;
use App\Core\App;
class MydietdayController
{
    public function index()
    {
        $myday = App::get('database')->selectJoin('mydiet', 'alldiets', 'diet_id', 'id');
        //var_dump($myday);

        return view('mydietday', compact('myday')); 
    }
   
}