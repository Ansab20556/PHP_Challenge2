<?php
namespace LibrarySystem;

trait DateHelperTrait
{
    public function daysBetween(string $start, string $end): int
    {
        $startDate = new \DateTime($start);
        $endDate   = new \DateTime($end);
        return (int) $startDate->diff($endDate)->days;
    }
}
