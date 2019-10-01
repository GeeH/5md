<?php declare(strict_types=1);

require_once('vendor/autoload.php');

$twilio = new \Twilio\Rest\Client(
    'ACb877821242bbaedc246328ca0a8c3fc6',
    getenv('TWILIO_TOKEN')
);

$number = '+46790646071';
$fromNumber = '+447723477864';

$messages = $twilio->messages->read(['to' => $number]);
$collection = new \Tightenco\Collect\Support\Collection($messages);

$collection = $collection->unique(function($call) {
    return $call->from;
});

foreach($collection as $item) {
    echo ("Adding in caller..." . PHP_EOL);
    $twilio->calls->create($item->from, $fromNumber, [
       'url' => 'https://geeh.ngrok.io/call.xml'
    ]);
}