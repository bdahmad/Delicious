<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;
use Auth;
use Carbon\Carbon;
use Image;

class ChefController extends Controller
{
    public function index(){
        $all = Chef::where('chef_status',1)->get();
        return view('admin.chef.all',compact('all'));
    }
     public function add(){
        return view('admin.chef.add');
    }
    public function insert(Request $request){
        if($request->hasFile('chef_image')){
            $image = $request->file('chef_image');
            $imageName = "chef_".time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(416,416)->save('uploads/chef/'.$imageName);
        }
        $insert = Chef::insert([
            'chef_name' => $request->chef_name,
            'chef_designation' => $request->chef_designation,
            'chef_facebook' => $request->chef_facebook,
            'chef_twitter' => $request->chef_twitter,
            'chef_instagram' => $request->chef_instagram,
            'chef_linkedin' => $request->chef_linkedin,
            'chef_image' => $imageName,
            'chef_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
