<?php

// namespace \

require_once 'system/Page.php'; // one page of the website

// book previews module
require_once 'Neo/BookPreview/Book.php'; // a book being sold
require_once 'Neo/BookPreview/Page.php'; // one page of a book

$book = new Book();
$book->name = 'The Last Kingdom';

// display the homepage
$homepage = new \system\Page(); // website page
$homepage->title = 'Ebooks4U';
$homepage->content = 'We sell ebooks!<br>Now on sale: ' . $book->name;
$homepage->display();

