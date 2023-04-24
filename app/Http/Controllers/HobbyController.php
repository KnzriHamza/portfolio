<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;


class HobbyController extends Controller
{
    public function getRandomColor() {
        $colors = ['lime','amber','sky','red','green','purple','blue','teal'];
        $randomColor = $colors[array_rand($colors)];
        return $randomColor;
    }



    public function DisplayInfo()
    {
        $data = Hobby::all();
        //dd($data);
        return view('backend.hobbiesView',compact('data'));
    }



    public function SaveInfo(Request $request)
    {
            $data = new Hobby();
            $dataArray = explode(', ', $request->hobbyName);
            //dd(explode(',', $request->hobbyName));
            if(count($dataArray) > 1)
            {
                foreach($dataArray as $hobby)
                {
                    $data = new Hobby();
                    $data->hobbyName = $hobby;
                    $data->hobbyColor = $this->getRandomColor();
                    $data->save();
                }

            }
            else
            {
                $data = new Hobby();
                $data->hobbyName = $request->hobbyName;
                $data->hobbyColor = $this->getRandomColor();
                $data->save();
            }




            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.hobbies')->with($notification);
        }
}
