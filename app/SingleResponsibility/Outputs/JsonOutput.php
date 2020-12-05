<?php


namespace SRP\Outputs;


use SRP\ExpenseOutputInterface;

/**
 * Class JsonOutput
 * @package SRP\Outputs
 */
class JsonOutput implements ExpenseOutputInterface
{

    /**
     * @param $expense
     * @return false|string
     */
    public function output($expense)
    {
        return json_encode([
            'data' => $expense,
            'time' => time(),
        ]);
    }
}