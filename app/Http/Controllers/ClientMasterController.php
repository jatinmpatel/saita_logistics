<?php

namespace App\Http\Controllers;

use App\Models\ClientMaster;
use Illuminate\Http\Request;

class ClientMasterController extends Controller
{
    public function clientMaster(Request $request){
        return view('client.client_master');
    }
}