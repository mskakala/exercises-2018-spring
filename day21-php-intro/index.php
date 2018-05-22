<?php

$html_code = "<h1>My first PHP file</h1>";
 
echo $html_code;


$first_name = 'Bruce';

$surname = 'Wayne';

$year_of_birth = 1939;

$height = 186;

define('SERVER_SOFTWARE', 'Apache');

$first_name_int = (integer)$first_name;
var_dump($first_name_int);
echo '<br>';

$first_name_bool = (boolean)$first_name;
var_dump($first_name_bool);
echo '<br>';

$year_of_birth_bool = (boolean)$year_of_birth;
var_dump($year_of_birth_bool);
echo '<br>';

$height_bool = (boolean)$height;
var_dump($height_bool);
echo '<br>';

$year_of_birth_string = (string)$year_of_birth;
var_dump($year_of_birth_string);
echo '<br>';

$height_string = (string)$height;
var_dump($height_string);
echo '<br>';

?>

First name: <?php echo $first_name; ?><br>

Surname: <?= $surname ?><br>

Year of birth: <?= $year_of_birth ?><br>

Height: <?= $height ?><br>

I am running <?= SERVER_SOFTWARE ?><br>


