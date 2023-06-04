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
        if ($request->firstName != null) {
            $data->firstName = $request->firstName;
        }
        if ($request->lastName != null) {
            $data->lastName = $request->lastName;
        }
        if ($request->postStatus != null) {
            $data->postStatus = $request->postStatus;
        }
        if ($request->email != null) {
            $data->email = $request->email;
        }
        if ($request->mobile != null) {
            $data->mobile = $request->mobile;
        }
        if ($request->birthdate != null) {
            $data->birthdate = $request->birthdate;
        }
        if ($request->city != null) {
            $data->city = $request->city;
        }
        if ($request->country != null) {
            $data->country = $request->country;
        }
        if ($request->language != null) {
            $data->language = $request->language;
        }
        if ($request->experience != null) {
            $data->experience = $request->experience;
        }

        $data->save();

        $notification = array(
            'message' =>'Student Was Successfully Inserted',
            'alert-type'=>'success'
        );
        return redirect()->route('list.user')->with($notification);
    }
}
