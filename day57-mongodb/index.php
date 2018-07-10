<?php

// phpinfo(); die();

require 'init.php';

$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// POST data
$day = 1;
$month = null;
$plunder = null;

if ($_POST) {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $plunder = $_POST['plunder'];

    // save new booty into the database
    mongo()->pirates->booties->insertOne([
        'date' => "$day. $month.",
        'booty' => $plunder,
        'hooray' => 'Yeah!'
    ]);

    header('HTTP/1.1 302 Found');
    header('Location: ./');
    exit();
}

$booties = [];

// select all booties from the database
$booties = mongo()->pirates->booties->find();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ye olde Pirate Booty Management</title>
</head>
<body>

    <nav>
        <a href="./index.php">Ye liste of booties</a>
    </nav>

    <form action="" method="post">
        <h2>New booty!</h2>

        On the <input type="text" name="day" value="<?php echo htmlspecialchars($day); ?>"> day of 
        <select name="month">
            <?php foreach ($months as $nr => $name) : ?>
                <option value="<?php echo $nr+1; ?>"<?php echo $month == $nr+1 ? ' selected' : ''; ?>><?php echo $name; ?></option>
            <?php endforeach; ?>
        </select>
        we plundered <input type="text" name="plunder" value="<?php echo htmlspecialchars($plunder); ?>">
        <input type="submit" value="Aargh!">
    </form>

    <h2>Past booties</h2>
    <?php foreach ($booties as $booty) : ?>
        <div class="booty">
            <a href="booty.php?id=<?php echo $booty->_id; ?>"><?php echo $booty->booty; ?></a>

            Plundered: <?php echo $booty->date; ?>
        </div>
    <?php endforeach; ?>
    
</body>
</html>