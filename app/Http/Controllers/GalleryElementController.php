<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryElement;
use Illuminate\Support\Facades\Storage;



class GalleryElementController extends Controller
{
    public function DisplayInfo()
    {
        $data = GalleryElement::all();
        //dd($data);
        return view('backend.galleryView',compact('data'));
    }


    public function SaveInfo(Request $request)
    {
        $data = new GalleryElement();
        $data->photoDescription = $request->photoDescription;
            
            $imageName = time().'.'.$request->photoFile->extension();  
                
            $image_path = $request->photoFile->move(public_path('images'),$imageName);
            $data->photoUrl = $imageName;
            $data->save();
            //dd($tool,in_array($tool, $toolData) );
            $notification = array(
                'message' => 'Student Was Successfully Inserted',
                'alert-type' => 'success'
            );
            return redirect()->route('list.gallery')->with($notification);
        }

}
