<?php

$root_dir = __DIR__ . '/..';

// $files = scandir($root_dir);

$dir_handle = opendir($root_dir);

// run readdir for as long as it returns something
// else than false
while(false !== ($file = readdir($dir_handle))) {
    var_dump($file);
}

closedir($dir_handle);

$fh = fopen(__FILE__, 'r');

while(false !== ($line = fgets($fh))) {
    echo $line;
}

fclose($fh);

var_dump( file(__FILE__) );

var_dump( file_get_contents(__FILE__) );

function browse_directory($directory)
{
    $files = scandir($directory);
    foreach($files as $file)
    {
        if($file == '.' || $file == '..') continue;
        if(is_dir($directory.'/'.$file))
        {
            // using recursiveness to go deeper
            browse_directory($directory.'/'.$file);
        }
        else
        {
            echo $file.'<br>';
            // do something with the file
        }
    }
}

browse_directory($root_dir);