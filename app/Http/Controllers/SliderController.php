<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Slider;
use File;
use Illuminate\Support\Facades\Input;
use Image;
use Session;


class SliderController extends Controller
{
    public function slider()
    {
        $slider = Slider::first();
        return view('admin.slider.index',compact('slider'));
    }
    public function store(Request $request){
        $slider = new Slider();
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(1200, 999999) . '.' . $extension;
                $large_image_path = 'public/adminpanel/uploads/slider/' . $filename;
                Image::make($image_tmp)->save($large_image_path);
                $slider->image = $filename;
            }
            $slider->name = ucwords(strtolower($data['name']));
            $slider->body = ucwords($data['body']);
            $slider->save();
            Session::flash('success', 'Info Inserted Successfully');
            return redirect()->route('view');
        }
    }

    public function view(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.view',compact('sliders'));
    }
    public function edit($id){
        $sliders = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('sliders'));
    }

    public function update(Request $request, $id){
        $slider = Slider::findOrFail($id);
            $data = $request->all();
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $large_image_path = 'public/adminpanel/uploads/slider/' . $filename;
                    Image::make($image_tmp)->save($large_image_path);
                    $slider->image = $filename;
                }
                $slider->name = ucwords(strtolower($data['name']));
                $slider->body = ucwords($data['body']);
                $slider->save();
                Session::flash('info', 'Info Updated Successfully');
                return redirect()->route('view');

            }
    }
    public function delete($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        Session::flash('danger','Slider Deleted Successfully');
        return redirect()->route('view');
    }
}

