<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpContoller extends Controller
{
    //
    function index(){
        $response = Http::get('https://dummyjson.com/users/1');
        $response = $response->body();
        return view('http', ['response' => json_decode($response)]);
    }
}
