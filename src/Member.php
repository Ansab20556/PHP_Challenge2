<?php
namespace LibrarySystem;

class Member extends User
{
    public function interactWithLibrary(Library $library): void
    {
        $this->log("Member {$this->name} can borrow books.");
    }
}
