<?php

abstract class Library {
    protected string $title;
    protected string $authors;
    protected string $category;

    public function __construct(string $title, string $authors, string $category){
        $this->title = $title;
        $this->authors = $authors;
        $this->category = $category;
    }

    public function getTitle(): string{
        return $this->title;
    }
    public function getAuthors(): string{
        return $this->authors;
    }

    public function getCategory(string $category){
        return $this->category;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }
    public function setAuthors(string $authors): void {
        $this->authors = $authors;
    }

    public function setCategory(string $category): void {
        $this->category = $category;
    }
    

}