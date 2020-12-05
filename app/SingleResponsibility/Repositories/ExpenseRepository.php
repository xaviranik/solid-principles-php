<?php


namespace SRP\Repositories;

/**
 * Class ExpenseRepository
 * @package SRP\Repositories
 */
class ExpenseRepository
{
    /**
     * @param $startDate
     * @param $endDate
     * @return float
     */
    public function between($startDate, $endDate)
    {
        // Let's assume a sql query runs here and returns expense amount between $startDate and $endDate
        return 100.58;
    }
}