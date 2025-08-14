<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use LibrarySystem\{
    Book,
    Member,
    Librarian,
    Library,
    EmailNotification,
    Loan
};

$library = new Library();

// Create books
$book1 = new Book("PHP Basics", "John Doe");
$book2 = new Book("OOP in PHP", "Jane Smith");
$book3 = new Book("Clean Code", "Robert C. Martin");

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Create users
$member    = new Member("Ansab",  "ansab@example.com",  "member");
$librarian = new Librarian("shymaa", "shymaa@example.com", "librarian");

$library->addUser($member);
$library->addUser($librarian);

// Roles behave differently (polymorphic interaction)
$member->interactWithLibrary($library);
$librarian->interactWithLibrary($library);

// Search books
echo "<hr>";
echo "<strong>Search results for 'PHP':</strong><br>";
$results = $library->searchBook("PHP");
foreach ($results as $b) 
    {
    echo "- " . $b->getTitle() . " by " . $b->getAuthor() . "<br>";
    }

// Notifications
echo "<hr>";
$notifier = new EmailNotification();
$notifier->send($member->getEmail(), "You have an overdue book. Please return it.");

// Late fee calculation (extra feature)
echo "<hr>";
$loan = new Loan($book1, "2025-08-01", "2025-08-10");
$fee  = $loan->calculateLateFee("2025-08-05", 2.0);
echo "Late fee for '{$loan->getBook()->getTitle()}': \${$fee}<br>";

// Remove a book (librarian action demonstration)
echo "<hr>";
$library->removeBook("Clean Code");

// Final list of books
echo "<hr><strong>All books (after removal):</strong><br>";
foreach ($library->getBooks() as $b) 
    {
    echo "- " . $b->getTitle() . " (" . ($b->isBorrowed() ? "Borrowed" : "Available") . ")<br>";
    }

