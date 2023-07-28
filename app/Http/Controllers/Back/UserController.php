<?php

namespace App\Http\Controllers\Back;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users= User::all();
        // $loggedInUserName = auth()->user()->name ?? '';
        return view('Back.users',compact('users'));
        // return view('Back.users', compact('users', 'loggedInUserName'));
    }
}
