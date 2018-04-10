<?php 
require "configo.php";

require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/Carbon/vendor/autoload.php';
// require __DIR__. '/vendor/autoload.php';

require "Bootstrap.php";


//include "analyticstracking.php";

$router->dispatch();