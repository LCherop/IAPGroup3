<?php

$fname=$_POST['fname'];
$message=$_POST['message'];
$pnumber=$_POST['pnumber'];

// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '\vendor\autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC1eceb48f3be8e31af759ff5d570d8633';
$token = '85c70b54f74707e2594b33c2a0142d49';
$client = new Client($sid, $token);
$twilio_number='+18058745520';
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $pnumber,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => $twilio_number,
        // the body of the text message you'd like to send
        'body' => "Hey".$fname.",".$message,
    ]
);
?>