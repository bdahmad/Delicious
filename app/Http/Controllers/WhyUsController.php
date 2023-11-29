<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyUs;
use Auth;
use Carbon\Carbon;

class WhyUsController extends Controller
{
    public function index(){
        $all = WhyUs::where('why_status',1)->get();
        return view('admin.why.all',compact('all'));
    }
    public function add(){
        return view('admin.why.add');
    }
    public function insert(Request $request){
        $insert = WhyUs::insert([
            'why_title' => $request->why_title,
            'why_description' => $request->why_description,
            'why_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }

}
