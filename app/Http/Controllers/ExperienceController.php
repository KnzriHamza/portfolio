<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;


class ExperienceController extends Controller
{
    public function DisplayInfo()
    {
        $data = Experience::all();
        //dd($data);
        return view('backend.experienceView',compact('data'));
    }



    public function SaveInfo(Request $request)
    {
            $data = new Experience();
            $data->year = $request->year;
            $data->companyName = $request->companyName;
            $data->description = $request->description;
            $data->save();




            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.experience')->with($notification);
        }
}
