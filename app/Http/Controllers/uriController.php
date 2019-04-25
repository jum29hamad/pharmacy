<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class uriController extends Controller
{
    //
    public function index(Request $request)
    {
       return redirect->route('profile');

    }
    public function do(Request $request)
    {
    	view('register');
    	return redirect()->route()
    }
}
