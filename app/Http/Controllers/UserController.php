<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Image;


class UserController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function profile(){
        return view('user.profile');
    }
    public function update(Request $request)
    {
        $id = $request->id;
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imageName = 'user_'.time().'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(120,120)->save('uploads/user/'. $imageName);
        }
        $update = User::where("status",'active')->where('id',$id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'photo' => $imageName,
        ]);
        if($update){
            return redirect()->back();
        }
    }
}
