<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ConstructionMachineRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\ConstructionMachines;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class ConstructionMachineController extends Controller
{
    protected $constructionMachinesRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ConstructionMachinesRepository $constructionMachinesRps)
    { 
        $this->constructionMachinesRps = $constructionMachinesRps;
    }
	
    public function index()
    {
        return view('admin.constructionMachines.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country= Country::all();
        return view('admin.constructionMachines.add', ['Country' => $Country]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->constructionMachinesRps->addConstructionMachines($request);
		
		Session::flash('flash_message', utf8_encode(__('static.ConstructionMachines')).' '. utf8_encode('ajouté avec succès'));
		return view('admin.constructionMachines.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ConstructionMachines $constructionMachines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ConstructionMachines $constructionMachines)
    {		
		$Country= Country::all();
        return view('admin.constructionMachines.edit' ,array('info_ConstructionMachines' => $constructionMachines), ['Country' => $Country]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConstructionMachines $constructionMachines)
    {
        $this->constructionMachinesRps->updateConstructionMachines($request->constructionMachinesall() , $constructionMachines->id);
		Session::flash('flash_message', utf8_encode(__('static.ConstructionMachines')).' '. utf8_encode('mise à jour réussie'));
		return view('admin.city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConstructionMachines $city)
    {
        $constructionMachines->delete();
    }
	
    public function grid()
    {
	   $info_Cities = $this->constructionMachinesRps->getConstructionMachines();
	   return Datatables::of($info_Cities)
		->addColumn('edit', function ($info_Cities) {
				 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/constructionMachines/'.$info_Cities->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/constructionMachines/' . $info_Cities->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
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
