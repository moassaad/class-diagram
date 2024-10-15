<?php

namespace App\Dependency\LibraryBook;

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function showBooks() {
        // foreach ($this->books as $book) {
        //     echo $book->getDetails() . "\n";
        // }
        return $this->books;
    }
}