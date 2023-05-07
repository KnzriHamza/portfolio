<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\Experience;
use App\Models\Tool;
use App\Models\Social;
use App\Models\Project;
use App\Models\Hobby;
use App\Models\GalleryElement;
use App\Models\Link;


class FrontPage extends Controller
{
    public function DisplayInfo()
    {
        $informationData = Freelancer::find(1);
        $linksData = Link::all();
        $projectsData = Project::all();
        $hobbiesData = Hobby::all();
        $galleryElement = GalleryElement::all();
        //dd($data);
        $experienceData = Experience::all();
        $toolData = Tool::where('toolStatus', 1)
                    ->get();
        ;
        $socialData = Social::where('SocialStatus', 1)
                    ->get();
        ;
        return view('index',compact(['projectsData','informationData', 'experienceData','toolData','socialData','hobbiesData', 'linksData', 'galleryElement']));
    }
}
