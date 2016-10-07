<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="UXBOT";
$projectEmail="rsimms@sapient.com";
$projectPhoneNumber="+442033895446";


// Twilio API credentials
$accountSid = "ACd736c0ef81367c553aabf72478f393d7";
$authToken = "318d339e9034e5ab8c85d10b4b21b590"; //
$twilioPhoneNumber = "+442033895446";
$siteURL="http://pacific-spire-28951.herokuapp.com/";


// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = "UXBOT";
$slackBotName = "Stanley"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "eu-mm-auto-dub-01-c.cleardb.net";
$dbName = "heroku_2b2d6dab632392e";
$dbUserName = "b4cf6bfab04592";
$dbPassword = "ac50efce";
$dbTable = "";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n 
$automatedResponseTeamSleeping ="n"; // options: y | n 
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>
