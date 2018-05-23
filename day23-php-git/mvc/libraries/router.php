<?php

/**
 * router - takes care of routing
 * i.e. deciding what controller to run based on the current URL
 */

function do_routing()
{
    // takes the URL address
    $_SERVER['REQUEST_URI'];

    // decides what to do

    // routing magic...

    // returns the name of the controller to use
    return 'homepage'; // this routing returns always homepage
}