<?php
namespace LibrarySystem;

class Book
{
    // Encapsulation 
    private string $title;
    private string $author;
    private bool   $isBorrowed = false;

    public function __construct(string $title, string $author)
    {
        $this->title  = $title;
        $this->author = $author;
    }

    // Getters and setters 
    public function getTitle(): string  
    { 
        return $this->title; 
    }
    public function getAuthor(): string 
    {
        return $this->author;
    }
    public function isBorrowed(): bool  
    { 
        return $this->isBorrowed; 
    }

    //change status
    public function borrow(): void    
    {
        $this->isBorrowed = true;
    }
    public function returnBook(): void 
    { 
        $this->isBorrowed = false;
    }
}
