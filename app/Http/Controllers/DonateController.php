<?php

namespace App\Http\Controllers;

use App\Donate;
use Illuminate\Http\Request;
use Session;

class DonateController extends Controller
{
    public function donate()
    {
        $donate = Donate::first();
        return view('admin.donate.index', compact('donate'));
    }

    public function donate_update(Request $request, $id)
    {
        $donate = Donate::findOrFail($id);
        $data = $request->all();
        $donate->name = ucwords(strtolower($data['name']));
        $donate->bank_name = ucwords(strtolower($data['bank_name']));
        $donate->bank_account = $data['bank_account'];
        $donate->body = $data['body'];

        $donate->save();
        Session::flash('success', 'Donate Info Updated');
        return redirect()->route('admin.donate');
    }
}
