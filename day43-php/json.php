<?php

$data = [
    'config' => [
        'URL' => 'http://mysite.com',
        'host' => 'localhost',
        'port' => 80
    ],
    'environment' => 'development',
    'info' => [
        'contact' => [
            [
                'name' => 'Steve',
                'position' => 'owner'
            ],
            [
                'name' => 'Bob',
                'position' => 'developer'
            ]
        ],
        'address' => 
'Data4You
Krakovská 9,
Praha 1',
        'established' => 2015
    ]    
];

// $json_string = json_encode($data);

// file_put_contents('file.json', $json_string);

$json_string = file_get_contents('file.json');

$retrieved_data = json_decode($json_string, true);

var_dump($retrieved_data);