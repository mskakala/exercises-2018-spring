<?php

$uri = substr($_SERVER['REQUEST_URI'], strlen('/day32-php/niceurl/'));

$url_parts = explode('/', $uri);

if ($url_parts[0] == 'articles') {
    echo 'Including ArticlesController!';
} else if ($url_parts[0] == 'movie') {
    echo 'Including MovieController!';
}