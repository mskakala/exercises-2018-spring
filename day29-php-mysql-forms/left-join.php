<?php

// require the db class
require_once 'db.php';

use polakjan\mvc\db;

// database connection information
define('DB_HOST', 'localhost'); // address of the server
define('DB_NAME', 'world');     // name of the database
define('DB_USER', 'root');      // username
define('DB_PASS', 'rootroot');  // password

$query = "
    SELECT `city`.*,
        `country`.`Name` country_name,
        city2.`Name` name_from_city2
    FROM `city`
    LEFT JOIN `country`
        ON `city`.`CountryCode` = `country`.`Code`
    LEFT JOIN `city` AS city2
        ON `city`.`id` = city2.`id`
    WHERE `city`.`Population` > 5000000;
";

$cities = db::select($query);

var_dump($cities);