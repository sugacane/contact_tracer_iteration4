<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Log;

class LogController extends Controller
{
    //

    public function store(Request $request)
    {
        $log = new Log();
        $log->anonymous_id = $request->input('anonymous_id');
        $log->location_id = 1;
        $log->save();
        return redirect('/person/log');
           // ->with('message','Successfully Logged a Person to a Location');
        
    }
}
