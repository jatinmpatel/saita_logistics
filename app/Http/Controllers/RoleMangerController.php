<?php

namespace App\Http\Controllers;

use App\Models\RoleManger;
use Illuminate\Http\Request;

class RoleMangerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RoleManger::get();
        return view('role.index',compact('data'));
    }

    
    public function store(Request $request)
    {
        $data = [
            'name'=> isset($request->name) ? $request->name : NULL,
        ];

        if($request->id > 0){
            $result = RoleManger::where('id',$request->id)->update($data);
            $msg = 'Recorded updated successfully!';
        }else{
            $result = RoleManger::create($data);
            $msg = 'Recorded added successfully!';
        }
        
        if($result){
            return redirect()->back()->with('success',$msg);
        }else{
            return redirect()->back()->with('error','Something went wrong please try again!');
        }
    }

    public function delete($id)
    {
        RoleManger::where('id',$id)->delete();
        $msg = 'Recorded deleted successfully!';
        return redirect('role-manager')->with('success',$msg);
    }
}
