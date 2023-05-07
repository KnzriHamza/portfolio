<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function DisplayInfo()
    {
        $data = Link::all();
        //dd($data);
        return view('backend.linksView',compact('data'));
    }



    public function SaveInfo(Request $request)
    {
            $data = new Link();
            $data->linkName = $request->linkName;
            $data->linkUrl = $request->linkUrl;
            $data->save();
            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.links')->with($notification);
        }
}
