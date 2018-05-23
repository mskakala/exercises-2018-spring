<?php

// FRONT CONTROLLER
// takes care of starting the system

// set up the environment
define('DOCUMENT_ROOT', __DIR__); // this folder /public
define('SYSTEM_ROOT', DOCUMENT_ROOT . '/..'); // one level above this one

// BOOTSTRAP
// = put everything necessary together
// in real applications this would be done using AUTOLOADING
// AUTOLOADING - makes sure that whenever we need something
//               it includes it
// now we use just basic manual require:
require_once SYSTEM_ROOT . '/libraries/html.php';
require_once SYSTEM_ROOT . '/libraries/router.php';
require_once SYSTEM_ROOT . '/controllers/homepage.php';
require_once SYSTEM_ROOT . '/controllers/contact_form.php';
require_once SYSTEM_ROOT . '/controllers/error404.php';

// RUN THE CONTROLLER
// = pass the work on to the controller
$controller_name = do_routing();

// choose the controller and run it
if($controller_name == 'homepage')
{   
    homepage(); // declared in /controllers/homepage.php
}
elseif($controller_name == 'contact_form')
{   
    contact_form(); // declared in /controllers/contact_form.php
}
else
{   
    error404(); // declared in /controllers/error404.php
}

