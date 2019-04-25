<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function access(Request $request)
    {
    	if($request->session()->has('my_name'))
    	{
    		echo $request->session()->get('my_name');
    	}
    	else
    	{
    		echo'no data in session';
    	}
    }
    public function store(Request $request)
    {
    	$request->session()->put('my_name','juma hamad');
    	echo'data has been put';
    }
}
