<?php
namespace LibrarySystem;

interface NotificationInterface
{
    public function send(string $to, string $message): void;
}

