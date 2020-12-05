<?php


namespace LSP\Gateways;


use LSP\Contracts\PaymentProcessorInterface;
use LSP\Contracts\StandardPaymentInterface;

/**
 * Class CashPayment
 *
 * @package LSP\Gateways
 */
class CashPayment implements StandardPaymentInterface, PaymentProcessorInterface
{

    public function pay()
    {
        echo "Paying via Cash";
    }

    public function processPayment()
    {
        $this->pay();
    }

}