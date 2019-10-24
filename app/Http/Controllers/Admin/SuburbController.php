<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\SuburbRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Suburb;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class SuburbController extends Controller
{
    protected $suburbRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SuburbRepository $suburbRps)
    {
		$this->middleware('admin');
        $this->suburbRps = $suburbRps;
    }
	
    public function index()
    {
        return view('admin.suburb.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country = Country::all();
		$City = City::all();
        return view('admin.suburb.add', ['Country' => $Country, 'City' => $City]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->suburbRps->addSuburb($request);
		
		Session::flash('flash_message', utf8_encode(__('static.Suburb')).' '. utf8_encode('ajouté avec succès'));
		return view('admin.suburb.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Suburb $suburb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Suburb $suburb)
    {		
		$Country= Country::all();
		$City = City::all();
        return view('admin.suburb.edit' ,array('info_Suburb' => $suburb), ['Country' => $Country, 'City' => $City]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suburb $suburb)
    {
        $this->suburbRps->updateSuburb($request->all() , $suburb->id);
		Session::flash('flash_message', utf8_encode(__('static.Suburb')).' '. utf8_encode('mise à jour réussie'));
		return view('admin.suburb.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suburb $suburb)
    {
        $suburb->delete();
    }
	
    public function grid()
    {
	   $info_Suburbs = $this->suburbRps->getSuburb();
	   return Datatables::of($info_Suburbs)
		->addColumn('edit', function ($info_Suburbs) {
				 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/suburb/'.$info_Suburbs->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/suburb/' . $info_Suburbs->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
                                </div>';
        })
        ->addColumn('city_id', function ($info_Suburbs) {
			return $info_Suburbs->City()->First()->name;
        })
		->escapeColumns([])
 		->make(true);
    }
}
