<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function DisplayInfo()
    {
        $data = Project::all();
        //dd($data);
        return view('backend.projectsView',compact('data'));
    }



    public function SaveInfo(Request $request)
    {
            $data = new Project();
            $data->projectName = $request->projectName;
            $data->projectDescription = $request->projectDescription;
            $data->githubLink = $request->githubLink;
            $data->liveLink = $request->liveLink;
            $data->save();




            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.projects')->with($notification);
        }
}
