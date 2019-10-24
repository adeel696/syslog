<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ConstructionMachineRepository;
use Illuminate\Http\Request;
use App\Models\ConstructionMachine;
use DataTables;

class ConstructionMachineController extends Controller
{
    protected $constructionMachinesRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ConstructionMachineRepository $constructionMachinesRps)
    {
		$this->middleware('admin');
        $this->constructionMachinesRps = $constructionMachinesRps;
    }
	
    public function index()
    {
        return view('admin.construction-machine.index');
    }


    public function grid()
    {
	   $info_ConstructionMachines = $this->constructionMachinesRps->getConstructionMachine();
	   return Datatables::of($info_ConstructionMachines)
		->escapeColumns([])
 		->make(true);
    }
}
