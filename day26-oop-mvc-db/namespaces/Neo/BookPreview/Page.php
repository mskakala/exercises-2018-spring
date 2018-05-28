<?php

namespace Neo\BookPreview;

// FQN: \Neo\BookPreview\Page
class Page
{
    public $number = null;
    public $text = null;

    public function __toString()
    {
        return $this->text;
    }
}