<?php 

require "twilio-php/Services/Twilio.php";  

// set your AccountSid and AuthToken from www.twilio.com/user/account

$AccountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXX"; 

$AuthToken = "2bXXXXXXXXXXXXXXXXXXXXXXXXX"; 

$client = new Services_Twilio($AccountSid, $AuthToken); 

try { 

    $number=$_POST['Number']; 

    $msg=$_POST['Message']; 

    $message = $client->account->messages->create(array( 

        "From" => "+9745529554", // Paste your phone number here(Refer Step 4) 

        "To" => $number, 

        "Body" => $msg, 

    )); 

} catch (Services_Twilio_RestException $e) { 

    echo $e->getMessage(); 

} 

?> 
