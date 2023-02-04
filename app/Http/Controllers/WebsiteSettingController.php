<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    
    public function websiteSetting()
    {
        $website = WebsiteSetting::select('*')->get()->pluck(['data_value','data_key'])->toArray();
        // dd($website);
        $data = ['website'=>$website];
        return view('website_setting.web_setting',$data);
    }
    public function websiteSettingSave(Request $request){
       
        $allData = $request->data;
        if(count($allData)>0){
            foreach($allData as $key =>$value){
                $checkData = WebsiteSetting::select('id')->where('data_key',$key)->first();
                if($checkData){
                    $updateData = [
                        'data_value'=>$value
                    ];
                    WebsiteSetting::where('id',$checkData->id)->update($updateData);
                }else{
                    $createData=[
                        'data_key'=>$key,
                        'data_value'=>$value,
                    ];
                    WebsiteSetting::create($createData);
                    // dd($insData);
                }
            }
        }
        return redirect()->back()->with('success','Website details updated successfully!');
    }
}
