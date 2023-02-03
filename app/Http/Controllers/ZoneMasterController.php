<?php

namespace App\Http\Controllers;

use App\Models\ZoneMaster;
use App\Models\VendorMaster;
use Illuminate\Http\Request;

class ZoneMasterController extends Controller
{
    public function zoneMaster(Request $request){

        $vendorMaster = VendorMaster::select('id','name')->get();
        $editId = $request->query('id', 0);
        $editZone = NULL;
        if($editId!=0){
            $editZone = ZoneMaster::find($request->id);
        }
        $zoneMaster = ZoneMaster::select('zone_masters.*','vendor_masters.name')->join('vendor_masters','zone_masters.vendor_id','=','vendor_masters.id')
        ->whereNull('zone_masters.deleted_at')->get();
        $data = ['vendorMaster'=>$vendorMaster,'editZone'=>$editZone,'zoneMaster'=>$zoneMaster];
        
        return view('zone.index',$data);
    }
    public function zoneMasterSave(Request $request){
        if($request->id!=0){
            $msg = 'Zone master updated successfully!';
            $zoneMaster = ZoneMaster::find($request->id);
        }else{
            $msg = 'Zone master added successfully!';
            $zoneMaster = new ZoneMaster;    
        }
        $zoneMaster->vendor_id =    isset($request->vendor_id) ? $request->vendor_id : 0;
        $zoneMaster->service_name = isset($request->service_name) ? $request->service_name : NULL;
        $zoneMaster->zone_name =    isset($request->zone_name) ? $request->zone_name : NULL;
        $zoneMaster->zone_type =    isset($request->zone_type) ? $request->zone_type : NULL;
        $zoneMaster->effctv_from =    isset($request->effctv_from) ? $request->effctv_from : NULL;
        $result = $zoneMaster->save();
        if($result){
            return redirect()->back()->with('success',$msg);
        }else{
            return redirect()->route()->with('error','Something went wrong please try again!');
        }
    }
    
}
