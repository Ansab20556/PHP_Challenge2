<?php
namespace LibrarySystem;

class EmailNotification implements NotificationInterface
{
    public function send(string $to, string $message): void
    {
        echo "📧 Email to {$to}: {$message}<br>";
    }
}
