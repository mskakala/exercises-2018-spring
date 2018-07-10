<?php

require 'init.php';

// find one booty from database
$booty = mongo()->pirates->booties->findOne([
    '_id' => new MongoDB\BSON\ObjectId($_GET['id'])
]);

// POST data
$amount = null;
$type = null;
$crew = [];

if ($_POST) {
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $crew = isset($_POST['crew']) ? $_POST['crew'] : [];

    $plunder = isset($booty->plunder) ? $booty->plunder : [];

    if ($amount) {
        $plunder[$type] = $amount;
    }

    // update this booty with plunder and crew
    mongo()->pirates->booties->updateOne([
        '_id' => new MongoDB\BSON\ObjectId($_GET['id'])
    ], [
        '$set' => [
            'plunder' => $plunder,
            'crew' => $crew
        ]
    ]);

    header('HTTP/1.1 302 Found');
    header("Location: http://{$_SERVER[HTTP_HOST]}{$_SERVER[REQUEST_URI]}");
    exit();
}

// select all the crew from the database
$crew = mongo()->pirates->crew->find();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ye booty</title>
</head>
<body>

    <nav>
        <a href="./index.php">Ye liste of booties</a>
    </nav>

    <h1>Ye booty <?php echo $booty->booty; ?></h1>

    <form action="" method="post">

        <h2>New plunder!</h2>
        <input type="text" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
        of
        <input type="text" name="type" value="<?php echo htmlspecialchars($type); ?>">
        <input type="submit" value="Aargh!">

        <?php if (isset($booty->plunder)) : ?>
            <h2>We plundered:</h2>
            <ul>
                <?php foreach ($booty->plunder as $type => $amount) : ?>
                    <li><?php echo $amount; ?> of <?php echo $type; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (!empty($crew)) : ?>
            <h2>Scurvy dogs:</h2>
            <?php foreach ($crew as $mate) : ?>
                <input type="checkbox" name="crew[<?php echo $mate->_id; ?>]" value="1" <?php echo (isset($booty->crew[(string)$mate->_id])) ? ' checked' : '';?>> <?php echo $mate->name; ?><br>
            <?php endforeach; ?>
            <br>
            <input type="submit" value="Aargh!">
        <?php endif; ?>

    </form>
    
</body>
</html>