<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\AssetRepository;
use App\Repositories\ConstructionMachineRepository;
use App\Repositories\VehicleRepository;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Asset;
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
		
		if($inputs["type_of_vehicle"] == 1)
		{
			$inputs["vehicle_id"] = $inputs["machine_id"];
		}
		else
		{
			$inputs["contruction_machinary_id"] = $inputs["machine_id"];
		}
        $this->assetRps->addAsset($inputs);
		Session::flash('flash_message', utf8_encode(__('static.Asset')).' '. utf8_encode('ajout� avec succ�s'));
		return view('cms.asset.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
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
    public function update(Request $request, Asset $asset)
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
		Session::flash('flash_message', utf8_encode(__('static.Asset')).' '. utf8_encode('mise � jour r�ussie'));
		return view('cms.asset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $this->assetRps->deleteAsset($asset->id);
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
								<a class="btn btn-info" style="margin-right:2px;" href="'.url('/cms/asset/'.$info_Assets->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i></a> 
                                <a class="btn btn-danger" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/cms/asset/' . $info_Assets->id . '"><i class="fa fa-trash"></i></a>
                                <!--<a class="btn btn-primary" style="margin-left:1px;" href="'.url('/cms/asset/'.$info_Assets->id).'" title="View"><i class="fa fa-eye"></i></a>-->
                                </div>';
        })
        ->addColumn('machine_name', function ($info_Assets) {
			if($info_Assets->type_of_vehicle == 1)
			{
				return $info_Assets->Vehicle()->First()->name;
			}
			else
			{
				return 222;
			}
        })
		->editColumn('type', function ($info_Assets) {
			if($info_Assets->type_of_vehicle == 1)
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
