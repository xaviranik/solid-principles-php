<?php

require_once('../../vendor/autoload.php');

$cashPayment = new \LSP\Gateways\CashPayment();
$eWalletPayment = new \LSP\Gateways\EWalletPayment();
$cardPayment = new \LSP\Gateways\CardPayment();

// We can pay via any payment methods
$paymentGateway = new \LSP\PaymentGateway();
$paymentGateway->handlePayment($cashPayment);
$paymentGateway->handlePayment($eWalletPayment);
$paymentGateway->handlePayment($cardPayment);