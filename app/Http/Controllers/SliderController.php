<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use Auth;
use Carbon\Carbon;

class SliderController extends Controller
{
    public function index(){
        $all = Slider::where('slider_status',1)->get();
        return view('admin.slider.all',compact('all'));
    }
    public function add(){
        return view('admin.slider.add');
    }
    public function insert(Request $request){
        if($request->hasFile('slider_image')){
            $image = $request->file('slider_image');
            $imageName = 'banner_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1500,844)->save('uploads/banner/'.$imageName);
        }
        $insert = Slider::insert([
            'slider_title' => $request->slider_title,
            'slider_description' => $request->slider_description,
            'slider_image'=> $imageName,
            'slider_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
