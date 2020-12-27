<?php
namespace App\Core;
class App
{
    protected static $registry = []; 
    //in this array becom this ['config']=>[], 'database'=> $QueryBuilder]

    public static function bind($key, $value)
    {
        static::$registry[$key]=$value;
    }

    public static function get($key)
    {
        if(! array_key_exists($key, static::$registry)){
            throw new Exception('No ($key) is bind in the container!');
        }
        return static::$registry[$key];
    }
}