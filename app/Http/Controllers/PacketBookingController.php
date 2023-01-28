<?php

namespace App\Http\Controllers;

use App\Models\PacketBooking;
use Illuminate\Http\Request;

class PacketBookingController extends Controller
{
    public function packetBooking(Request $request){
        return view('packet.packet_booking');
    }

    public function importPacket(Request $request){
        return view('packet.import_booking');
    }

    public function bookingReport(Request $request){
        return view('packet.booking_report');
    }

    public function manifestReport(Request $request){
        return view('packet.manifest_report');
    }

    public function deliveredReport(Request $request){
        return view('packet.delivered_report');
    }
    
}
