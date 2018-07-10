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

require_once 'Spyc.php';

// $yaml_string = Spyc::YAMLDump($data);

// file_put_contents('file.yml', $yaml_string);

$retrieved_data = Spyc::YAMLLoad('file.yml');

var_dump($retrieved_data);