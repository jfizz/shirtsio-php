<?php

// Tested on PHP 5.2, 5.3

// This snippet (and some of the curl code) due to the Facebook SDK.
$timezone = "Asia/Shanghai";
if(function_exists('date_default_timezone_set')) {
	date_default_timezone_set($timezone);
}
if (!function_exists('curl_init')) {
	throw new Exception('Shirtsio needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
	throw new Exception('Shirtsio needs the JSON PHP extension.');
}

// Shirtsio singleton
require(dirname(__FILE__) . '/Shirtsio/Shirtsio.php');


// Errors
require(dirname(__FILE__) . '/Shirtsio/Error.php');
require(dirname(__FILE__) . '/Shirtsio/ApiError.php');
require(dirname(__FILE__) . '/Shirtsio/ApiConnectionError.php');
require(dirname(__FILE__) . '/Shirtsio/AuthenticationError.php');
require(dirname(__FILE__) . '/Shirtsio/InvalidRequestError.php');

// Plumbing
require(dirname(__FILE__) . '/Shirtsio/ApiRequestor.php');
require(dirname(__FILE__) . '/Shirtsio/ApiResource.php');

// Shirts.io API Resources
require(dirname(__FILE__) . '/Shirtsio/Quote.php');
require(dirname(__FILE__) . '/Shirtsio/Payment.php');
require(dirname(__FILE__) . '/Shirtsio/Order.php');
require(dirname(__FILE__) . '/Shirtsio/Products.php');
require(dirname(__FILE__) . '/Shirtsio/Webhook.php');
