<?php

require_once 'vendor/autoload.php';

// connect to mongo DB
$mongo = new MongoDB\Client("mongodb://localhost:27017");

function mongo()
{
    global $mongo;

    return $mongo;
}