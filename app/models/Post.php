<?php
namespace App\Models;
class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title        = $title;
        $this->author       = $author;
        $this->published    = $published;
    }
}