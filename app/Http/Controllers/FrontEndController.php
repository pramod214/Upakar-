<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function projects(){
        return view('frontend.projects');
    }
    public function news(){
        return view('frontend.news&events');
    }
    public function notice(){
        return view('frontend.notice');
    }
    public function photogallery(){
        return view('frontend.photogallery');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function donate(){
        return view('frontend.donate');
    }
}
