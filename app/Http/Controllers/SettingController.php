<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;


class SettingController extends Controller
{
    public function DisplayInfo()
    {
        $settings = Setting::find(1);


        return view('backend.SettingsView',compact('settings'));
    }

    public function SaveInfo(Request $request)
    {
        $settings = Setting::find(1);
        //dd($request);
        if($request->set1 == "on")
        {
            
            $settings->underMaintnance = true;
        }else{
            $settings->underMaintnance = false;
        }

        if($request->set6 == "on")
        {
            $settings->setting6 = true;
        }else{
            $settings->setting6 = false;
        }

        if($request->set3 == "on")
        {
            $settings->setting2 = true;
        }else{
            $settings->setting2 = false;
        }

        if($request->set4 == "on")
        {
            $settings->setting3 = true;
        }else{
            $settings->setting3 = false;
        }

        if($request->set5 == "on")
        {
            $settings->setting5 = true;
        }else{
            $settings->setting5 = false;
        }
        
        if($request->set6 == "on")
        {
            $settings->setting6 = true;
        }else{
            $settings->setting6 = false;
        }
        
        $settings->save();
        $notification = array(
            'message' => 'Student Was Successfully Inserted',
            'alert-type' => 'success'
        );
        return redirect()->route('settings')->with($notification);
        
    }
}
