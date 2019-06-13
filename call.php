<?php declare(strict_types=1);

require_once('vendor/autoload.php');

$twilio = new \Twilio\Rest\Client(
    'ACb877821242bbaedc246328ca0a8c3fc6',
    getenv('TWILIO_TOKEN')
);