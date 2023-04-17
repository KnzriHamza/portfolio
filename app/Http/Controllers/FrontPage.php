<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\Experience;
use App\Models\Tool;
use App\Models\Social;


class FrontPage extends Controller
{
    public function DisplayInfo()
    {
        $informationData = Freelancer::find(1);
        //dd($data);
        $experienceData = Experience::all();
        $toolData = Tool::where('toolStatus', 1)
                    ->get();
        ;
        $socialData = Social::where('SocialStatus', 1)
                    ->get();
        ;
        return view('index',compact(['informationData', 'experienceData','toolData','socialData']));
    }
}
