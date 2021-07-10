<?php
use App\Core\App;
//use App\Core\Database\QueryBuilder;
session_start();

App::bind('config',require 'config.php');
//$config = App::get('config');

//die(var_dump(App::get('config'))); //test bind array

App::bind('database' , new QueryBuilder(
        Connection::make(App::get('config')['database'])
    ));

   //globale function  
    function view($name, $data=[])
    {
        extract ($data);
        return require "app/views/{$name}.view.php";
    }
  
    function redirect($path)
    {
        header("Location: /{$path}");
    }