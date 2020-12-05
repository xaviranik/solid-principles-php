<?php

require_once('../../vendor/autoload.php');

$expense_reporter = new \SRP\ExpenseReporter(new \SRP\Repositories\ExpenseRepository);

// We are getting the report in HTML format
echo $expense_reporter->between('10-02-2020', '11-03-2020', new \SRP\Outputs\HtmlOutput);

// We can change the formatter and get the output in JSON
echo $expense_reporter->between('10-02-2020', '11-03-2020', new \SRP\Outputs\JsonOutput);