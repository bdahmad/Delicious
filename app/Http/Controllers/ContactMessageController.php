<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ContactMessage;


class ContactMessageController extends Controller
{
    
    public function index(){
        $all = ContactMessage::where('con_msg_status',1)->get();
        return view('admin.message.all',compact('all'));
    }
    public function insert(Request $request){
        $insert = ContactMessage::insert([
            'con_msg_name' => $request->con_msg_name,
            'con_msg_email' => $request->con_msg_email,
            'con_msg_subject' => $request->con_msg_subject,
            'con_msg_message' => $request->con_msg_message,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect()->back();
        }
    }


}
