<?php
namespace App\Association\Run;

class Book {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}

class Author {
    private $name;
    private $books = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function getName() {
        return $this->name;
    }
}

$author1 = new Author("Mohammad Asaad");
$author2 = new Author("Sara Ahmed");

$book1 = new Book("Learn PHP");
$book2 = new Book("PHP Adv.");

$author1->addBook($book1);
$author1->addBook($book2);

function displayAuthorBooks(Author $author) {
    $books = $author->getBooks();
    if (count($books) > 0) {
        echo $author->getName() . "Write Book: \n";
        foreach ($books as $book) {
            echo "- " . $book->getTitle() . "\n";
        }
    } else {
        echo $author->getName() . "Don't have any book\n";
    }
}

displayAuthorBooks($author1);
displayAuthorBooks($author2);

?>