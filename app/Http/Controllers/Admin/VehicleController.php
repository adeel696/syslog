<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\VehicleRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Vehicle;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class VehicleController extends Controller
{
    protected $vehicleRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(VehicleRepository $vehicleRps)
    { 
        $this->vehicleRps = $vehicleRps;
    }
	
    public function index()
    {
        return view('admin.vehicle.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country= Country::all();
        return view('admin.vehicle.add', ['Country' => $Country]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->vehicleRps->addVehicle($request);
		
		Session::flash('flash_message', utf8_encode(__('static.Vehicle')).' '. utf8_encode('ajouté avec succès'));
		return view('admin.vehicle.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {		
		$Country= Country::all();
        return view('admin.vehicle.edit' ,array('info_Vehicle' => $vehicle), ['Country' => $Country]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $this->vehicleRps->updateVehicle($request->all() , $vehicle->id);
		Session::flash('flash_message', utf8_encode(__('static.Vehicle')).' '. utf8_encode('mise à jour réussie'));
		return view('admin.vehicle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
    }
	
    public function grid()
    {
	   $info_Cities = $this->vehicleRps->getVehicle();
	   return Datatables::of($info_Cities)
		->addColumn('edit', function ($info_Cities) {
				 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/vehicle/'.$info_Cities->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/vehicle/' . $info_Cities->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
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
