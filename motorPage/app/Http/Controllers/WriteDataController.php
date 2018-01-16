<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteDataController extends Controller
{
    public function postData(Request $request) {
        // Do your stuff with the request..
        
        return response()->json(['return' => 'some data']);
    }

}
