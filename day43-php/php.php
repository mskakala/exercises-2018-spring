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

// $php_string = var_export($data, true);

// $php_string = '<?php $data = ' . $php_string .';';

// file_put_contents('file.php', $php_string);

include('file.php');

var_dump($data);