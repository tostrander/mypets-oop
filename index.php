<?php

/*
 * 	1. Create GitHub repo mypets-oop w/ README
	2. Clone repo and sync to local
	3. Add:
		a. .htaccess
		b. views/my-pets.html
		c. index.php
	4. add-commit-push
	5. Install composer
	6. Test

	7. Add classes/pet.php
	8. Include class in route
	9. Instantiate object
	10. Display object in template

	11. edit composer.json
	12. run composer update
	13. remove include
    14. test
 */

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
   function($f3) {

    //Instantiate a Pet
    $mypet = new Pet();
    $mypet->setName('Fido');
    $mypet->setColor('purple');

    $f3->set('pet', $mypet);

    $template = new Template();
    echo $template->render('views/my-pets.html');
   });

//Run fat-free
$f3->run();