<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function manageUser(Request $request){
        $user_id = $request->query('id',0);
        $user = null;
        if($user_id!=0){
            $user = User::select('id','name','mobile_no','email','doj','status')->where('id',$user_id)->first();    
        }
        $users = User::select('id','name','mobile_no','email','doj','status')->where('id','!=',1)->get();
        return view('user.manage_user',compact('users','user'));
    }
    public function userMasterSave(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'mobile_no'=>'required:min:10',
            'password'=>'required',
            'doj'=>'required',
            'email'=>'required|email|unique:users',
         ]);
       
        $user = new User;
        $user->name = isset($request->name) ? $request->name : NULL;
        $user->email  = isset($request->email ) ? $request->email : NULL;
        $user->mobile_no = isset($request->mobile_no) ? $request->mobile_no : NULL;
        $user->doj = isset($request->doj) ? $request->doj : NULL;
        $user->password = isset($request->password) ? Hash::make($request->password) : NULL;
        $user->status = isset($request->status) ? $request->status : 0;
        $result = $user->save();
        if($result){
            $user->user_code = sprintf("%05d",$user->id);
             $user->save();
            return redirect()->back()->with('success','User created successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }  
    }
    public function userMasterUpdate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'mobile_no'=>'required:min:10',
            'doj'=>'required',
         ]);
       
        $user = User::find($request->id);
        $user->name = isset($request->name) ? $request->name : NULL;
        $user->mobile_no = isset($request->mobile_no) ? $request->mobile_no : NULL;
        $user->doj = isset($request->doj) ? $request->doj : NULL;
        if(isset($request->password)){
            $user->password = isset($request->password) ? Hash::make($request->password) : NULL;
        }
        $user->status = isset($request->status) ? $request->status : 0;
        $result = $user->save();
        if($result){
            return redirect()->back()->with('success','User updated successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }  
    }
    public function userMasterDelete($id){
        $result = User::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with('success','User deleted successfully!');
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }  
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
