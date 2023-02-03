<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    
    public function websiteSetting()
    {
        return view('website_setting.web_setting');
    }
    public function websiteSettingSave(Request $request){
        // dd($request);
        $allData = $request->data;
        $createData = [];
        if(count($allData)>0){
            foreach($allData as $key =>$value){
                $checkData = WebsiteSetting::select('id')->where('data_key',$key)->first();
                if($checkData){
                    $updateData = [
                        'data_value'=>$value
                    ];
                    WebsiteSetting::where('id',$checkData->id)->update($updateData);
                }else{
                    $createData[] = [
                        'data_key'=>$key,
                        'data_value'=>$value,
                    ];
                    // dd($insData);
                }
            }
            if(count($createData)>0){
                WebsiteSetting::create($insData)
;            }
            
        }
    }
}
