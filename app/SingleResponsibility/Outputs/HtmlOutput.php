<?php


namespace SRP\Outputs;


use SRP\ExpenseOutputInterface;

class HtmlOutput implements ExpenseOutputInterface
{
    /**
     * @param $expense
     * @return string
     */
    public function output($expense)
    {
        return "<h1>Expense: $expense</h1>";
    }
}