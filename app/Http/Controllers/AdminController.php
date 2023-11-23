<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
        $insert = User::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'role'=>$request->role,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->route('admin.user');
        }
    }
 
    public function adminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
