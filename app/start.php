<?php

require 'PayPal/autoload.php';

define('SITE_URL', 'https://revpaypalipnnoncomposer.herokuapp.com');

$paypal = new \PayPal\Rest\ApiContext (
	new \PayPal\Auth\OAuthTokenCredential (
		'AayMa0gEpwAPLurJpGHRdTYOiMabSrZfm3Epf_Eu8BGtpjaizr6LizsgzMwvNRk6O_KBiNAKRPib9FT-',
		'EN57E2IPhtRoFRs0QiVs5Z8IM4nGAonCiobqKo9mxr8OQdpOYAXq4lpIvxVdbySUcqYYb53tW2WNO5Ki'
		)
	);

?>