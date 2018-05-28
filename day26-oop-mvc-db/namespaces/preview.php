<?php

require_once 'system/Page.php'; // one page of the website

// book previews module
require_once 'Neo/BookPreview/Book.php'; // a book being sold
require_once 'Neo/BookPreview/Page.php'; // one page of a book


// preview a book
$book = new Book();
$book->name = 'The Last Kingdom';

$cover = new Page(); // book page
$cover->content = '<h1>The Last Kingdom</h1>';

$page = $book->addPage();
$page->text = 'Once upon a time there was a kingdom...';

$book->displayPreview();