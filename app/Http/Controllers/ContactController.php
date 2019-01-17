<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    public function contact(){
        $contact = Contact::first();
        return view('admin.contact.index',compact('contact'));
    }
    public function contact_update(Request $request,$id){
        $contact = Contact::findOrFail($id);
        $data = $request->all();
        $contact->name = $data['name'];
        $contact->address = $data['address'];
        $contact->body = $data['body'];
        $contact->email = $data['email'];
        $contact->phone = $data['phone'];

        $contact->save();
        Session::flash('success', 'Contact Info Updated');
        return redirect()->route('admin.contact');
    }
}
