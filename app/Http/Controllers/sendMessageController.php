<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//require_once('helper.php');

class sendMessageController extends Controller
{
    
    public function sendMessage(Request $request){
        $msg = $request->input('msg_body');

        $helper_class = new \helper();

        $helper_class->send_message($msg);
    }
}
