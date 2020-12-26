<?php

namespace App\Http\Controllers;
use App\Models\Sample;
use App\Models\Dammy;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function fetchSample() {
        return Dammy::all();
    }
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
