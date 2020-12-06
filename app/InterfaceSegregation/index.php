<?php

require_once('../../vendor/autoload.php');

$cashPayment = new \ISP\Gateways\CashPayment();
$eWalletPayment = new \ISP\Gateways\EWalletPayment();
$cardPayment = new \ISP\Gateways\CardPayment();

// We can pay via any payment methods
$paymentGateway = new \ISP\PaymentGateway();
$paymentGateway->handlePayment($cashPayment);
$paymentGateway->handlePayment($eWalletPayment);
$paymentGateway->handlePayment($cardPayment);