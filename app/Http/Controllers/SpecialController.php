<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special;
use Auth;
use Carbon\Carbon;
use Image;
class SpecialController extends Controller
{
    public function index(){
        $all = Special::where('special_status',1)->get();
        return view('admin.special.menu.all',compact('all'));
    }
     public function add(){
        return view('admin.special.menu.add');
    }
    public function insert(Request $request){
        if($request->hasFile('special_image')){
            $image = $request->file('special_image');
            $imageName = "special_".time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(306,314)->save('uploads/special/'.$imageName);
        }
        $insert = Special::insert([
            'special_name' => $request->special_name,
            'special_category' => $request->special_category,
            'special_details' => $request->special_details,
            'special_image' => $imageName,
            'special_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
