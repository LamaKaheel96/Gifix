<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {

        $data['is_logged'] = Auth::check();
        $data['username'] = Auth::user()->name;
        $data['email'] = Auth::user()->email;
        return view('welcome', $data);
    }
}
