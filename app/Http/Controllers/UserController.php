<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
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
        $user = Auth::user();
        return view('user.user_profile',compact('user'));
    }
    public function userProfileUpdate(Request $request){
        $user = Auth::user();
        $id = $user->id;
        $updateData=  [
            'address'=>isset($request->address) ? $request->address : NULL,          
        ];
        if($file = $request->hasFile('profile_pic')) {
            $destinationPath = 'logistics/user/';
            $profile_pic = public_path($destinationPath.$user->profile_pic);
            if (file_exists($profile_pic)) {
                @unlink($profile_pic);
            }
            // $myimage = $request->profile_pic->getClientOriginalName();
            $image_name = 'user_'.time().'.';
            $myimage = $image_name.$request->profile_pic->getClientOriginalExtension();
            $request->profile_pic->move(public_path($destinationPath), $myimage);
            $updateData['profile_pic'] = $myimage; 
        }
        $result = User::where('id',$id)->update($updateData);
        if($result){
            return redirect()->back()->with('success','Profile updated successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }
}
