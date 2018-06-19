<?php

$names = [
    'Lord of the Rings',
    'Matrix',
    'Iron Man',
    'The Godfather'
];

$ratings = [
    'Lord of the Rings' => 89,
    'Matrix' => 82,
    'Iron Man' => 67,
    'The Godfather' => 92
];

$movies = [
    [
        'title' => 'Delta Force',
        'rating' => 62,
        'year' => 1986
    ],
    [
        'title' => 'Missing in action',
        'rating' => 57,
        'year' => 1984
    ],
    [
        'title' => 'Firewalker',
        'rating' => 49,
        'year' => 1986
    ],
];


function sort_movies($movie_a, $movie_b)
{
    if ($movie_a['title'] == $movie_b['title']) {

        // return 0 if they are equal
        return 0;

    } elseif ($movie_a['title'] > $movie_b['title']) {

        // return 1 if $movie_a is bigger than $movie_b
        return 1;

    } else {

        // return -1 if $movie_b is bigger than $movie_a
        return -1;

    }
}

usort($movies, 'sort_movies');

class sorting_functions
{
    public static function sort_movies($movie_a, $movie_b)
    {
        if ($movie_a['title'] == $movie_b['title']) {
    
            // return 0 if they are equal
            return 0;
    
        } elseif ($movie_a['title'] > $movie_b['title']) {
    
            // return 1 if $movie_a is bigger than $movie_b
            return 1;
    
        } else {
    
            // return -1 if $movie_b is bigger than $movie_a
            return -1;
    
        }
    }
}

usort($movies, ['sorting_functions', 'sort_movies']);



usort($movies, function($movie_a, $movie_b) {
    if ($movie_a['title'] == $movie_b['title']) {
        return 0;
    } elseif ($movie_a['title'] > $movie_b['title']) {
        return 1;
    } else {
        return -1;
    }
});

var_dump($movies);