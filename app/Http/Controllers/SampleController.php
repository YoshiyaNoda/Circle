<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function sample() {
        $data = 23;
        return view('sample', compact('data'));
    }
    public function samplePost(Request $request) {
        $data = $request->confirm;
        return view('sample', compact('data'));
    }
}
