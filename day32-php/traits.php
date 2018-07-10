<?php

class animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
}

class dog extends mammal
{
    use domesticated;
}

class wolf extends mammal
{

}

trait domesticated
{
    public $name = null;

    public function beFed()
    {
        $this->hungry = false;
    }
}

class cat extends mammal
{
    use domesticated;
}

class mammal extends animal
{
    public function beNursed()
    {

    }
}

$bingo = new dog();
$bingo->beFed();

$loki = new wolf();
// $loki->beFed();
// echo $loki->name;

$cat = new cat();
$cat->beFed();
echo $cat->name;