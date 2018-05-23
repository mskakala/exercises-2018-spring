<?php

require 'var_show.php';

$fruit = [
    'Apple', // automatically assigned index 0
    'Pear',  // automatically assigned index 1
    'Orange' // automatically assigned index 2
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

// var_show($fruit);

// var_show($fruit_colors);

$cars_i_want = [];

var_show($cars_i_want);

$cars_i_want[] = 'Aston Martin'; // gets the next available key ( 0 )
$cars_i_want[] = 'Bugatti';      // gets the next available key ( 1 )
$cars_i_want[] = 'Ferrari';      // gets the next available key ( 2 )
$cars_i_want[] = 'Lamborghini';
$cars_i_want[] = 'Maserati';
$cars_i_want[] = 'Mercedes'; 
$cars_i_want[] = 'Porsche';
$cars_i_want[] = 'Skoda';

var_show($cars_i_want);

echo 'For myself I would buy ' . $cars_i_want[1] . '.<br>';

echo "For my spouse I would buy {$cars_i_want[3]}.<br>";

$cars_i_want[4] = 'Smart';

echo 'Each of my kids will get a ' . $cars_i_want[4] . '.';

// var_show($cars_i_want);

// foreach (array as value)
foreach ($cars_i_want as $car_name) {

}

// foreach (array as key => value)
foreach ($cars_i_want as $key => $car_name) {

}

echo '<ul>';

foreach ($cars_i_want as $key => $car_name) {

    echo '<li>' . $key . '. ' . $car_name . '</li>';

}

echo '</ul>';

?>
<ul>
    <?php foreach ($cars_i_want as $key => $car_name) : ?>

        <li><?= $car_name ?></li>
        
    <?php endforeach; ?>
</ul>