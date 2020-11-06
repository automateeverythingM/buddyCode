<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function profile()
    {
        return view('pages.profile', array('user'=> Auth::user()));
    }
}
