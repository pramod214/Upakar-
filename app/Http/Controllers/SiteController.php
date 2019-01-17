<?php

namespace App\Http\Controllers;

use App\Site;
use Session;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site(){
        $sites = Site::first();
        return view('admin.site.index',compact('sites'));
    }
    public function site_update(Request $request,$id){
        $site = Site::findOrFail($id);
        $data = $request->all();
        $site->facebook = $data['facebook'];
        $site->twitter = $data['twitter'];
        $site->google = $data['google'];
        $site->insta = $data['insta'];
        $site->save();
        Session::flush('success','Site Info Updated');
        return redirect()->route('admin.site');
    }

}
