<?php

class Paperbooks extends Library{

    public function __construct(string $title, string $authors, string $category){
        parent::__construct($title, $authors, $category);
    }
}

