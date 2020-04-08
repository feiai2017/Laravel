<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function showall() {
        return view('test.test', ['users' => Test::all()]);
    }

    public function save() {
        $test = new Test();
        $test->name = 'test';
        $test->gender = 1;
        $test->save();
    }

    public function getOne(Request $request) {
        $id = $request->only(['id']);
        $test = $request->input('id');
        Log::debug('request: ' . json_encode($request));
        Log::debug('id: ' . json_encode($id));
        Log::debug('test: ' . json_encode($test));

    }
}
