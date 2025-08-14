<?php
namespace LibrarySystem;

abstract class User
{
    use LoggerTrait;

    protected string $name;
    protected string $email;
    protected string $role;

    public function __construct(string $name, string $email, string $role)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->role  = $role;
    }

    public function getName(): string  
    {
        return $this->name; 
    }
    public function getEmail(): string 
    {
        return $this->email; 
    }
    public function getRole(): string  
    {
        return $this->role; 
    }

    abstract public function interactWithLibrary(Library $library): void;
}
