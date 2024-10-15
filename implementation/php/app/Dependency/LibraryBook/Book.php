<?php

namespace App\Dependency\LibraryBook;

class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getDetails() {
        return "Title: {$this->title}, Author: {$this->author}";
    }
}