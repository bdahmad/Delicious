<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Basic;
use App\Models\Contact;
use App\Models\Social;
use Carbon\Carbon;


class ManageController extends Controller
{
    public function basicIndex(){
        $all = Basic::where('basic_id',1)->firstOrFail();
        return view('admin.basic.edit',compact('all'));
    }
    public function basicUpdate(Request $request){
        $company = $request->basic_company_name;
        $title = $request->basic_title;
        if($request->hasFile('basic_logo')){
            $logoImg = $request->file('basic_logo');
            $logoName = "logo_".time().'.'.$logoImg->getClientOriginalExtension();
            Image::make($logoImg)->resize(120,120)->save('uploads/manage/'.$logoName);
        }
        if($request->hasFile('basic_footer_logo')){
            $flogoImg = $request->file('basic_footer_logo');
            $flogoName = "f_logo_".time().'.'.$flogoImg->getClientOriginalExtension();
            Image::make($flogoImg)->resize(120,120)->save('uploads/manage/'.$flogoName);
        }
        if($request->hasFile('basic_favicon')){
            $favImg = $request->file('basic_favicon');
            $favName = "fav_".time().'.'.$favImg->getClientOriginalExtension();
            Image::make($favImg)->resize(120,120)->save('uploads/manage/'.$favName);
        }
        $barStart = $request->bar_start;
        $barEnd = $request->bar_end;

        $timeStart = $request->time_start;
        $timeEnd = $request->time_end;
        $open_hour = $barStart.' - '.$barEnd.' : '.$timeStart.' - '.$timeEnd;

        $update = Basic::where('basic_id',1)->update([
            'basic_company_name' => $company,
            'basic_title' => $title,
            'basic_logo' => $logoName,
            'basic_footer_logo' => $flogoName,
            'basic_favicon' => $favName,
            'basic_open_hour' => $open_hour,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            return redirect()->back();
        }


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
