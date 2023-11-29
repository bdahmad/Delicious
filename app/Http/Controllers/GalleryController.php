<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Auth;
use Carbon\Carbon;
use Image;

class GalleryController extends Controller
{
    public function index(){
        $all = Gallery::where('gallery_status',1)->get();
        return view('admin.gallery.all',compact('all'));
    }
    public function add(){
        return view('admin.gallery.add');
    }
    public function insert(Request $request){

        if($request->hasFile('gallery_image')){
            $image = $request->file('gallery_image');
            $imageName = "gallery_".time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(800,600)->save('uploads/gallery/'.$imageName);
        }

        $insert = Gallery::insert([
            'gallery_image' => $imageName,
            'gallery_creator' => Auth::user()->id,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            return redirect()->back();
        }
    }
}
