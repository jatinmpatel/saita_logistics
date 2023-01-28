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
}
