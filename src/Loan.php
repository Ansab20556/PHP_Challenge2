<?php
namespace LibrarySystem;

class Loan
{
    use DateHelperTrait;

    private Book $book;
    private string $borrowDate;
    private string $returnDate;

    public function __construct(Book $book, string $borrowDate, string $returnDate)
    {
        $this->book = $book;
        $this->borrowDate = $borrowDate;
        $this->returnDate = $returnDate;
    }

    public function getBook(): Book { return $this->book; }

    // Calculate late fee from dueDate; feePerDay is numeric 
    public function calculateLateFee(string $dueDate, float $feePerDay): float
    {
        $daysLate = $this->daysBetween($dueDate, $this->returnDate);
        return $daysLate > 0 ? $daysLate * $feePerDay : 0.0;
    }
}
