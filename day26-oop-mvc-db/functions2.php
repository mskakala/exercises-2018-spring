<?php

/**
 * calculate the division
 * 
 * also provide the remainder (modulus)
 */
function divmod($number1, $number2, &$remainder)
{
    $remainder = $number1 % $number2;

    return $number1 / $number2;
}

$result = divmod(5, 2, $rem);

function headline($text, $importance = 1)
{
    // double quotes with "Variable parsing"
    return "<h{$importance}> {$text}  </h{$importance}>";

    // <h1>foo</h1>
    return '<h' . $importance . '>'. $text . '</h' . $importance . '>';
}


echo headline('Secondary', 2);

echo headline('Primary');

function element($element, $innerhtml, $class = null, $id = null) // you decide what is here :)
{
    if ($class) { // if it is not empty
        $class_html = ' class="' .$class. '"';
    } else {
        $class_html = '';
    }

    if ($id) { // if it is not empty
        $id_html = ' id="' .$id. '"';
    } else {
        $id_html = '';
    }

    // <header class="foo" id="bar">inner HTML</header>
    return '<' .$element . $class_html . $id_html. '>' .$innerhtml. '</' .$element. '>';
}


echo element('p', 'text inside paragraph'); // <p>text inside paragraph</p>
echo element('p', 'text inside paragraph', 'p_class'); // <p class="p_class">text inside paragraph</p>
echo element('p', 'text inside paragraph', '', 'my_paragraph'); // <p id="my_paragraph">text inside paragraph</p>
echo element('p', 'text inside paragraph', 'p_class', 'my_paragraph'); // <p id="my_paragraph" class="p_class">text inside paragraph</p>
