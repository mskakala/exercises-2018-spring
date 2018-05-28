<?php

namespace system;

// FQN: \system\Page
class Page
{
    public $title = null; // contents of the <title></title> tag
    public $content = null; // the actual HTML within the page
    
    public function display() 
    {
        echo '<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>'.$this->title.'</title>
            </head>
            <body>
                '.$this->content.'
            </body>
            </html>';
    }
}