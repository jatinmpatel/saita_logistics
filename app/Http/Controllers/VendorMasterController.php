<?php

namespace App\Http\Controllers;

use App\Models\VendorMaster;
use App\Models\VendorAccountDetail; 
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
        $vendorMaster = vendorMaster::select('id','name')->where('isActive',1)->get();
        $country = Country::where('isActive',1)->get();
        $vendorAccount = VendorAccountDetail::select('vendor_account_details.*','vendor_masters.name as vendor_name')
        ->join('vendor_masters','vendor_account_details.vendor_id','=','vendor_masters.id')
        ->get();
        $data = ['vendorMaster'=>$vendorMaster,'country'=>$country,'vendorAccount'=>$vendorAccount];
        return view('vendor_module.vendor_account_detail',$data);
    }
    public function vendorAcccountSave(Request $request){
        $insData= [
            'vendor_id'=>isset($request->vendor_id) ? $request->vendor_id : 0,
            'token'=>isset($request->token) ? $request->token : NULL,
            'meter_no'=>isset($request->meter_no) ? $request->meter_no : NULL,
            'account_no'=>isset($request->account_no) ? $request->account_no : NULL,
            'password'=>isset($request->password) ? $request->password : NULL,
            'account_no1'=>isset($request->account_no1) ? $request->account_no1 : NULL,
            'environment'=>isset($request->environment) ? $request->environment : NULL,
            'isActive'=>isset($request->isActive) ? $request->isActive : 0,
            'company_name'=>isset($request->company_name) ? $request->company_name : NULL,
            'gst_no'=>isset($request->gst_no) ? $request->gst_no : NULL,
            'pincode'=>isset($request->pincode) ? $request->pincode : NULL,
            'contact_person'=>isset($request->contact_person) ? $request->contact_person : NULL,
            'address_1'=>isset($request->address_1) ? $request->address_1 : NULL,
            'city_id'=>isset($request->city_id) ? $request->city_id : NULL,
            'email_id'=>isset($request->email_id) ? $request->email_id : NULL,
            'address_2'=>isset($request->address_2) ? $request->address_2 : NULL,
            'state_id'=>isset($request->state_id) ? $request->state_id : NULL,
            'phone'=>isset($request->phone) ? $request->phone : NULL,
            'address_3'=>isset($request->address_3) ? $request->address_3 : NULL,
            'country_id'=>isset($request->country_id) ? $request->country_id : NULL,
            'pickup_address'=>isset($request->pickup_address) ? $request->pickup_address : NULL,
        ];
        $result = VendorAccountDetail::create($insData);
        if($result){
            return redirect()->route('vendor.account.detail')->with('success','Vendor account details created successfully!');
        }else{
            return redirect()->route('vendor.account.detail')->with('success','Something went wrong please try again!');
        }
    }
}
