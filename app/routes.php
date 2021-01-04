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

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@auth');

$router->get('profile', 'ProfileController@index');
