<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\BookingRepository;
use Session;

class BookingController extends Controller
{
    protected $bookingRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BookingRepository $bookingRps)
    { 
		$this->middleware('auth');
        $this->bookingRps = $bookingRps;
    }

    public function addWarehouseBooking(Request $request)
    {
		$inputs = $request->all();
		$inputs['type'] = 3;
		$inputs['status'] = 1;
    	$this->bookingRps->storeWarehouseBooking($inputs);
		Session::flash('flash_message', 'Votreréservation a bien étépriseencompte , nous vouscontacteronstrèsbientôt');
		return redirect('cms/booking/warehouse');
    }
	
	public function addConstructionMachineBooking(Request $request)
    {
		$inputs = $request->all();
		$inputs['type'] = 2;
		$inputs['status'] = 1;
		$this->bookingRps->storeConstructionMachineBooking($inputs);
		Session::flash('flash_message', 'Votreréservation a bien étépriseencompte , nous vouscontacteronstrèsbientôt ');
		return redirect('cms/booking/construction-machine');
	}
	public function addVehicleBooking(Request $request)
    {
		$inputs = $request->all();
		$inputs['type'] = 1;
		$inputs['status'] = 1;
    	$this->bookingRps->storeVehicleBooking($inputs);
		Session::flash('flash_message', 'Votreréservation a bien étépriseencompte , nous vouscontacteronstrèsbientôt');
		return redirect('cms/booking/vehicle');
    }
	
	public function Subscribe(Request $request)
    {
		$inputs = $request->all();
    	$this->bookingRps->storeSubscriber($inputs);
		
		return response()->json(array("id" => $request->offer_id, "message" => utf8_encode("Les livraisons ferontl'objet d'un accord séparé si demandées")));
    }
}
