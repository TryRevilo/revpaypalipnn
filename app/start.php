<?php

require 'PayPal/autoload.php';

define('SITE_URL', 'https://revpaypalipnnoncomposer.herokuapp.com');

$paypal = new \PayPal\Rest\ApiContext (
	new \PayPal\Auth\OAuthTokenCredential (
		'AcVTJUpFWp-pqT3EqtlKJaj-5j8m5X-NrfEzkOB6NZGIH8lQpQ2IIvDTeuP4CphQLruHDKIYx20L1U2G',
		'EAmdP9zTdwen1ehb4p-JW1WyPYRIpeJz63QiaOHptTqKtUlEkezXiaBIrZvLn3rsbECXUqgdik7MPfMF'
		)
	);

?>