<?php

/**
 * EXERCISE 1
 */

$inches = 12;

// cm = in * 2.54
$centimeters = $inches * 2.54;

echo $centimeters;
echo '<br>';

/**
 * EXERCISE 2
 */

$celsius = 100;

// F = (9/5) * C + 32
$fahrenheit = (9/5) * $celsius + 32;

echo $fahrenheit;

/**
 * EXERCISE 3
 */

echo '<br>';
$number = 0;
$number++;
var_dump($number);

echo '<br>';
$number = 0;
var_dump($number++);
var_dump($number);

echo '<br>';
$number = 0;
var_dump(++$number);

/**
 * EXERCISE 4
 */

$temperature = 36.5;

$status = 'I am ' . ($temperature > 37 ? 'ill' : 'healthy');

if ($temperature > 37) {
    $status = 'ill';
} else {
    $status = 'healthy';
}

echo '<br>';
echo $status;

/**
 * EXERCISE 5
 */

$number = 42;

$result = $number % 2 ? 'odd' : 'even'; // 'even' or 'odd'

echo 'The number ' . $number . ' is ' . $result;

/**
 * EXERCISE 6
 */

$weekday = 'Tuesday';

echo '<br>Today is ' . $weekday;

/**
 * EXERCISE 7
 */

$year_of_birth = 2000;

$age = 18;

$this_year = 2018;

echo '<br>I was born in ' . $year_of_birth . ' so this year I am celebrating my ' . ($this_year - $year_of_birth) . '. birthday';