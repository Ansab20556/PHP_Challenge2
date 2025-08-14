<?php
namespace LibrarySystem;

class Library
{
    use LoggerTrait;

    /** @var Book[] */
    private array $books = [];
    /** @var User[] */
    private array $users = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
        $this->log("Book added: " . $book->getTitle());
    }

    public function removeBook(string $title): void
    {
        foreach ($this->books as $i => $book) 
            {
                if ($book->getTitle() === $title) 
                    {
                        unset($this->books[$i]);
                        $this->books = array_values($this->books);
                        $this->log("Book removed: {$title}");
                        return;
                    }
            }
        $this->log("Book not found: {$title}");
    }

    // Search by title or author (case-insensitive) 
    public function searchBook(string $keyword): array
    {
        $kw = mb_strtolower($keyword);
        return array_values(array_filter($this->books, function (Book $b) use ($kw) {
            return str_contains(mb_strtolower($b->getTitle()), $kw)
                || str_contains(mb_strtolower($b->getAuthor()), $kw);
        }));
    }

    public function addUser(User $user): void
    {
        $this->users[] = $user;
        $this->log("User added: " . $user->getName() . " (" . $user->getRole() . ")");
    }

    // Helpers for demo
    public function getBooks(): array 
    {
        return $this->books; 
    }
    public function getUsers(): array 
    { 
        return $this->users; 
    }
}
