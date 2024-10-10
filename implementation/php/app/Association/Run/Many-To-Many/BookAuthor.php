<?php
namespace App\Association\Run;

// Class representing an Author
class Author {
    public $authorId;
    public $name;

    public function __construct($authorId, $name) {
        $this->authorId = $authorId;
        $this->name = $name;
    }
}

// Class representing a Book
class Book {
    public $bookId;
    public $title;

    public function __construct($bookId, $title) {
        $this->bookId = $bookId;
        $this->title = $title;
    }
}

// Class representing the relationship (Many-to-Many) between Author and Book
class BookAuthor {
    public $author;
    public $book;
    public $contributionPercentage; // Percentage of contribution by the author
    public $writingDate;

    public function __construct($author, $book, $contributionPercentage, $writingDate) {
        $this->author = $author;
        $this->book = $book;
        $this->contributionPercentage = $contributionPercentage;
        $this->writingDate = $writingDate;
    }

    public function getBookAuthorInfo() {
        return "{$this->author->name} contributed {$this->contributionPercentage}% to the book '{$this->book->title}' on {$this->writingDate}.";
    }
}

// Example usage
$author1 = new Author(1, "John Smith");
$author2 = new Author(2, "Jane Doe");

$book1 = new Book(101, "Mastering PHP");
$book2 = new Book(102, "Advanced Web Development");

// Create relationships between authors and books
$bookAuthor1 = new BookAuthor($author1, $book1, 60, "2022-01-15");
$bookAuthor2 = new BookAuthor($author2, $book1, 40, "2022-01-15");
$bookAuthor3 = new BookAuthor($author1, $book2, 100, "2023-05-10");

echo $bookAuthor1->getBookAuthorInfo() . "\n";
echo $bookAuthor2->getBookAuthorInfo() . "\n";
echo $bookAuthor3->getBookAuthorInfo() . "\n";

?>