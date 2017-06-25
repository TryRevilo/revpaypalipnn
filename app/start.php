<?php

require 'PayPal/autoload.php';

define('SITE_URL', 'http://mmacadvocates.com/ipn');

$paypal = new \PayPal\Rest\ApiContext (
	new \PayPal\Auth\OAuthTokenCredential (
		'AcVTJUpFWp-pqT3EqtlKJaj-5j8m5X-NrfEzkOB6NZGIH8lQpQ2IIvDTeuP4CphQLruHDKIYx20L1U2G',
		'JW1WyPYRIpeJz63QiaOHptTqKtUlEkezXiaBIrZvLn3rsbECXUqgdik7MPfMF'
		)
	);

?>