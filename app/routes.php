<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('diet', 'DietController@diet');
$router->post('diet', 'DietController@store');

$router->get('show', 'ShowController@show');
$router->post('show', 'ShowController@store');
//test delet
$router->get('show/delete', 'ShowController@delete');
//test Update Like
$router->get('show/like', 'ShowController@like');
//test comments
$router->post('show/comments', 'ShowController@comment');
//test add to my diet list
$router->get('show/add', 'ShowController@addtomydiet');
$router->get('mydietday', 'MydietdayController@index');
$router->get('mydietday/deleteMydiet', 'MydietdayController@deleteMydiet');

//Register 1
$router->get('users', 'UsersController@index');
//$router->post('users', 'UsersController@store');

//Register 2
$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@store');
//Login
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');
$router->get('logout', 'LoginController@logout');

$router->get('profile', 'ProfileController@index');