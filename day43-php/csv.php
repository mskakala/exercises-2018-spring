<?php

// // open the file for writing
// $fh = fopen('file.csv', 'w');
 
// // the data to write (an array of arrays)
// $data = array(
//     ['Bob', 'Huffy', '1982', 'fighter pilot'],
//     ['Anna', 'Smith', '1986', 'waitress']
// );
 
// foreach ($data as $fields) {
//     fputcsv($fh, $fields, ';', '"'); // file handle, fields, delimiter, string enclosure
// }

// open the file for reading
$fh = fopen('file.csv', 'r');
 
// while there are lines to be read
while($line = fgetcsv($fh, 0, ';', '"')) // file handle, delimiter, string enclosure
{
    var_dump($line); // array
}