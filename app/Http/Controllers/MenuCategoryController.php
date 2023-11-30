<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;
use Auth;
use Carbon\Carbon;
use Str;


class MenuCategoryController extends Controller
{
    public function index(){
        $all = MenuCategory::where('menu_category_status',1)->get();
        return view('admin.menu.category.all',compact('all'));
    }
    public function add(){
        return view('admin.menu.category.add');
    }
    public function insert(Request $request){
        $slug = Str::lower(str_replace(' ','-',$request->menu_category_name));
        $insert = MenuCategory::insert([
            'menu_category_name' => $request->menu_category_name,
            'menu_category_slug' => $slug,
            'menu_category_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
