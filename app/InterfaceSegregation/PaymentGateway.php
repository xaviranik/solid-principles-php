<?php


namespace ISP;

use ISP\Contracts\PaymentProcessorInterface;

/**
 * Class PaymentGateway
 *
 * @package ISP
 */
class PaymentGateway
{

    /**
     * @param  \ISP\Contracts\PaymentProcessorInterface  $gateway
     */
    public function handlePayment(PaymentProcessorInterface $gateway)
    {
        $gateway->processPayment();
    }

}