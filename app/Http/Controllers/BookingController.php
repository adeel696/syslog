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
        $this->bookingRps = $bookingRps;
    }

    public function addWarehouseBooking(Request $request)
    {
		$inputs = $request->all();
		$inputs['type'] = 3;
		$inputs['status'] = 1;
		$info_Booking = $this->bookingRps->storeBooking($inputs);
		$inputs['booking_id'] = $info_Booking->id;
    	$this->bookingRps->storeWarehouseBooking($inputs);
		Session::flash('flash_message', 'Your booking request has been sent. For detail go to&nbsp;<a href="'.url('/cms').'">CMS</a>');
		return redirect('warehouse');
    }
	
	public function addConstructionMachineBooking(Request $request)
    {
		$inputs = $request->all();
		$inputs['type'] = 3;
		$inputs['status'] = 1;
		$info_Booking = $this->bookingRps->storeBooking($inputs);
		$inputs['booking_id'] = $info_Booking->id;
		$this->bookingRps->storeConstructionMachineBooking($inputs);
		Session::flash('flash_message', 'Your booking request has been sent. For detail go to&nbsp;<a href="'.url('/cms').'">CMS</a>');
		return redirect('warehouse');
	}
	public function addVehicleBooking(Request $request)
    {
		$inputs = $request->all();
		$inputs['type'] = 1;
		$inputs['status'] = 1;
		$info_Booking = $this->bookingRps->storeBooking($inputs);
		$inputs['booking_id'] = $info_Booking->id;
    	$this->bookingRps->storeVehicleBooking($inputs);
		Session::flash('flash_message', 'Your booking request has been sent. For detail go to&nbsp;<a href="'.url('/cms').'">CMS</a>');
		return redirect('vehicle');
    }
}
