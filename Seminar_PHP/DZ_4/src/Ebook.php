<?php
require_once 'Library.php';

class Ebook extends Library{
    protected string $url;

    public function __construct(string $title, string $author, string $category, string $url){
        parent::__construct($title, $author, $category);
        $this->url = $url;
    }

    public function downBook(): string
    {
        return  'Book ' . $this->getTitle() .
                ', author: ' . $this->getAuthor() .
                ', category: ' . $this->getCategory() .
                ', url: ' . $this->url;
    }

    public function returnBook(): string
    {
        return  'Book ' . $this->getTitle() .
                ', author: ' . $this->getAuthor() .
                ', category: ' . $this->getCategory() .
                ', url: ' . $this->url;
    }
}

