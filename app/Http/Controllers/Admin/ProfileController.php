<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use DataTables;
use URL;
use Auth;
use Session;

class ProfileController extends Controller
{
    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
		$this->middleware('admin');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$info_User = Auth::guard('admin')->user();
		return view('admin.profile.edit',array('info_User' => $info_User));
    }
	
	public function show($id)
    {
		$info_User = Auth::guard('admin')->user();
		return view('admin.profile.edit',array('info_User' => $info_User));
    }
	
    public function update(Request $request, $id)
    {
		$rules = [
            'name' => 'required|string|max:255',
            'email' =>  'unique:users,email,'.$id.'|required|email',
            'username' =>  'unique:users,username,'.$id.'|required|alpha_dash',
			'type' => 'string|max:1',
			'avatar' => 'image|mimes:jpg,png,jpeg|min:1|max:2048',
			'password' => 'nullable|string|min:6|confirmed',
        ];
		
		$validator = Validator::make($request->all(), $rules);
		if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();
			
        $db_user = $this->profileRps->updateUser($request->all() , $id);
		
		return redirect('Foreman/Profile');
    }
	
}
