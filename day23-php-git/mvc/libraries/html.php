<?php

// HTML library
// displays some HTML tags

function headline($text, $level = 1)
{
    return "<h{$level}>{$text}</h{$level}>";
}