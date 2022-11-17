<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FishingController extends Controller
{
    public function index(Request $request){
        $sessionId   = $request->get('session_id');
        $serviceCode = $request->get('serviceCode');
        $phoneNumber = $request->get('phoneNumber');
        $text        = $request->get('text');
        // use explode to split the string text response from Africa's talking gateway into an array.
        $ussd_string_exploded = explode("*", $text);
        // Get ussd menu level number from the gateway
        $level = count($ussd_string_exploded);

    }
}
