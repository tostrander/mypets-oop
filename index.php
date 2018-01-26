<?php

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require autoload
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /',
   function() {
    Template template = new Template();
    template->render("views/home.html");
   });



//Run fat-free
$f3->run();