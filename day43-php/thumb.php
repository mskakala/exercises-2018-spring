<?php

$source = imagecreatefromjpeg('104670887-VacationExplainsTHUMBWEB.1910x1000.jpg');

$target = imagecreatetruecolor(100, 100);

list($source_width, $source_height) = getimagesize('104670887-VacationExplainsTHUMBWEB.1910x1000.jpg');

// var_dump($source_width);
// var_dump($source_height);

imagecopyresized($target, $source, 0, 0, 0, 0, 100, 100, $source_width, $source_height);

header('Content-type: image/jpeg');
imagejpeg($target, 'thumb.jpg', 90);