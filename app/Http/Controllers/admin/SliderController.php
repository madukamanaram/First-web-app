<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('admin_panel.home.slider');
    }

    // validation

    public function storeslider(Request $request){
        $validatedData = $request-> validate([
            'top_heading' => 'required|string|max : 100000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif| max : 100000',
            'Explore_more_link'=> 'nullable|url',
        ]);
        // move our data to a server
        if ($request->hasFile('image')){
            $imagepath= $request->file('image')->store('slides','public');
        }
        // Slider::create([
        //     'top_heading'=> $validatedData['top_heading'],
        //     'image_link'=> $imagepath,
        //     'Explore_more_link'=> $validatedData['Explore_more_link']

        // ]);
        // return redirect()->back()-> with('success','Slide added successfuly');

    }
}