<?php

/**
 * EXERCISE 1, 3
 */

$time_of_day = 'afternoon';

if ($time_of_day == 'morning') {
    echo 'Good morning, Vietnam!';
} elseif ($time_of_day == 'afternoon') {
    echo 'Good afternoon, Vietnam!';
} else {
    echo 'Good evening, Vietnam!';
}

echo '<br>';

/**
 * EXERCISE 2, 4
 */

$weather = 'sunny';

if ($weather == 'raining') {
    echo "Let's stay indoors.";
} elseif ($weather == 'sunny') {
    echo 'Let\'s put on some sunblock.';
} elseif ($weather == 'windy') {
    echo 'Let\'s put on a coat.';
} else {
    echo 'Let\'s go outside!';
}

echo '<br>';

/**
 * EXERCISE 6
 */

$height = 214;

if($height >= 180) {
    echo 'tall';
} elseif ($height >= 160) {
    echo 'average';
} else {
    echo 'small';
}

echo '<br>';

/**
 * EXERCISE 7
 */

$programming_language = 'Python';

switch ($programming_language)
{
    case 'Ruby':
    case 'PHP':
        echo 'serverside';
        break;
    case 'JavaScript':
        echo 'clientside';
        break;
    default:
        echo 'I don\'t know.';
        break;
}

echo '<br>';

/**
 * EXERCISE 8
 */

$operating_system = 'Windows';

switch ($operating_system)
{
    case 'Windows':
        echo 'Edge';
        echo '<br>Even though you don\'t want to.';
        break;
    case 'Linux':
        echo 'Firefox';
        break;
    case 'OS X':
        echo 'Safari';
        break;
    default:
        echo 'Just use Chrome, man.';
        break;
}

echo '<br>';

/**
 * EXERCISE 9
 */

$age = 65;
$gender = 'female'; // 'male'
$employed = false;

// if the age is less than 25
if ($age < 25) {

}

// if employed
if ($employed) {

}

// if age is above 34 and not employed
if ($age > 34 && !$employed) {

}

// if the age is not greater than 18
if ($age <= 18) {

}

// if the age is lower than 12 and gender is female
if ($age < 12 && $gender == 'female') {
    
}

// if age is greater or equal to 18 and is not employed
if ($age >= 18 && !$employed) {
    
}

// if age is greater or equal to 60, is employed and is a female
if ($age >= 60 && $employed && $gender == 'female') {
    
}

// if (someone) is a male above 20 or is an unemployed female above 25
if (
        ($gender == 'male' && $age > 20) 
        || 
        ($age > 25 && $gender == 'female' && !$employed)
    ) {
    echo 'Here';
}


// if($today == 'sunday') 

//     echo 'FOO';





// $today == 'sunday' OR open_shop();

// $question == 'smart' AND answer_question();


