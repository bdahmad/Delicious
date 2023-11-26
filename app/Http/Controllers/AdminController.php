<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    public function index(){
        
        return view('admin.home.home');
    }
    public function userIndex(){
        $all = User::where('status','active')->get();
        return view('admin.user.all',compact('all'));
    }
    public function userAdd(){
        return view('admin.user.add');
    }
    public function userInsert(Request $request){
        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = 'user_'.time().'.'.$image->getClientOriginalExtension();
            dd($imageName);
            Image::make($image)->resize(120,120)->save('uploads/'. $imageName);
        }
        $insert = User::insertGetId([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'role'=>$request->role,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'photo'=> $imageName,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        

        if($insert){
            return redirect()->route('admin.user');
        }
    }
 
    public function userView($id){
        $all = User::where('status','active')->where('id',$id)->firstOrFail();
        return view('admin.user.view',compact('all'));
    }
    public function userEdit($id){
        return view('admin.user.edit');
    }
    public function adminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
