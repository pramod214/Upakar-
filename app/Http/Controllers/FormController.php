<?php

namespace App\Http\Controllers;


use App\Site;
use Illuminate\Http\Request;
use App\Form;
use Session;

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

        public function view_form(){
        $forms = Form::latest()->get();
        return view('admin.memberform.index',compact('forms'));
        }

        public function delete($id){
        $forms = Form::findOrFail($id);
        $forms ->delete();
        return redirect()->route('admin.view_form');
        }

}
