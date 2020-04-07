<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id){
        return view('user.user', ['user' => User::findOrFail($id)]);
    }
}
