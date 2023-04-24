<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\Experience;
use App\Models\Tool;
use App\Models\Social;
use App\Models\Project;
use App\Models\Hobby;


class FrontPage extends Controller
{
    public function DisplayInfo()
    {
        $informationData = Freelancer::find(1);
        $projectsData = Project::all();
        $hobbiesData = Hobby::all();
        //dd($data);
        $experienceData = Experience::all();
        $toolData = Tool::where('toolStatus', 1)
                    ->get();
        ;
        $socialData = Social::where('SocialStatus', 1)
                    ->get();
        ;
        return view('index',compact(['projectsData','informationData', 'experienceData','toolData','socialData','hobbiesData']));
    }
}
