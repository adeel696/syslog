<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('user');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('cms.home');
    } 
}
