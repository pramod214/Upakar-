<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Support\Facades\Input;
use Image;
use File;
use Session;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $about = About::first();
        return view('admin.about.index',compact('about'));
    }
    public function about_update(Request $request,$id)
    {
        $about = About::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(1200, 999999) . '.' . $extension;
                $large_image_path = 'public/adminpanel/uploads/about/' . $filename;
                Image::make($image_tmp)->save($large_image_path);
                $about->image = $filename;
            }

                $about->name = ucwords(strtolower($data['name']));
                $about->details = $data['details'];
                $about->save();
                Session::flash('success', 'About Updated');
                return redirect()->back();
            }
        }
    }

