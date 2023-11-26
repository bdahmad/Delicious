<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;
use App\Models\Contact;
use App\Models\Social;


class ManageController extends Controller
{
    public function basicIndex(){

        return view('admin.basic.all');
    }
    public function contactIndex(){
        return view('admin.contact.all');
    }
    public function socialIndex(){
        return view('admin.social.all');
    }

}
