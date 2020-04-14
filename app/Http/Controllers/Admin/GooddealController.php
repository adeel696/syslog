<?php

namespace App\Http\Controllers\Admin;

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
		$this->middleware('admin');
        $this->gooddealRps = $gooddealRps;
    }
	
    public function index()
    {
        return view('admin.gooddeal.index');
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
        $gooddeal->is_publish = $request->is_publish;
		$gooddeal->save();
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
				return
				'<select class="form-control changeStatus" data-id="'.$info_Gooddeals->id.'">
					<option value="1" selected>Oui</option>
					<option value="0">Non</option>
				</select>';
			if($info_Gooddeals->is_publish == "0")
				return
				'<select class="form-control changeStatus" data-id="'.$info_Gooddeals->id.'">
					<option value="1">Oui</option>
					<option value="0" selected>Non</option>
				</select>';
		})
		->addColumn('edit', function ($info_Gooddeals) {
				 return '<div class="">
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/gooddeal/' . $info_Gooddeals->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
                                </div>';
        })
		->escapeColumns([])
		->make(true);
    }
}
