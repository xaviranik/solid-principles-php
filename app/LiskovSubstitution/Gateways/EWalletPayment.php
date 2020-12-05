<?php


namespace LSP\Gateways;


use LSP\Contracts\FraudCheckerInterface;
use LSP\Contracts\PaymentProcessorInterface;
use LSP\Contracts\StandardPaymentInterface;

/**
 * Class EWalletPayment
 *
 * @package LSP\Gateways
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