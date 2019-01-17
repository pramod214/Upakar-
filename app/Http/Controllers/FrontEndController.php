<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Site;
use Illuminate\Http\Request;
use App\Slider;
use App\Donate;

class FrontEndController extends Controller
{
    public function index(){
        $site = Site::first();
        $slider = Slider::all();
        return view('frontend.index',compact('slider','site'));
    }
    public function about(){
        $about = About::first();
        $site = Site::first();
        return view('frontend.about',compact('about','site'));
    }
    public function projects(){
        $site = Site::first();
        return view('frontend.projects',compact('site'));
    }
    public function news(){
        $site = Site::first();
        return view('frontend.news&events',compact('site'));
    }
    public function notice(){
        $site = Site::first();
        return view('frontend.notice',compact('site'));
    }
    public function photogallery(){
        $site = Site::first();
        return view('frontend.photogallery',compact('site'));
    }
    public function contact(){
        $contact = Contact::first();
        $site = Site::first();
        return view('frontend.contact',compact('contact','site'));
    }
    public function donate(){
        $site = Site::first();
        $donate = Donate::first();
        return view('frontend.donate',compact('site','donate'));
    }
}
