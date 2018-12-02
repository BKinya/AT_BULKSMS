<?php

use AfricasTalking\SDK\AfricasTalking;

class helper{
    
    
    function send_message($msg){
        $username   = "sandbox";
        $apikey     = "16c81789b8f9a36aa906af674a8d3d95d8af2365d0374d24020e39c7cc3119a4";

        $AT = new AfricasTalkingGateway($username, $apikey);

        //recipients
        $recipients = "+254796403972, +254725075994, +254720850358";

        //message
        $message    = $msg;

        try {
            // Thats it, hit send and we'll take care of the rest
            //SENDING MESSAGES IS ACHIEVED BY CALLING SENDMESSAGE() METHOD ON GATEWAY OBJECT
            $result = $AT->sendMessage($recipients, $message);
        
            
            print_r($result);
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
}
}

    
?>