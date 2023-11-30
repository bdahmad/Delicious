<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\SpecialCategory;
use Carbon\Carbon;

class SpecialCategoryController extends Controller
{
    public function index(){
        $all = SpecialCategory::where('special_category_status',1)->get();
        return view('admin.special.category.all',compact('all'));
    }
    public function add(){
        return view('admin.special.category.add');
    }
    public function insert(Request $request){
        $insert = SpecialCategory::insert([
            'special_category_name' => $request->special_category_name,
            'special_category_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
