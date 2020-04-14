<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\Admin;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class AdminController extends Controller
{
    protected $adminRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(UserRepository $adminRps)
    { 
		$this->middleware('admin');
        $this->adminRps = $adminRps;
    }
	
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$rules = [
            'name' => 'required|string|max:255',
            'email' =>  'unique:admins,email|required|email',
			'password' => 'nullable|string|min:6|confirmed',
        ];
		
		$validator = Validator::make($request->all(), $rules);
		if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();
			
        $this->adminRps->addAdmin($request);
		
		Session::flash('flash_message', utf8_encode(__('static.Admin')).' '. utf8_encode('ajouté avec succès'));
		return view('admin.user.index');
    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $user)
    {	
        return view('admin.user.edit' ,array('info_Admin' => $user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $user)
    {
		$rules = [
            'name' => 'required|string|max:255',
            'email' =>  'unique:admins,email,'.$user->id.'|required|email',
			'password' => 'nullable|string|min:6|confirmed',
        ];
		
		$validator = Validator::make($request->all(), $rules);
		if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();
			
        $this->adminRps->updateAdmin($request->all() , $user->id);
		Session::flash('flash_message', utf8_encode(__('static.Admin')).' '. utf8_encode('mise à jour réussie'));
		return view('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $user)
    {
		$user->delete();
    }
	
    public function grid()
    {
	   $info_Admins = $this->adminRps->getAdmin();
	   return Datatables::of($info_Admins)
		->addColumn('edit', function ($info_Admins) {
				 if($info_Admins->id != 1)
				 {
				 	return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/user/'.$info_Admins->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/user/' . $info_Admins->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
                                </div>';
				 }
				 else
				 {
					 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/user/'.$info_Admins->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a>
                                </div>';
				 }
        })
		->escapeColumns([])
		->make(true);
    }
}
