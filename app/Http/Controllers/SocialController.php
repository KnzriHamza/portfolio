<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function DisplayInfo()
    {
        $socialData = Social::all();
        return view('backend.socialView',compact('socialData'));
    }

    public function SaveInfo(Request $request)
    {
        dd($request);
        $selectedSocials = $request->selected;
        $SocialData = Social::all();
            foreach ($SocialData as $baseSocial) {

                    if(in_array($baseSocial->socialName, $selectedSocials)){
                        $baseSocial->socialStatus = 1;
                        $baseSocial->save();
                    }else{
                        $baseSocial->socialStatus = 0;
                        $baseSocial->save();
                    }
                }


            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.socials')->with($notification);
        }
}
