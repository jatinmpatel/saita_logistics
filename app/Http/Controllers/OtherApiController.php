<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Reason;
use Auth;
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
        $country = Country::select('*')->get();
        $data = ['country'=>$country];
        return view('other.country_master',$data);
    }
    public function countrySave(Request $request){
        $checkCountry = Country::where('country_name',$request->country_name)
        ->where('country_code',$request->country_code)->first();
        if($checkCountry){
            return redirect()->back()->with('error','This name is already exist!');
        }
        $insData = [
            'country_name'=>isset($request->country_name) ? $request->country_name : NULL, 
            'country_code'=>isset($request->country_code) ? $request->country_code : NULL,
            'isActive'=>1,
        ];
        $result = Country::create($insData);
        if($result){
            return redirect()->back()->with('success','country added successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }
    public function countryUpdate(Request $request){
        $updateData = [
            'country_name'=>isset($request->country_name) ? $request->country_name : NULL, 
            'country_code'=>isset($request->country_code) ? $request->country_code : NULL,
        ];
        $result = Country::where('id',$request->id)->update($updateData);
        if($result){
            return redirect()->back()->with('success','Record updated successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }  
    }
    public function getCountryList(Type $var = null)
    {
        if ($request->ajax()) {
            $columns = array(
               0 => 'country_code',
               
           );
           $data = Country::select('*')
               ->orderBy($columns[$request->order[0]['column']], $request->order[0]['dir']);
          
           // print_r($data);exit;
           return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('name', function($row){
                  return $row->Country_code;
               })
               ->addColumn('email', function($row){
                  return 0;
               })
               ->addColumn('action', function($row){
                   $btn = '';
                   return $btn;
               })
               ->rawColumns(['name','action'])
               ->make(true);
       }
    }
    public function countryDelete($id){
        $result = Country::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with('success','Record deleted successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }
    public function reasonMaster(Request $request){
        $reason = Reason::join('users','users.id','=','reason.created_by')
        ->select('reason.*','users.name')->get();
        $total = $reason->count();
        $data = ['reason'=>$reason,'total'=>$total];
        return view('other.reason_master',$data);
    }
    public function reasonSave(Request $request){
        $user = Auth::user();
        $insData=[
            'reason_code'=>isset($request->reason_code) ? $request->reason_code : NULL,
            'reason_text'=>isset($request->reason_text) ? $request->reason_text : NULL,
            'isActive'=>isset($request->isActive) ? $request->isActive : 0,
            'created_by'=>$user->id,
        ];
        $result = Reason::create($insData);
        if($result){
            return redirect()->back()->with('success','Record added successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }
    public function reasonUpdate(Request $request){
        $id = $request->id;
        $updateData=[
            'reason_code'=>isset($request->reason_code) ? $request->reason_code : NULL,
            'reason_text'=>isset($request->reason_text) ? $request->reason_text : NULL,
            'isActive'=>isset($request->isActive) ? $request->isActive : 0,
        ];
        $result = Reason::where('id',$id)->update($updateData);
        if($result){
            return redirect()->back()->with('success','Record updated successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }
    public function reasonDelete($id){
        $result = Reason::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with('success','Record deleted successfully!');
        }else{
           return redirect()->back()->with('error','Something went wrong please try again!');
        }
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
