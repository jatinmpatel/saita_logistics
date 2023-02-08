<?php

namespace App\Http\Controllers;

use App\Models\ClientMaster;
use App\Models\ClientOtherCharges;
use App\Models\ClientContactPerson;
use App\Models\Country;
use Illuminate\Http\Request;

class ClientMasterController extends Controller
{
    public function clientMaster(Request $request){
        $editId = $request->query('id',0);
        $country = Country::select('*')->where('isActive',1)->get();
        $clientMaster = ClientMaster::join('country','country.id','=','client_masters.country_id')
        ->select('client_masters.*','country.country_name')->whereNull('deleted_at');
        $totalClient = $clientMaster->count();
        $clientMaster =$clientMaster->paginate(env('page_default_val'));
        $client=null;$OtherCharges=null;
        if($editId!=0){
            $client = ClientMaster::select('*')->where('id',$editId)->first();
            $OtherCharges = ClientOtherCharges::select('*')->where('client_id',$editId)->get();
        }
        return view('client.client_master',compact('country','clientMaster','client','OtherCharges','totalClient'));
    }
    public function clientMasterSave(Request $request){

        $this->validate($request,[
            'country_name'=>'required',
            'client_name'=>'required',
            'sales_person'=>'required',
            'client'=>'required',
            'address1'=>'required',
            'state_id'=>'required',
            'email_id'=>'required',
            'country_id'=>'required',
            'pincode'=>'required',
            'city_id'=>'required',
            
         ]);
         
        $id = $request->id;
        $insData = [
        'client_code'=>isset($request->client_code) ? $request->client_code : null,
        'client_name'=>isset($request->client_name) ? $request->client_name : null,
        'sales_person'=>isset($request->sales_person) ? $request->sales_person : null,
        'client'=>isset($request->client) ? $request->client : null,
        'address1'=>isset($request->address1) ? $request->address1 : null,
        'state_id'=>isset($request->state_id) ? $request->state_id : null,
        'email_id'=>isset($request->email_id) ? $request->email_id : null,
        'address2'=>isset($request->address2) ? $request->address2 : null,
        'country_id'=>isset($request->country_id) ? $request->country_id : null,
        'pan'=>isset($request->pan) ? $request->pan : null,
        'pincode'=>isset($request->pincode) ? $request->pincode : null,
        'mobile_no'=>isset($request->mobile_no) ? $request->mobile_no : null,
        'gstin'=>isset($request->gstin) ? $request->gstin : null,
        'city_id'=>isset($request->city_id) ? $request->city_id : null,
        'office_phone_no'=>isset($request->office_phone_no) ? $request->office_phone_no : null,
        'iec'=>isset($request->iec) ? $request->iec : null,
        'aadhaar_no'=>isset($request->aadhaar_no) ? $request->aadhaar_no : null,
        'bill_payment_type'=>isset($request->bill_payment_type) ? $request->bill_payment_type : null,
        'bill_credit_amount'=>isset($request->bill_credit_amount) ? $request->bill_credit_amount : null,
        'bill_isActive'=>isset($request->bill_isActive) ? $request->bill_isActive : 0,
        'bill_tax_applicable'=>isset($request->bill_tax_applicable) ? $request->bill_tax_applicable : 0,
        'bill_vol'=>isset($request->bill_vol) ? $request->bill_vol : null,
        'bill_currency'=>isset($request->bill_currency) ? $request->bill_currency : null,
        'bill_self_service'=>isset($request->bill_self_service) ? $request->bill_self_service : 0,
        'bill_mail_notification'=>isset($request->bill_mail_notification) ? $request->bill_mail_notification : 0,
        'bill_fuel_applicable'=>isset($request->bill_fuel_applicable) ? $request->bill_fuel_applicable : 0,
        'bill_enable_fedex_tpc'=>isset($request->bill_enable_fedex_tpc) ? $request->bill_enable_fedex_tpc : 0,
        'bill_generate_label'=>isset($request->bill_generate_label) ? $request->bill_generate_label : 0,
        'bill_no_invoice_amount'=>isset($request->bill_no_invoice_amount) ? $request->bill_no_invoice_amount : 0,
        ];
        if($id==0){
            $result = ClientMaster::create($insData);
            if(isset($request->Other) && count($request->Other) > 0){
                foreach($request->Other as $otherItem){
                    $saveVendor[] = [
                    'client_id' => $result->id,
                    'charge_type' => isset($otherItem['charge_type']) ? $otherItem['charge_type']: NULL,
                    'type' => isset($otherItem['type']) ? $otherItem['type']: NULL,
                    'amount_per' => isset($otherItem['amount_per']) ? $otherItem['amount_per']: 0,
                    'created_at' => date('Y-m-d h:s:i'),
                    'updated_at' => date('Y-m-d h:s:i'),
                    ];   
                }
                ClientOtherCharges::insert($saveVendor);
            }
            
            if(isset($request->contact) && count($request->contact) > 0){
                foreach($request->contact as $contactItem){
                    $saveContact[] = [
                    'client_id' => $result->id,
                    'contact_person_name' => isset($contactItem['contact_person_name']) ? $contactItem['contact_person_name']: NULL,
                    'mobile_no' => isset($contactItem['mobile_no']) ? $contactItem['mobile_no']: NULL,
                    'email_id' => isset($contactItem['email_id']) ? $contactItem['email_id']: null,
                    'created_at' => date('Y-m-d h:s:i'),
                    'updated_at' => date('Y-m-d h:s:i'),
                    ];   
                }
                ClientContactPerson::insert($saveContact);
            }
            if($result){
                return redirect()->back()->with('success','Client created successfully!');
            }else{
                return redirect()->back()->with('error','Something went wrong please try again!');
            }
        }else{
           
            $result = ClientMaster::where('id',$id)->update($insData);
            ClientOtherCharges::where('client_id',$id)->delete();
            // dd($request->Other);
            if(isset($request->Other) && count($request->Other) > 0){
                foreach($request->Other as $otherItem){
              
                    if(isset($otherItem['id']) && $otherItem['id'] > 0){
                        if(!empty($otherItem['amount_per'])){
                            $updateOther= [
                                // 'client_id' => $result->id,
                                'charge_type' => isset($otherItem['charge_type']) ? $otherItem['charge_type']: NULL,
                                'type' => isset($otherItem['type']) ? $otherItem['type']: NULL,
                                'amount_per' => isset($otherItem['amount_per']) ? $otherItem['amount_per']: 0,
                                'created_at' => date('Y-m-d h:s:i'),
                                'updated_at' => date('Y-m-d h:s:i'),
                                ];   
                            ClientOtherCharges::where('id',$otherItem['id'])->restore();
                            ClientOtherCharges::where('id',$otherItem['id'])->update($updateOther);   
                        }
                        // echo 'up;';
                    }else{
                        if(!empty($otherItem['amount_per'])){
                            $saveOtherData = [
                                'client_id' => $id,
                                'charge_type' => isset($otherItem['charge_type']) ? $otherItem['charge_type']: NULL,
                                'type' => isset($otherItem['type']) ? $otherItem['type']: NULL,
                                'amount_per' => isset($otherItem['amount_per']) ? $otherItem['amount_per']: 0,
                                'created_at' => date('Y-m-d h:s:i'),
                                'updated_at' => date('Y-m-d h:s:i'),
                                ];   

                            ClientOtherCharges::create($saveOtherData);
                        }
                        // dd   ('ins');
                        // echo 'ins';
                   }
                }

                // print_r($otherItem['id']); 

            }
            // exit;
            if($result){
                return redirect()->back()->with('success','Client created successfully!');
            }else{
                return redirect()->back()->with('error','Something went wrong please try again!');
            }
        }
    }
    public function clientMasterDelete($id){
        $result =ClientMaster::where('id',$id)->update(['deleted_at'=>NOW()]);
        if($result){
            return redirect()->back()->with('success','Client deleted successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }
}