<?php

namespace App\Http\Controllers;


use App\Site;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function member_form()
    {
        $site = Site::first();
        return view('frontend.member_form',compact('site'));
    }

    public function store(Request $request){

            $data = $request->all();
            $form = new Form();
            $form->name = ucwords(strtolower($data['name']));
            $form->address = ucwords(strtolower($data['address']));
            $form->phone = $data['phone'];
            $form->blood = ucwords(strtolower($data['blood']));
            $form->profession = ucwords(strtolower($data['profession']));
            $form->dob = $data['dob'];
            $form->email = $data['email'];
            $form->save();
            return redirect()->back();
        }

}
