<?php

namespace App\Http\Controllers;

use App\Models\ZoneMaster;
use Illuminate\Http\Request;

class ZoneMasterController extends Controller
{
    public function zoneMaster(Request $request){
        return view('zone.index');
    }
    
}
