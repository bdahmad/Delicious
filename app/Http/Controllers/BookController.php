<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookTable;
use Carbon\Carbon;
use Auth;


class BookController extends Controller
{
    public function index(){
        $all = BookTable::where('book_status',1)->get();
        return view('admin.book.all',compact('all'));
    }
    public function insert(Request $request){

        $insert  = BookTable::insert([
            'book_name' => $request->book_name,
            'book_email' => $request->book_email,
            'book_phone' => $request->book_phone,
            'book_date' => $request->book_date,
            'book_time' => $request->book_time,
            'book_people' => $request->book_people,
            'book_message' => $request->book_message,
            'book_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            
        ]);
        if($insert){
            return redirect()->back();
        }
    }
}
