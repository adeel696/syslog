<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\PackagingRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Packaging;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class PackagingController extends Controller
{
    protected $packagingRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PackagingRepository $packagingRps)
    { 
		$this->middleware('admin');
        $this->packagingRps = $packagingRps;
    }
	
    public function index()
    {
        return view('admin.packaging.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country= Country::all();
        return view('admin.packaging.add', ['Country' => $Country]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->packagingRps->addPackaging($request);
		
		Session::flash('flash_message', utf8_encode(__('static.Packaging')).' '. utf8_encode('ajouté avec succès'));
		return view('admin.packaging.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Packaging $packaging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Packaging $packaging)
    {		
		$Country= Country::all();
        return view('admin.packaging.edit' ,array('info_Packaging' => $packaging), ['Country' => $Country]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packaging $packaging)
    {
        $this->packagingRps->updatePackaging($request->all() , $packaging->id);
		Session::flash('flash_message', utf8_encode(__('static.Packaging')).' '. utf8_encode('mise à jour réussie'));
		return view('admin.packaging.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packaging $packaging)
    {
        $packaging->delete();
    }
	
    public function grid()
    {
	   $info_Cities = $this->packagingRps->getPackaging();
	   return Datatables::of($info_Cities)
		->addColumn('edit', function ($info_Cities) {
				 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/packaging/'.$info_Cities->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/packaging/' . $info_Cities->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
                                </div>';
        })
		->escapeColumns([])
		->make(true);
    }
}
