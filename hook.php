<?php declare(strict_types=1);
session_start();
require_once('vendor/autoload.php');

$queueNo = $_SESSION['queueNo'] ?? 0;
$queueNo++;
$_SESSION['queueNo'] = $queueNo;

// $phoneNumber = '+46790646071';

$messagingResponse = new \Twilio\TwiML\MessagingResponse();
$messagingResponse->message('You are person number ' . $queueNo);

echo $messagingResponse;