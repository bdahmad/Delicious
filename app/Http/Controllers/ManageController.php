<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;
use App\Models\Contact;
use App\Models\Social;


class ManageController extends Controller
{
    public function basicIndex(){
        $all = Basic::where('basic_id',1)->firstOrFail();
        return view('admin.basic.edit',compact('all'));
    }

    public function contactIndex(){
        $all = Contact::where('contact_id',1)->firstOrFail();
        return view('admin.contact.edit',compact('all'));
    }

    public function socialIndex(){
        $all = Social::where('social_id',1)->firstOrFail();
        return view('admin.social.edit',compact('all'));
    }

}
