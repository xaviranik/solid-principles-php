<?php


namespace LSP\Gateways;


use LSP\Contracts\CardValidatorInterface;
use LSP\Contracts\FraudCheckerInterface;
use LSP\Contracts\PaymentProcessorInterface;
use LSP\Contracts\StandardPaymentInterface;

/**
 * Class CardPayment
 *
 * @package LSP\Gateways
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