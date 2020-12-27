<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('diet', 'PagesController@diet');
$router->get('show', 'PagesController@show');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');