<?php

$html_code = "<h1>My first PHP file</h1>";
 
echo $html_code;


$first_name = 'Bruce';

$surname = 'Wayne';

$year_of_birth = 1939;

$height = 186;

define('SERVER_SOFTWARE', 'Apache');

?>

First name: <?php echo $first_name; ?><br>

Surname: <?= $surname ?><br>

Year of birth: <?= $year_of_birth ?><br>

Height: <?= $height ?><br>

I am running <?= SERVER_SOFTWARE ?><br>


