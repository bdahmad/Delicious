<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Auth;

class EventController extends Controller
{
    public function index(){
        $all = Event::where('event_status',1)->get();
        return view('admin.event.all',compact('all'));
    }
    public function add(){
        return view('admin.event.add');
    }
    public function insert(Request $request){
        $this->validate($request,[
            'event_title' => 'required',
            'event_price' => 'required',
            'event_description1' => 'required',
            'event_offer1' => 'required',
            'event_offer2' => 'required',
            'event_offer3' => 'required',
            'event_description2' => 'required',
        ]);
        
        if($request->hasFile('event_image')){
            $image = $request->file('event_image');
            $imageName = "event_".time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(636,424)->save('uploads/event/'.$imageName);
        }
        $insert = Event::insert([
            'event_title' => $request->event_title,
            'event_price' => $request->event_price,
            'event_description1' => $request->event_description1,
            'event_offer1' => $request->event_offer1,
            'event_offer2' => $request->event_offer2,
            'event_offer3' => $request->event_offer3,
            'event_description2' => $request->event_description2,
            'event_image' => $imageName,
            'event_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),

        ]);
        if($insert){
            return redirect()->back();
        }


    }
}
