<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $all = Event::where('event_status',1)->get();
        return view('admin.event.all',compact('all'));
    }
}
