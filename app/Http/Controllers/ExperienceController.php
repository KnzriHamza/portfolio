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
}
