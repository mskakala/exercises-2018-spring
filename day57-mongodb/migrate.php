<?php

include 'init.php';

if (PHP_SAPI !== 'cli') {
    exit('You have to run tis \'ere command from the command line, mate.');
}

if (empty($argv[1])) {
    exit("\nYe olde usage:\nphp migrate.php <what>\n");
}

$method = strtolower($argv[1]);

if (!method_exists('migrate', $argv[1])) {
    exit("Wrong method matey. Try one of these:\n  ".join("\n  ", get_class_methods('migrate')));
}

if (!is_callable(['migrate', $method])) {
    exit("Bad luck mate. Tis \'ere method '".$method."' cannot be called.");
}

call_user_func_array(['migrate', $method], array_slice($argv, 1));

class migrate
{
    public static function create()
    {
        // create a database pirates and collection booties
        // $connection = mongo();
        // $database = $connection->selectDatabase('pirates');
        // $database->createCollection('booties');

        mongo()->pirates->createCollection('booties');
    }


    public static function make_crew()
    {
        // insert many crew members at once
        mongo()->pirates->crew->insertMany([
            [
                'name' => "Ryland 'Executioner' Blythe"
            ],
            [
                'name' => "Sheldon 'Ruthless' Lazarus",
                'post' => "first mate"
            ],
            [
                'name' => "Carver 'Beastly' Stanley"
            ],
            [
                'name' => "Brad 'Whitemane' Pritchard"
            ],
            [
                'name' => "Sefton 'Devil's Smile' Coombs"
            ],
            [
                'name' => "Sadler 'Blunder' Xix"
            ],
            [
                'name' => "Roxbert 'Dishonest' Heinrik",
                'post' => "deckhand"
            ],
            [
                'name' => "Faine 'The Boar' Dayton"
            ],
            [
                'name' => "Barden 'Beastly' Duke"
            ],
            [
                'name' => "Thayer 'Merciless' Reeve"
            ]
        ]);

        exit("\33[31mCrew hired. Aargh.");
    }
}