<?php

namespace App\Http\Controllers;

use App\Models\VendorMaster;
use App\Models\VendorAccountDetail; 
use App\Models\VendorServiceType;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class VendorMasterController extends Controller
{

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

        if($request->vendor_id == 0){
            $result= vendorMaster::create($insData);

            if(isset($request->vendor) && count($request->vendor) > 0){
                foreach($request->vendor as $vendorItem){
                    if(isset($vendorItem['service']) && !empty($vendorItem['service'])){
                        $saveVendor[] = [
                            'vendor_id' => $result->id,
                            'forwarder' => isset($vendorItem['forwarder']) ? $vendorItem['forwarder']: NULL,
                            'service_name' => isset($vendorItem['service']) ? $vendorItem['service']: NULL,
                            'packagin_group' => isset($vendorItem['packaging']) ? $vendorItem['packaging']: NULL,
                            'mode' => isset($vendorItem['mode']) ? $vendorItem['mode']: NULL,
                            'isActive' => isset($vendorItem['status']) ? $vendorItem['status']: 0,
                            'created_at' => date('Y-m-d h:s:i'),
                            'updated_at' => date('Y-m-d h:s:i'),
                        ];
                    }   
                }
                if(count($saveVendor) > 0){
                    VendorServiceType::insert($saveVendor);
                }
            }    
        }else{
            $result= vendorMaster::where('id',$request->vendor_id)->update($insData);

            VendorServiceType::where('vendor_id',$request->vendor_id)->delete();

            if(isset($request->vendor) && count($request->vendor) > 0){
                $saveVendor = [];
                foreach($request->vendor as $vendorItem){
                    if(isset($vendorItem['id']) && $vendorItem['id'] > 0){
                        if(isset($vendorItem['service']) && !empty($vendorItem['service'])){
                            $updateVendor = [
                                // 'vendor_id' => $request->vendor_id,
                                'forwarder' => isset($vendorItem['forwarder']) ? $vendorItem['forwarder']: NULL,
                                'service_name' => isset($vendorItem['service']) ? $vendorItem['service']: NULL,
                                'packagin_group' => isset($vendorItem['packaging']) ? $vendorItem['packaging']: NULL,
                                'mode' => isset($vendorItem['mode']) ? $vendorItem['mode']: NULL,
                                'isActive' => isset($vendorItem['status']) ? $vendorItem['status']: 0,
                                'updated_at' => date('Y-m-d h:s:i'),
                            ];
                            VendorServiceType::where('id',$vendorItem['id'])->restore();
                            VendorServiceType::where('id',$vendorItem['id'])->update($updateVendor);
                        }
                    }else{
                        if(isset($vendorItem['service']) && !empty($vendorItem['service'])){
                            $saveVendor[] = [
                                'vendor_id' => $request->vendor_id,
                                'forwarder' => isset($vendorItem['forwarder']) ? $vendorItem['forwarder']: NULL,
                                'service_name' => isset($vendorItem['service']) ? $vendorItem['service']: NULL,
                                'packagin_group' => isset($vendorItem['packaging']) ? $vendorItem['packaging']: NULL,
                                'mode' => isset($vendorItem['mode']) ? $vendorItem['mode']: NULL,
                                'isActive' => isset($vendorItem['status']) ? $vendorItem['status']: 0,
                                'created_at' => date('Y-m-d h:s:i'),
                                'updated_at' => date('Y-m-d h:s:i'),
                            ];
                        }
                    }   
                }
                if(count($saveVendor) > 0){
                    VendorServiceType::insert($saveVendor);
                }
            }
        }
        
        
        if($result){
            return redirect()->back()->with('success','Vendor created successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }  

    }

    public function getVendorService(Request $request){
        $data = VendorServiceType::where('vendor_id',$request->id)->get();
        return json_encode($data);
    }

    public function vendorMasterDelete($id){
        // dd($id);
        $result = vendorMaster::where('id',$id)->delete();
        if($result){
            VendorServiceType::where('vendor_id',$id)->delete();
            return redirect()->back()->with('success','Record deleted successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }

    public function vendorAccountDetail(Request $request)
    {
         $editId = $request->query('id', 0);
        $vendorMaster = vendorMaster::select('id','name')->where('isActive',1)->get();
        $country = Country::where('isActive',1)->get();
        
        $vendorAccount = VendorAccountDetail::select('vendor_account_details.*','vendor_masters.name as vendor_name')
        ->join('vendor_masters','vendor_account_details.vendor_id','=','vendor_masters.id')->whereNull('vendor_masters.deleted_at')->get();
        $editDetails = NULL;
        if($editId!=0){
            $editId;$editDetails = VendorAccountDetail::select('*')->whereNull('deleted_at')->where('id',$editId)->first();
        }
        
        $data = ['vendorMaster'=>$vendorMaster,'country'=>$country,'vendorAccount'=>$vendorAccount,'editDetails'=>$editDetails];
        return view('vendor_module.vendor_account_detail',$data);
    }
    public function vendorAcccountSave(Request $request){
       if($request->id!=0){
            $VendorAccountDetail = VendorAccountDetail::find($request->id);
            $msg = 'Vendor account details updated successfully!';
       }else{
            $VendorAccountDetail = new VendorAccountDetail;
            $msg = 'Vendor account details created successfully!';
       }
       $VendorAccountDetail->vendor_id = isset($request->vendor_id) ? $request->vendor_id : 0;
       $VendorAccountDetail->token = isset($request->token) ? $request->token : NULL;
       $VendorAccountDetail->meter_no = isset($request->meter_no) ? $request->meter_no : NULL;
       $VendorAccountDetail->account_no = isset($request->account_no) ? $request->account_no : NULL;
       $VendorAccountDetail->password = isset($request->password) ? $request->password : NULL;
       $VendorAccountDetail->account_no1 = isset($request->account_no1) ? $request->account_no1 : NULL;
       $VendorAccountDetail->environment = isset($request->environment) ? $request->environment : NULL;
       $VendorAccountDetail->isActive = isset($request->isActive) ? $request->isActive : 0;
       $VendorAccountDetail->company_name = isset($request->company_name) ? $request->company_name : NULL;
       $VendorAccountDetail->gst_no = isset($request->gst_no) ? $request->gst_no : NULL;
       $VendorAccountDetail->pincode = isset($request->pincode) ? $request->pincode : NULL;
       $VendorAccountDetail->contact_person = isset($request->contact_person) ? $request->contact_person : NULL;
       $VendorAccountDetail->address_1 = isset($request->address_1) ? $request->address_1 : NULL;
       $VendorAccountDetail->city_id = isset($request->city_id) ? $request->city_id : NULL;
       $VendorAccountDetail->email_id = isset($request->email_id) ? $request->email_id : NULL;
       $VendorAccountDetail->address_2 = isset($request->address_2) ? $request->address_2 : NULL;
       $VendorAccountDetail->state_id = isset($request->state_id) ? $request->state_id : NULL;
       $VendorAccountDetail->phone = isset($request->phone) ? $request->phone : NULL;
       $VendorAccountDetail->address_3 = isset($request->address_3) ? $request->address_3 : NULL;
       $VendorAccountDetail->country_id = isset($request->country_id) ? $request->country_id : NULL;
       $VendorAccountDetail->pickup_address = isset($request->pickup_address) ? $request->pickup_address : NULL;
       $result = $VendorAccountDetail->save();
        if($result){
            return redirect()->back()->with('success',$msg);
        }else{
            return redirect()->route()->with('error','Something went wrong please try again!');
        }
    }
    public function vendorAcccountDetailDelete($id){
        $result = VendorAccountDetail::where('id',$id)->update(['deleted_at'=>NOW()]);
        if($result){
            return redirect()->back()->with('success','Record deleted successfully!');
        }else{
            return redirect()->route()->with('error','Something went wrong please try again!');
        }
    }
}
