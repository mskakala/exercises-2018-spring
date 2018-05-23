<?php

// HOMEPAGE CONTROLLER
// takes care of displaying the homepage

function homepage() 
{
    // gather data
    require_once SYSTEM_ROOT . '/models/movies.php'; // model for getting movie information
    $model = new Movies_model;
    $movies = $model->get_movies();

    // (modify data if needed)

    // display data
    include SYSTEM_ROOT . '/views/homepage.php';
}