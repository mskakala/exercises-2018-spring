<?php

require 'var_show.php';

$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];

// A wizard is never late
$party['gandalf'] = 'Gandalf the Grey';

// Bilbo leaves for Rivendell
unset($party['bilbo']);

// "have you been eavesdropping?"
$party['sam'] = 'Samwise Gamgee';

// Gandalf rides to Gondor
unset($party['gandalf']);


function leave_hobbiton()
{
    // import $party from global scope
    global $party;

    $party = array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

// leave home, meet Merry and Pippin
leave_hobbiton();

function go_to_bree($party)
{
    $party['strider'] = 'Strider';

    return $party;
}

// actually go to bree
$party = go_to_bree($party);


function go_to_weathertop(&$party)
{
    $party = array_merge($party, [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
    ]);
}

go_to_weathertop($party);


var_show($party);