<?php


namespace ISP\Contracts;


interface PaymentProcessorInterface
{
    public function processPayment();
}