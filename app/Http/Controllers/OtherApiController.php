<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherApiController extends Controller
{
    public function printAWBDocument(Request $request){
        return view('other.print_awb_document');
    }

    public function shipmentMovement(Request $request){
        return view('other.shipment_movement');
    }

    public function podUpload(Request $request){
        return view('other.pod_upload');
    }

    public function countryMaster(Request $request){
        return view('other.country_master');
    }

    public function reasonMaster(Request $request){
        return view('other.reason_master');
    }

    public function createInvoice(Request $request){
        return view('other.create_invoice');
    }

    public function invoice(Request $request){
        return view('other.invoice');
    }

    public function vendorApiConfiguration(Request $request){
        return view('other.vendor_api_config');
    }
}
