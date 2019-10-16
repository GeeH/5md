<?php declare(strict_types=1);
require_once('vendor/autoload.php');

$twilio = new \Twilio\Rest\Client(
    getenv('TWILIO_ACCOUNT_SID'),
    getenv('TWILIO_AUTH_TOKEN')
);
