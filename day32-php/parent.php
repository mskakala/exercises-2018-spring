<?php

class pancake
{
    public function prepare()
    {
        echo 'Preparing flour...<br>';
        echo 'Preparing milk...<br>';
        echo 'Preparing eggs...<br>';
    }
}

// $ascetic_pancake = new pancake();
// $ascetic_pancake->prepare();

class blueberry_pancake extends pancake
{
    public function prepare()
    {
        parent::prepare();

        echo 'Preparing blueberry jam...<br>';
    }
}

// $blueberry_pancake = new blueberry_pancake();
// $blueberry_pancake->prepare();


class phone
{
    public $number = null;

    public function __construct($number)
    {
        $this->number = $number;
    }
}

class czech_phone extends phone
{
    public function __construct($number)
    {
        $number = '0042' . $number;

        parent::__construct($number);
    }
}

$phone = new czech_phone('123456789');
echo $phone->number; // should yield 0042123456789
