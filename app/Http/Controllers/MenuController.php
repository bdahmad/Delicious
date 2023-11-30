<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Auth;
use Carbon\Carbon;


class MenuController extends Controller
{
    public function index(){
        $all = Menu::where('menu_status',1) -> get();
        return view('admin.menu.menu.all',compact('all'));
    }
    public function add(){
        return view('admin.menu.menu.add');
    }
    public function insert(Request $request){
        $insert = Menu::insert([
            'menu_name' => $request->menu_name,
            'menu_category' => $request->menu_category,
            'menu_price' => $request->menu_price,
            'menu_ingredients' => $request->menu_ingredients,
            'menu_creator'=>Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
