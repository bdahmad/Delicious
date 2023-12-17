<?php

namespace App\Http\Controllers;

// use App\Http\Requests\Reqe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Image;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        return view('admin.profile.profile');
    }

    /**
     * Update the user's profile information.
     */
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
