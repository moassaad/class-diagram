<?php
namespace App\Dependency\Run;
// Class representing a Book
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

// Class representing a Library that depends on the Book class
class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function showBooks() {
        foreach ($this->books as $book) {
            echo $book->getDetails() . "\n";
        }
    }
}

// Example usage
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("1984", "George Orwell");

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);

$library->showBooks(); // Display all books in the library

?>
