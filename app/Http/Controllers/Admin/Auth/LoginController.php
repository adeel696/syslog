<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\Country;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }
	
	/**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
	
	protected function authenticated($request, $user)
    {
		$info_Country = Country::FindOrFail($request->country_id);
        \Session::put('admin_country_id',$info_Country->id);
		\Session::put('admin_country_name', $info_Country->name);
		\Session::put('admin_flag', $info_Country->flag);
    }
	/**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
	protected function loggedOut() {
		return redirect('/admin/login');
	}
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
