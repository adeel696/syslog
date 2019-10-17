<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Repositories\WarehouseRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Warehouse;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class CityController extends Controller
{
    protected $warehouseRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(WarehouseRepository $warehouseRps)
    { 
        $this->warehouseRps = $warehouseRps;
    }
    public function index()
    {
        return view('cms.admin.warehouse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $User= User::all();
        return view('cms.admin.warehouse.add', ['User' => $User]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->warehouseRps->addWarehouse($request);
		
		Session::flash('flash_message', 'Warehouse successfully added!');
		return view('cms.admin.warehouse.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {		
		$User= User::all();
        return view('cms.admin.warehouse.edit' ,array('info_City' => $warehouse), ['User' => $User]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        $this->warehouseRps->updateWarehouse($request->all() , $warehouse->id);
		Session::flash('flash_message', 'Warehouse successfully updated!');
		return view('cms.admin.warehouse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        $this->warehouseRps->deleteCity($warehouse->id);
    }
    public function grid()
    {
	   $info_Warehouses = $this->warehouseRps->getWarehouse();
	   return Datatables::of($info_Warehouses)
		->addColumn('edit', function ($info_Warehouses) {
				 return '<div class="btn-group btn-group-action">
								<a class="btn btn-info" style="margin-right:2px;" href="'.url('/cms/admin/warehouse/'.$info_Warehouses->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i></a> 
                                <a class="btn btn-danger" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/cms/admin/warehouse/' . $info_Warehouses->id . '"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-primary" style="margin-left:1px;" href="'.url('/cms/admin/warehouse/'.$info_Warehouses->id).'" title="View"><i class="fa fa-eye"></i></a> 
                                </div>';
        })
        ->addColumn('User_id', function ($info_Warehouses) {
			return $info_Warehouses->User()->First()->name;
        })
		->escapeColumns([])
		->removeColumn('type')
		->make(true);
    }
}
