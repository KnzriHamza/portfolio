<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;

class FreelancerController extends Controller
{
    public function DisplayInfo()
    {
        $data = Freelancer::find(1);
        //dd($data);
        return view('backend.userView',compact('data'));
    }


    public function SaveInfo(Request $request)
    {
        $data = Freelancer::find(1);
        $data->name = $request->name;
        $data->postStatus = $request->postStatus;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->birthdate = $request->birthdate;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->language = $request->language;
        $data->experience = $request->experience;


        $data->save();

        $notification = array(
            'message' =>'Student Was Successfully Inserted',
            'alert-type'=>'success'
        );
        return redirect()->route('list.user')->with($notification);
    }
}
