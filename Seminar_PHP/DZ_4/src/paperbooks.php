<?php

class Paperbooks extends Library{

    public function __construct(string $title, string $author, string $category, string $library){
        parent::__construct($title, $author, $category, $library);
    }

    public function bringBook(): string
    {
        return  'Book ' . $this->getTitle() .
                ', author: ' . $this->getAuthor() .
                ', category: ' . $this->getCategory() .
                ', library: ' . $this->getLibrary();
    }

    public function returnBook(): string
    {
        return  'Book ' . $this->getTitle() .
                ', author: ' . $this->getAuthor() .
                ', category: ' . $this->getCategory() .
                ', library: ' . $this->getLibrary();
    }
}

