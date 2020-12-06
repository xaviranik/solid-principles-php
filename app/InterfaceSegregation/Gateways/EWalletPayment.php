<?php


namespace ISP\Gateways;


use ISP\Contracts\FraudCheckerInterface;
use ISP\Contracts\PaymentProcessorInterface;
use ISP\Contracts\StandardPaymentInterface;

/**
 * Class EWalletPayment
 *
 * @package ISP\Gateways
 */
class EWalletPayment implements StandardPaymentInterface, FraudCheckerInterface, PaymentProcessorInterface
{

    public function pay()
    {
        echo "Paying via EWallet";
    }

    public function fraudCheck()
    {
        echo "Checking for Fraud";
    }

    public function processPayment()
    {
        $this->fraudCheck();
        $this->pay();
    }

}