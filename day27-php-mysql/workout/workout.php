<?php

// 1.
$name = 'James';

// 2.
// $name = $name . ' Bond';
$name .= ' Bond';

// 3.
$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

// 4.
echo 'The name is ' . $bond_info['last_name'] . ". {$bond_info['first_name']} {$bond_info['last_name']}.";

// 5.
echo "One day when I was driving my {$bond_info['car']} in the Alps" .
    " {$bond_info['enemy']} came along and made me a {$bond_info['relationship_status']}." .
    " If only I had my {$bond_info['gun']} with me!";

// 6.
$bond_info['last_case'] = 'Spectre';

// 007.
class bondCase
{
    // 16.
    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    // 10.
    protected $girls = [];

    // 19.
    public static function getAvgGirlsPerCase()
    {
        if(!static::$cases_solved) return 0; // to account for division by 0

        return static::$girls_met / static::$cases_solved;
    }

    // 9.
    public function __construct($year)
    {
        $this->year = $year;

        // 17.
        static::$cases_solved++;
    }

    // 8.
    public function getName()
    {
        return $this->name;
    }
 
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getYear()
    {
        return $this->year;
    }
 
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }
 
    public function setEnemy($enemy)
    {
        $this->enemy = $enemy;
    }

    // 11.
    public function addGirl($name)
    {
        $this->girls[] = $name;

        // 18.
        static::$girls_met++;
    }
}

// 12.
$spectre = new bondCase(2015);
$spectre->setName('Spectre');
$spectre->setEnemy('Ernst Stavro Blofeld');

// 13.
$spectre->addGirl('Estrella');
$spectre->addGirl('Lucia Sciarra');
$spectre->addGirl('Madeleine Swann');

// 14.
$casino = new bondCase(2006);
$casino->setName('Casino Royale');
$casino->setEnemy('Le Chiffre');

// 15.
$casino->addGirl('Vesper Lynd');
$casino->addGirl('Solange Dimitrios');


// 20.
echo 'On average Bond has met ' . bondCase::getAvgGirlsPerCase() . ' girls per case.';
