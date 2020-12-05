<?php


namespace LSP;

use LSP\Contracts\PaymentProcessorInterface;

/**
 * Class PaymentGateway
 *
 * @package LSP
 */
class PaymentGateway
{

    /**
     * @param  \LSP\Contracts\PaymentProcessorInterface  $gateway
     */
    public function handlePayment(PaymentProcessorInterface $gateway)
    {
        $gateway->processPayment();
    }

}