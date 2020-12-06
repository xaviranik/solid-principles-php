<?php


namespace ISP\Gateways;


use ISP\Contracts\CardValidatorInterface;
use ISP\Contracts\FraudCheckerInterface;
use ISP\Contracts\PaymentProcessorInterface;
use ISP\Contracts\StandardPaymentInterface;

/**
 * Class CardPayment
 *
 * @package ISP\Gateways
 */
class CardPayment implements StandardPaymentInterface, FraudCheckerInterface, CardValidatorInterface, PaymentProcessorInterface
{

    public function pay()
    {
        echo "Paying via Card";
    }

    public function fraudCheck()
    {
        echo "Checking for Fraud";
    }

    public function checkCardValidity()
    {
        echo "Checking for Card Validity";
    }

    public function processPayment()
    {
        $this->fraudCheck();
        $this->checkCardValidity();
        $this->pay();
    }

}