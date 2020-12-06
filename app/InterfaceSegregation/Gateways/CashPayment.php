<?php


namespace ISP\Gateways;


use ISP\Contracts\PaymentProcessorInterface;
use ISP\Contracts\StandardPaymentInterface;

/**
 * Class CashPayment
 *
 * @package ISP\Gateways
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