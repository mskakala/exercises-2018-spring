<?php

/**
 * EXERCISE 1, 3, 5
 */

function greet($whom)
{
    // there is now a variable $whom
    // it's value is 'Paris'

    return 'Hello, ' . $whom . '!';
}

// call the function
$greeting = greet('Prague');
echo $greeting;

echo greet('Paris');
echo greet('Brno');

/**
 * EXERCISE 2
 */

function print_copyright()
{
    // no variables known here

    echo '&copy; 2018';
}

print_copyright();

/**
 * EXERCISE 4, 6
 */

function headline($text)
{
    return "<h1>$text</h1>";
}

// call the function and echo the returned value right away
echo headline('Your website');

// call the function and save the returned value into a variable
$headline = headline('Your website');

// var_dump the variable (that contains the returned value)
var_dump($headline);



$a = 1;
// scope A
function foo()
{
    // scope B
    // import the variable $a from the global scope
    $a = 1;

    $a++;
}

foo();

var_dump($a);