<?php


namespace SRP;

use SRP\Repositories\ExpenseRepository;

/**
 * Class ExpenseReporter
 * @package SRP
 * Reports the expenses
 */
class ExpenseReporter
{
    /**
     * @var ExpenseRepository
     */
    private $expenseRepository;

    /**
     * ExpenseReporter constructor.
     * @param  ExpenseRepository  $expenseRepository
     */
    public function __construct(ExpenseRepository $expenseRepository)
    {
        $this->expenseRepository = $expenseRepository;
    }

    /**
     * @param $startDate
     * @param $endDate
     * @param  ExpenseOutputInterface  $formatter
     * @return mixed
     */
    public function between($startDate, $endDate, ExpenseOutputInterface $formatter)
    {
        $expenseAmount = $this->expenseRepository->between($startDate, $endDate);
        return $formatter->output($expenseAmount);
    }
}