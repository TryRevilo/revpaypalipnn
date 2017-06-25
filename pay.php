<?php 

use PayPal\Api\Payment;

require 'app/start.php';

if ( !isset( $_GET[ 'success' ], $_GET[ 'paymentId' ], $_GET[ 'payID' ]) )
{
	die();
}

if ( (bool) $_GET[ 'success' ] == false )
{
	die();
}

$paymentId = $_GET[ 'paymentId' ];
$payerId = $_GET[ 'payerID' ];

$payment = Payment :: get( $payment, $paypal );

$execute = new PaymentExecution();
$execute -> setPayerId( $paymentId );

try {
	$result = $payment -> execute( $execute, $paypal );
} catch ( Execution $e ) {
	die( $e );
}

echo 'Payment Made. Thanks!';