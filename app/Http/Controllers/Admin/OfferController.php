<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\OfferRepository;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Offer;
use DataTables;
use URL;
use DB;
use Auth;
use Session;

class OfferController extends Controller
{
    protected $offerRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(OfferRepository $offerRps)
    { 
		$this->middleware('admin');
        $this->offerRps = $offerRps;
    }
	
    public function index()
    {
        return view('admin.offer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Country= Country::all();
        return view('admin.offer.add', ['Country' => $Country]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->offerRps->addOffer($request);
		
		Session::flash('flash_message', utf8_encode(__('static.Offer')).' '. utf8_encode('ajouté avec succès'));
		return view('admin.offer.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {		
		$Country= Country::all();
        return view('admin.offer.edit' ,array('info_Offer' => $offer), ['Country' => $Country]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $this->offerRps->updateOffer($request->all() , $offer->id);
		Session::flash('flash_message', utf8_encode(__('static.Offer')).' '. utf8_encode('mise à jour réussie'));
		return view('admin.offer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
		$this->offerRps->deleteOffer($offer);
    }
	
    public function grid()
    {
	   $info_Offers = $this->offerRps->getOffer();
	   return Datatables::of($info_Offers)
		->editColumn('image', function ($info_Offers) {
			return "<image src='".url('/media/offers/')."/".$info_Offers->image."' style='width:100%'>";
		})
		->editColumn('type', function ($info_Offers) {
			if($info_Offers->type == "1")
				return "Assurance";
			if($info_Offers->type == "2")
				return utf8_encode('Pièces détachées');
			if($info_Offers->type == "3")
				return "Lubrifiants";
			if($info_Offers->type == "4")
				return "Autres";
		})
		->addColumn('edit', function ($info_Offers) {
				 return '<div class="">
								<a class="btn btn-default btn-xs btn-rounded p-l-10 p-r-10" style="margin-right:2px;" href="'.url('/admin/offer/'.$info_Offers->id.'/edit').'" title="Edit Data"><i class="fas fa-pencil-alt"></i> '.utf8_encode(__('static.Edit')).'</a> 
                                <a class="btn btn-danger btn-xs btn-rounded p-l-10 p-r-10" href="javascript(0)" title="Delete Data" id="btnDelete" name="btnDelete" data-remote="/admin/offer/' . $info_Offers->id . '"><i class="fa fa-trash"></i> '.utf8_encode(__('static.Delete')).'</a>
                                </div>';
        })
		->escapeColumns([])
		->make(true);
    }
}
