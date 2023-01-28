<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manageUser(Request $request){
        return view('user.manage_user');
    }

    public function changePassword(Request $request){
        return view('user.change_password');
    }

    public function paymentHistory(Request $request){
        return view('user.payment_history');
    }

    public function userProfile(Request $request){
        return view('user.user_profile');
    }
}
