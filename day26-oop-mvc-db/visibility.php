<?php

class warehouse
{
    public $name = null;
    protected $nr_of_crates = 0;
    protected $crates = [];

    /**
     * adds a new crate to this warehouse
     * 
     * the crate is described by a string $contents
     */
    public function addCrate($contents)
    {
        // add the contents into the list of crates
        $this->crates[] = $contents;

        // raise the number of crates by 1
        $this->nr_of_crates++;
    }

    /**
     * getter for nr_of_crates property
     */
    public function getNrOfCrates()
    {
        return $this->nr_of_crates;
    }

    /**
     * getter for crates property
     */
    public function getCrates()
    {
        return $this->crates;
    }
}

$trainyard = new warehouse();
$trainyard->name = 'Trainyard warehouse';

$docks = new warehouse();
$docks->name = 'Docks warehouse';

// add 3 crates to the Trainyard warehouse
$trainyard->addCrate('dusty books');
$trainyard->addCrate('old records');
$trainyard->addCrate('time machine');
$trainyard->addCrate('time machine 2');
$trainyard->addCrate('old laptops');
$trainyard->addCrate('corpse of a PHP programmer');

// add 1 crate to the Docks warehouse
$docks->addCrate('arc of the covenant');

var_dump($trainyard);
var_dump($docks);

echo $trainyard->getNrOfCrates();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visibilitility</title>
</head>
<body>
    
    <div class="warehouse">
        <h2><?php echo $trainyard->name; ?></h2>
        <div>Contains <?php echo $trainyard->getNrOfCrates(); ?> crates</div>
        <ul>
            <?php foreach ($trainyard->getCrates() as $crate) : ?>
                <li>    
                    <?php echo $crate; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>