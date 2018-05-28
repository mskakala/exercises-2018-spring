<?php

class Book
{
    public $name = null;
    public $author = null;
    public $pages = [];

    public function addPage()
    {
        $page = new Page(); // page of a book
        $page->number = count($this->pages) + 1;

        $this->pages[] = $page;

        return $page;
    }

    public function displayPreview()
    {
        $preview_page = new Page(); // page of a website
        $preview_page->title = 'Book preview';
        $preview_page->content = join("\n", $this->pages);
        $preview_page->display();
    }
}