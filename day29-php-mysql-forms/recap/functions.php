<?php

function foo($bar, $baz = 1, & $qux = null)
{
    echo $bar; // 1
    $bar = 2; // happens only to $bar - a copy of the sent value
    echo $bar; // 2
    $bar = 3;
    echo $bar; // 3
    $bar = 'honza';
    echo $bar; // 'honza'

    $baz = 3; // happens only to $baz - a copy of the sent value
    $qux = 4; // happens to whatever variable foo was called with ($my_var)
}

$my_var = 1;
foo($my_var); // nothing can happen to $my_var in foo
foo(1, $my_var); // nothing can happen to $my_var in foo
foo(1, 2, $my_var); // anything can happen to $my_var in foo\
// foo(1, 2, 3); // error, the 3rd argument must be a variable, not just a value

echo $my_var; // 4


function return_val($arg)
{
    return $arg;
}

// THE CALL to the function:
return_val(123);

$returned_value = return_val(123);
echo return_val(123);
$number = 100 + $returned_value + return_val(123);

return_val( return_val(123) );

function increased_val($val)
{
    return $val + 1;
}

echo increased_val(123); // 124

function print_val($value)
{
    echo $value;
}

function add_two_values($number_a, $number_b)
{
    return $number_a + $number_b;
}

$result = add_two_values(11, 22); // returns 33


function increase_val(& $val)
{
    $val++;
}

$value = 11;
increase_val($value); 
// $value is now 12 ($value == 12)

function combine_two_strings($string_a, $string_b)
{
    // in PHP the dot   .   is the concatenation operator
    return $string_a . $string_b;
}

combine_two_strings('My name is ', 'Joe'); // returns 'My name is Joe'

function combine_strings($string_a, $string_b = '', $string_c = '', $string_d = '')
{
    return $string_a . $string_b . $string_c . $string_d;
}

combine_strings('My name is'); // returns 'My name is'
combine_strings('My name is ', 'Joe'); // returns 'My name is Joe'
combine_strings('My name is ', 'Joe', ' Black'); // returns 'My name is Joe Black'
combine_strings('My name is ', 'Joe', ' Black', ', pleased to meet you'); // returns 'My name is Joe Black, pleased to meet you'

function bigger_value($number_a, $number_b)
{
    if ($number_a > $number_b) {

        return $number_a;

    } else if ($number_a < $number_b) {

        return $number_b;

    } else {

        return $number_a; // or $number_b, does not matter, they are equal

    }
}

bigger_value(54, 12); // returns 54
bigger_value(12, 19); // returns 19
bigger_value(10, 10); // returns 10


function longer_string($string_a, $string_b)
{
    $string_a_length = strlen($string_a);
    $string_b_length = strlen($string_b);

    if ($string_a_length > $string_b_length) {

        return $string_a;

    } else if ($string_a_length < $string_b_length) {

        return $string_b;

    } else {

        return $string_a;

    }
}

$longer_string = longer_string('Joe', 'Black');


function roll_dice($nr_of_dice = 1, $sides_of_each_dice = 6)
{
    $sum = 0;

    for ($i = 0; $i < $nr_of_dice; $i++) {

        $number_rolled = rand(1, $sides_of_each_dice);

        $sum += $number_rolled;
    }

    return $sum;
}

$result = roll_dice(3, 10); // result is a number between 3 and 30