<?php
    /* Send an SMS using Twilio. You can run this file 3 different ways:
     *
     * - Save it as sendnotifications.php and at the command line, run 
     *        php sendnotifications.php
     *
     * - Upload it to a web host and load mywebhost.com/sendnotifications.php 
     *   in a web browser.
     * - Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *   directory to the folder containing this file, and load 
     *   localhost:8888/sendnotifications.php in a web browser.
     */
     // Step 1: Download the Twilio-PHP library from twilio.com/docs/libraries, 
    // and move it into the folder containing this file.
    require "Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "ACbe31875399134239abe65e3cc0c2a8b6";
    $AuthToken = "e6d2e126c3c6d96f0e46e80f3beadb0a";
 
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
  
//    $number = "+19498122626";
    $number = $_POST["number"]; 
    $sms = $client->account->messages->sendMessage(

    // Step 6: Change the 'From' number below to be a valid Twilio number 
    // that you've purchased, or the (deprecated) Sandbox number
        "9492008968", 

        // the number we are sending to - Any phone number
        $number,

        // the sms body
        "test download link"
    );


    // Display a confirmation message on the screen
    echo "Sent message to $number";
?>