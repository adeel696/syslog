<?php

namespace App\Http\Controllers\CMS\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class CityController extends Controller
{
    protected $cityRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CityRepository $cityRps)
    { 
        $this->cityRps = $cityRps;
    }
    public function index()
    {
        return view('cms.admin.city.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country= Country::all();
        return view('cms.admin.city.add', ['Country' => $Country]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->cityRps->addCity($request);
		
		Session::flash('flash_message', 'City successfully added!');
		return view('cms.admin.city.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {		
		$Country= Country::all();
        return view('cms.admin.city.edit' ,array('info_City' => $city), ['Country' => $Country]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $this->cityRps->updateCity($request->all() , $city->id);
		Session::flash('flash_message', 'City successfully updated!');
		return view('cms.admin.city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $this->cityRps->deleteCity($city->id);
    }
    public function grid()
    {
	   $info_Cities = $this->cityRps->getCity();
	   return Datatables::of($info_Cities)
		->addColumn('edit', function ($info_Cities) {
				 return '<div class="btn-group btn-group-action">
								<a class="btn btn-info" style="margin-right:2px;" href="'.url('/cms/admin/city/'.$info_Cities->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i></a> 
                                <a class="btn btn-danger" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/cms/admin/city/' . $info_Cities->id . '"><i class="fa fa-trash"></i></a>
                                </div>';
        })
        ->addColumn('country_id', function ($info_Cities) {
			return $info_Cities->Country()->First()->name;
        })
		->escapeColumns([])
		->removeColumn('type')
		->make(true);
    }
}
