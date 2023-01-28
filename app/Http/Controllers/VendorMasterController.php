<?php

namespace App\Http\Controllers;

use App\Models\VendorMaster;
use Illuminate\Http\Request;

class VendorMasterController extends Controller
{
    public function vendorManifest()
    {
        return view('vendor_module.vendor_manifest');
    }

    public function vendorMaster()
    {
        return view('vendor_module.vendor_master');
    }

    public function vendorAccountDetail()
    {
        return view('vendor_module.vendor_account_detail');
    }
}
