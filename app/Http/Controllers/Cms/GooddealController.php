<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\GooddealRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Gooddeal;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class GooddealController extends Controller
{
    protected $gooddealRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(GooddealRepository $gooddealRps)
    { 
		$this->middleware('auth');
        $this->gooddealRps = $gooddealRps;
    }
	
    public function index()
    {
        return view('cms.gooddeal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country= Country::all();
        return view('cms.gooddeal.add', ['Country' => $Country]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->gooddealRps->addGooddeal($request);
		
		Session::flash('flash_message', utf8_encode(__('static.Gooddeal')).' '. utf8_encode('ajouté avec succès'));
		return view('cms.gooddeal.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gooddeal $gooddeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gooddeal $gooddeal)
    {		
		$Country= Country::all();
        return view('cms.gooddeal.edit' ,array('info_Gooddeal' => $gooddeal), ['Country' => $Country]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gooddeal $gooddeal)
    {
        $this->gooddealRps->updateGooddeal($request->all() , $gooddeal->id);
		Session::flash('flash_message', utf8_encode(__('static.Gooddeal')).' '. utf8_encode('mise à jour réussie'));
		return view('cms.gooddeal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gooddeal $gooddeal)
    {
		$this->gooddealRps->deleteGooddeal($gooddeal);
    }
	
    public function grid()
    {
	   $info_Gooddeals = $this->gooddealRps->getGooddeal();
	   return Datatables::of($info_Gooddeals)
		->editColumn('image', function ($info_Gooddeals) {
			return "<image src='".url('/media/gooddeals/')."/".$info_Gooddeals->image."' style='width:100%'>";
		})
		->editColumn('is_publish', function ($info_Gooddeals) {
			if($info_Gooddeals->is_publish == "1")
				return "Oui";
			if($info_Gooddeals->is_publish == "0")
				return "Non";
		})
		->addColumn('edit', function ($info_Gooddeals) {
				 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/cms/gooddeal/'.$info_Gooddeals->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/cms/gooddeal/' . $info_Gooddeals->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
                                </div>';
        })
		->escapeColumns([])
		->make(true);
    }
}
