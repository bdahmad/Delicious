<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Basic;
use App\Models\Contact;
use App\Models\Social;
use Carbon\Carbon;
use File;


class ManageController extends Controller
{
    public function basicIndex(){
        $all = Basic::where('basic_id',1)->firstOrFail();
        return view('admin.basic.edit',compact('all'));
    }

    public function basicUpdate(Request $request){
        $company = $request->basic_company_name;
        $title = $request->basic_title;
        if ($request->hasFile('basic_logo')) {
           
            $image = $request->file('basic_logo');
            $imageName = 'logo_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 200)->save('uploads/manage/' . $imageName);
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
            'basic_logo' => $imageName,
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
    public function contactUpdate(Request $request){
        $update= Contact::where('contact_id',1)->update([
            'contact_phone1' => $request->contact_phone1,
            'contact_phone2' => $request->contact_phone2,
            'contact_phone3' => $request->contact_phone3,
            'contact_phone4' => $request->contact_phone4,
            'contact_email1' => $request->contact_email1,
            'contact_email2' => $request->contact_email2,
            'contact_email3' => $request->contact_email3,
            'contact_email4' => $request->contact_email4,
            'contact_address1' => $request->contact_address1,
            'contact_address2' => $request->contact_address2,
            'contact_address3' => $request->contact_address3,
            'contact_address4' => $request->contact_address4,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($update){
            return redirect()->back();
        }
    }



    public function socialIndex(){
        $all = Social::where('social_id',1)->firstOrFail();
        return view('admin.social.edit',compact('all'));
    }
    public function socialUpdate(Request $request){
        $update = Social::where('social_id',1)->update([
            'social_facebook'=> $request->social_facebook ,
            'social_linkedin'=> $request->social_linkedin ,
            'social_instagram'=> $request->social_instagram ,
            'social_twitter'=> $request->social_twitter ,
            'social_wechat'=> $request->social_wechat ,
            'social_whatsapp'=> $request->social_whatsapp ,
            'social_discord'=> $request->social_discord ,
            'social_telegram'=> $request->social_telegram ,
            'social_github'=> $request->social_github ,
            'social_reddit'=> $request->social_reddit ,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if($update){
            return redirect()->back();
        }
    }

}
