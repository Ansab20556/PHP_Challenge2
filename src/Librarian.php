<?php
namespace LibrarySystem;

class Librarian extends User
{
    public function interactWithLibrary(Library $library): void
    {
        $this->log("Librarian {$this->name} can add/remove books.");
    }
}
