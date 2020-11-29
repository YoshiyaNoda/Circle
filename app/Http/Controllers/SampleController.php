<?php

namespace App\Http\Controllers;
use App\Models\Sample;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function sample() {
        $data = 23;
        return view('sample', compact('data'));
    }
    public function samplePost(Request $request) {
        $data = $request->confirm;
        Sample::create([
            'name' => $request->confirm
        ]);
        $data = Sample::all();
        return view('sample', compact('data'));
    }
}
