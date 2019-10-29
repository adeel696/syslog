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
		$this->middleware('admin');
        $this->vehicleRps = $vehicleRps;
    }
	
	public function index()
    {
        return view('admin.vehicle.index');
    }
	
    public function grid()
    {
	   $info_Cities = $this->vehicleRps->getVehicle();
	   return Datatables::of($info_Cities)
		->escapeColumns([])
 		->make(true);
    }
	
	public function lists()
    {
		$info_Cities = $this->vehicleRps->getVehicle()->pluck("name","id");
		return response()->json($info_Cities);
    }
}
