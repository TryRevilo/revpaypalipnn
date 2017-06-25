<?php 

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

if ( !isset( $_GET[ 'success' ], $_GET[ 'paymentId' ], $_GET[ 'payerID' ]) )
{
	die();
}

if ( (bool) $_GET[ 'success' ] === false )
{
	die();
}

echo 'Payment Made. Thanks!';