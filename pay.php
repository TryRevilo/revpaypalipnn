<?php 

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

$paymentId = $_GET[ 'paymentId' ];
$payerId = $_GET[ 'payerID' ];

$payment = Payment :: get( $paymentId, $paypal );

$execute = new PaymentExecution();
$execute -> setPayerId( $paymentId );

try {
	$result = $payment -> execute( $execute, $paypal );
} catch ( Execution $e ) {
	die( $e );
}

echo 'Payment Made. Thanks!';