<?php

// require the db class
require_once 'db.php';

use polakjan\mvc\db;

// database connection information
define('DB_HOST', 'localhost'); // address of the server
define('DB_NAME', 'games');     // name of the database
define('DB_USER', 'root');      // username
define('DB_PASS', 'rootroot');  // password

$query = "
    SELECT *
    FROM `game`
";

$games = db::select($query);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<body>

    <?php foreach ($games as $game) : ?>

        <div class="game">
            <div class="image">
                <img src="<?= $game['image_url'] ?>" />
            </div>
            <div class="info">
                <h2 class="name"><?= $game['name'] ?></h2>
                <div class="release">Released at: <?= $game['released_at'] ?></div>
                <div class="description">
                    <?= $game['description'] ?>
                </div>
                <div class="rating"><?= $game['rating'] ?>%</div>        
            </div>
        </div>

    <?php endforeach; ?>
    
</body>
</html>