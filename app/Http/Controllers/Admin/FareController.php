<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\FareRepository;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Fare;
use App\Models\Vehicle;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class FareController extends Controller
{
    protected $fareRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(FareRepository $fareRps)
    { 
		$this->middleware('admin');
        $this->fareRps = $fareRps;
    }
    public function index()
    {
        return view('admin.fare.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Cities = City::All();
		$Vehicles = Vehicle::All();
        return view('admin.fare.add', ['Cities' => $Cities, 'Vehicles' => $Vehicles]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$inputs = $request->All();
		
		if($inputs["type_of_vehicle"] == 1)
		{
			$inputs["vehicle_id"] = $inputs["machine_id"];
		}
		else
		{
			$inputs["contruction_machinary_id"] = $inputs["machine_id"];
		}
        $this->fareRps->addFare($inputs);
		Session::flash('flash_message', utf8_encode(__('static.Fare')).' '. utf8_encode('ajout� avec succ�s'));
		return view('admin.fare.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fare $fare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fare $fare)
    {		
		$Cities = City::All();
		$Vehicles = Vehicle::All();
        return view('admin.fare.edit' ,array('info_Fare' => $fare), ['Cities' => $Cities, 'Vehicles' => $Vehicles]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fare $fare)
    {
		$inputs = $request->All();
		
		if($inputs["type_of_vehicle"] == 1)
		{
			$inputs["vehicle_id"] = $inputs["machine_id"];
		}
		else
		{
			$inputs["contruction_machinary_id"] = $inputs["machine_id"];
		}
        $this->fareRps->updateFare($inputs , $fare->id);
		Session::flash('flash_message', utf8_encode(__('static.Fare')).' '. utf8_encode('mise � jour r�ussie'));
		return view('admin.fare.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fare $fare)
    {
        $fare->delete();
    }
    public function grid()
    {
	   $info_Fares = $this->fareRps->getFare();
	   return Datatables::of($info_Fares)
		->addColumn('edit', function ($info_Fares) {
				 return '<div class="btn-group btn-group-action">
								<a class="btn btn-info" style="margin-right:2px;" href="'.url('/admin/fare/'.$info_Fares->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i></a> 
                                <a class="btn btn-danger" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/fare/' . $info_Fares->id . '"><i class="fa fa-trash"></i></a>
                                <!--<a class="btn btn-primary" style="margin-left:1px;" href="'.url('/admin/fare/'.$info_Fares->id).'" title="View"><i class="fa fa-eye"></i></a>-->
                                </div>';
        })
        ->addColumn('machine_name', function ($info_Fares) {
			if($info_Fares->type_of_vehicle == 1)
			{
				return $info_Fares->Vehicle()->First()->name;
			}
			else
			{
				return $info_Fares->ConstructionMachine()->First()->name;
			}
        })
		->editColumn('type_of_vehicle', function ($info_Fares) {
			if($info_Fares->type_of_vehicle == 1)
			{
				return utf8_encode(__('static.Vehicles'));
			}
			else
			{
				return utf8_encode(__('static.Construction'))." ".utf8_encode(__('static.Machines'));
			}
        })
		->editColumn('from_city', function ($info_Fares) {
			if($info_Fares->type_of_vehicle == 1)
				return $info_Fares->FromCity()->First()->name;
			else
				return "";
        })
		->editColumn('to_city', function ($info_Fares) {
			if($info_Fares->type_of_vehicle == 1)
				return $info_Fares->ToCity()->First()->name;
			else
				return "";
        })
		->escapeColumns([])
 		->make(true);
    }
}
