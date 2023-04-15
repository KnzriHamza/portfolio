<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;


class FrontPage extends Controller
{
    public function DisplayInfo()
    {
        $data = Freelancer::find(1);
        //dd($data);
        return view('index',compact('data'));
    }
}
