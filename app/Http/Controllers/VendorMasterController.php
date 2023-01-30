<?php

namespace App\Http\Controllers;

use App\Models\VendorMaster;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class VendorMasterController extends Controller
{
    public function vendorManifest()
    {
        return view('vendor_module.vendor_manifest');
    }

    public function vendorMaster()
    {
        $country = Country::where('isActive',1)->get();
        $vendor = vendorMaster::select('vendor_masters.*','country.country_name')->leftjoin('country','country.id','=','vendor_masters.country_id')->get();
        $data = ['country'=>$country,'vendor'=>$vendor];
        return view('vendor_module.vendor_master',$data);
    }

    public function vendormasterSave(Request $request){
        $this->validate($request,[
           'vendor_code'=>'required',
           'email'=>'required|email',
           'name'=>'required',
           'mobile_no'=>'required',
           'address1'=>'required',
           'address2'=>'required',
           'city_id'=>'required',
           'state_id'=>'required',
           'country_id'=>'required',
           'pincode'=>'required',
           'gstin'=>'required',
        ]);
        $insData = [
            'vendor_code'=>isset($request->vendor_code) ? $request->vendor_code : NULL,
            'email'=>isset($request->email) ? $request->email : NULL,
            'name'=>isset($request->name) ? $request->name : NULL,
            'mobile_no'=>isset($request->mobile_no) ? $request->mobile_no : NULL,
            'address1'=>isset($request->address1) ? $request->address1 : NULL,
            'address2'=>isset($request->address2) ? $request->address2 : NULL,
            'pincode'=>isset($request->pincode) ? $request->pincode : NULL,
            'city_id'=>isset($request->city_id) ? $request->city_id : NULL,
            'state_id'=>isset($request->state_id) ? $request->state_id : NULL,
            'country_id'=>isset($request->country_id) ? $request->country_id : NULL,
            'gstin'=>isset($request->gstin) ? $request->gstin : NULL,
            'isActive'=>isset($request->isActive) ? $request->isActive : 0,
            'selfVendor'=>isset($request->selfVendor) ? $request->selfVendor : 0, 
            'third_party_tracking'=>isset($request->third_party_tracking) ? $request->third_party_tracking : 0, 
        ];
        $result= vendorMaster::create($insData);
        if($result){
            return redirect()->back()->with('success','Vendor created successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }  

    }
    public function vendorAccountDetail()
    {
        return view('vendor_module.vendor_account_detail');
    }
}
