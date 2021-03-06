<?php 

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

if ( !isset( $_GET[ 'success' ], $_GET[ 'paymentId' ], $_GET[ 'PayerID' ]) )
{
	echo "Fail 1";
	die();
}

if ( (bool) $_GET[ 'success' ] === false )
{
	echo "Fail 2";
	die();
}

$paymentId = $_GET[ 'paymentId' ];
$payerId = $_GET[ 'PayerID' ];

$payment = Payment :: get( $paymentId, $paypal );

$execute = new PaymentExecution();
$execute -> setPayerId( $payerId );

try {
	$result = $payment -> execute( $execute, $paypal );
} catch ( Execution $e ) {
	die( $e );
}

echo 'Payment Made. Thanks!';

?>