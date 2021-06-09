<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iot_1 extends Controller
{
    public function index(){
        $url = 'https://api.thingspeak.com/channels/1327310/feeds.json';
        $response = file_get_contents($url);
        $channels = collect(json_decode($response)->channel);
        $feeds = collect(json_decode($response)->feeds);
        return view('iot.index',['channels'=>$channels,'feeds'=>$feeds]);
    }

    public function rest_api(){
        $take1 = $_GET['api_key'];
        $take2 = $_GET['value'];
        echo "api key adalah " . $take1 . "</br> Value ny adalah " . $take2;
        return view('update.index');
    }

}
