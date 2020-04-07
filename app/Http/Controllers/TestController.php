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
}
