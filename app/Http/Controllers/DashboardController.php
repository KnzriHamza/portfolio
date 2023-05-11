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
use Auth;

class DashboardController extends Controller
{
    public function DisplayInfo()
    {
        $informationData = Freelancer::find(1);
        $linksData = Link::all();
        $linksData = $linksData->count();
        $projectsData = Project::all();
        $projectsData = $projectsData->count();
        $hobbiesData = Hobby::all();
        $galleryElement = GalleryElement::all();
        $galleryElement = $galleryElement->count();
        $experienceData = Experience::all();
        $toolData = Tool::where('toolStatus', 1)
                    ->get();
        $toolData = $toolData->count();
        $socialData = Social::where('SocialStatus', 1)
                    ->get();
        
        return view('dashboard',compact(['projectsData','informationData', 'experienceData','toolData','socialData','hobbiesData', 'linksData', 'galleryElement']));
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('index');
    }
}
