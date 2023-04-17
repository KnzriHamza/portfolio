<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolController extends Controller
{
    public function DisplayInfo()
    {
        $toolData = Tool::all();
        return view('backend.toolView',compact('toolData'));
    }

    public function SaveInfo(Request $request)
    {
        $selectedTools = $request->selected;
        $toolData = Tool::all();
            foreach ($toolData as $baseTool) {

                    if(in_array($baseTool->toolName, $selectedTools)){
                        $baseTool->toolStatus = 1;
                        $baseTool->save();
                    }else{
                        $baseTool->toolStatus = 0;
                        $baseTool->save();
                    }
                }


            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.tools')->with($notification);
        }


    }
