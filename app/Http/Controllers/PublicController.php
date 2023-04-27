<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function start(Request $request){
        $emailStart = $request->input('emailStart');
        // dd($emailStart);
        return view('auth.register', compact('emailStart'));
        // return redirect()->route('register', 'emailStart');
    }
}
