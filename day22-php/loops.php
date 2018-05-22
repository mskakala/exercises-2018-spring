<?php

// this script will run 1s max
set_time_limit(1);

/**
 * EXERCISE 1
 */

$days_to_christmas = 2;

while ($days_to_christmas > 0) {

    $days_to_christmas--; // decrease by 1

    echo 'There are still ' . $days_to_christmas . ' days to Christmas<br>';

}

/**
 * EXERCISE 2
 */

$time_served = 0;

while ($time_served < 10) {

    $time_served++;

    echo 'The prisoner has served ' . $time_served . ' years<br>';

}

do {

    $time_served++;

    echo 'The prisoner has served ' . $time_served . ' years<br>';

} while ($time_served < 10);

/**
 * EXERCISE 4
 */

for ($i = 0; $i < 10; $i++) {

    echo 'This is the ' . ($i+1). '. iteration of the loop<br>';

}

/**
 * EXERCISE 5
 */

for ($i = 0; $i < 5; $i++) {

    echo 'The prisoner has ' . (5 - $i). ' more years to serve<br>';

}

echo '<br>';

/**
 * EXERCISE 6
 */

for($i = 10; $i > 0; $i--) {

    echo 'The prisoner has ' . $i . ' more years to serve.<br>';

    if($i > 5) continue; // stop this iteration, continue with the next one

    echo 'Going to a parole hearing...<br>';

    if($i == 2)
    {
        echo 'Paroled!';
        break; // stop the entire loop
    }

}