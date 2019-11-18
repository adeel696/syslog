<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\AssetRepository;
use App\Repositories\ConstructionMachineRepository;
use App\Repositories\VehicleRepository;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\User_vehicle;
use App\Models\Vehicle;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class AssetController extends Controller
{
    protected $assetRps;
	protected $vehicleRps;
	protected $constructionMachinesRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(AssetRepository $assetRps, VehicleRepository $vehicleRps, ConstructionMachineRepository $constructionMachinesRps)
    { 
		$this->middleware('auth');
        $this->assetRps = $assetRps;
		$this->vehicleRps = $vehicleRps;
		$this->constructionMachinesRps = $constructionMachinesRps;
    }
    public function index()
    {
        return view('cms.asset.index');
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
        return view('cms.asset.add', ['Cities' => $Cities, 'Vehicles' => $Vehicles]);
    
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
		$i=0;
		foreach($inputs['capacity'] as $item)
		{
			$updatedInputs['type_of_vehicle'] = $inputs["type_of_vehicle"];
			
			if($updatedInputs["type_of_vehicle"] == 1)
			{
				$updatedInputs["vehicle_id"] = $inputs["machine_id"];
			}
			else
			{
				$updatedInputs["contruction_machinary_id"] = $inputs["machine_id"];
			}
			
			
			$updatedInputs['quantity'] = $inputs["quantity"];
			$updatedInputs['capacity'] = $inputs['capacity'][$i];
			$updatedInputs['date_of_entry'] = $inputs['date_of_entry'][$i];
			$updatedInputs['registration_number'] = $inputs['registration_number'][$i];
			$updatedInputs['meter_reading'] = $inputs['meter_reading'][$i];
			$updatedInputs['state'] = $inputs['state'][$i];
			$updatedInputs['mark'] = $inputs['mark'][$i];
			$updatedInputs['maker'] = $inputs['maker'][$i];
			$updatedInputs['series'] = $inputs['series'][$i];
			$updatedInputs['other_specifications'] = $inputs['other_specifications'][$i];
			$this->assetRps->addAsset($updatedInputs);
			
			$i++;
		}
		Session::flash('flash_message', utf8_encode(__('static.Asset')).' '. utf8_encode('ajouté avec succès'));
		return view('cms.asset.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User_vehicle $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User_vehicle $asset)
    {		
		$Cities = City::All();
		$Vehicles = Vehicle::All();
        return view('cms.asset.edit' ,array('info_Asset' => $asset), ['Cities' => $Cities, 'Vehicles' => $Vehicles]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_vehicle $asset)
    {
		$inputs = $request->All();
		
		if($inputs["type_of_vehicle"] == 1)
		{
			$inputs["vehicle_id"] = $inputs["machine_id"];
		}
		else
		{
			$inputs["construction_machinary_id"] = $inputs["machine_id"];
		}
        $this->assetRps->updateAsset($inputs , $asset->id);
		Session::flash('flash_message', utf8_encode(__('static.Asset')).' '. utf8_encode('mise à jour réussie'));
		return view('cms.asset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_vehicle $asset)
    {
        $asset->delete();
    }
	
	public function vehicleLists()
	{
		$info_Cities = $this->vehicleRps->getVehicle()->pluck("name","id");
		return response()->json($info_Cities);
	}
	
	public function constructionMachineLists()
	{
		$info_ConstructionMachines = $this->constructionMachinesRps->getConstructionMachine()->pluck("name","id");
		return response()->json($info_ConstructionMachines);
	}
	
    public function grid()
    {
	   $info_Assets = $this->assetRps->getAsset();
	   return Datatables::of($info_Assets)
		->addColumn('edit', function ($info_Assets) { 
				 return '<div class="btn-group btn-group-action">
								<!--<a class="btn btn-info" style="margin-right:2px;" href="'.url('/cms/asset/'.$info_Assets->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i></a>--> 
                                <a class="btn btn-danger" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/cms/asset/' . $info_Assets->id . '"><i class="fa fa-trash"></i></a>
                                <!--<a class="btn btn-primary" style="margin-left:1px;" href="'.url('/cms/asset/'.$info_Assets->id).'" title="View"><i class="fa fa-eye"></i></a>-->
                                </div>';
        })
        ->addColumn('machine_name', function ($info_Assets) {
			if($info_Assets->type == 1)
			{
				return $info_Assets->Vehicle()->First()->name;
			}
			else
			{
				return $info_Assets->ConstructionMachine()->First()->name;
			}
        })
		->editColumn('type', function ($info_Assets) {
			if($info_Assets->type == 1)
			{
				return utf8_encode(__('static.Vehicles'));
			}
			else
			{
				return utf8_encode(__('static.Construction'))." ".utf8_encode(__('static.Machines'));
			}
        })
		->escapeColumns([])
 		->make(true);
    }
}
