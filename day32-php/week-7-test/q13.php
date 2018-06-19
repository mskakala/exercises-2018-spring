<?php

$connection; // let's assume that this is an established PDO connection object

// run query here

$query = "
    SELECT `delivery`.*
    FROM `delivery`
    WHERE `delivery`.`id` = ?;
";

$statement = $connection->prepare($query);

$statement->execute([81]);

