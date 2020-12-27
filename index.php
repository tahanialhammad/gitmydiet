<?php
 ini_set('display_errors','on'); //only for developer for test 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method()); //to ask the router is this get reuest or post 