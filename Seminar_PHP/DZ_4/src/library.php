<?php

abstract class Library {
    protected string $title;
    protected string $author;
    protected string $category;
    protected string $library;

    public function __construct(string $title, string $authors, string $category, string $library){
        $this->title = $title;
        $this->author = $authors;
        $this->category = $category;
        $this->library = $library;
    }

    public function getTitle(): string{
        return $this->title;
    }
    public function getAuthor(): string{
        return $this->author;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getLibrary(){
        return $this->library;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }
    public function setAuthors(string $authors): void {
        $this->author = $authors;
    }
    public function setCategory(string $category): void {
        $this->category = $category;
    }
    public function setLibrary(string $library): void {
        $this->library = $library;
    }
    



}