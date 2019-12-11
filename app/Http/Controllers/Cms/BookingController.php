<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;
use DataTables;
use Auth;

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
	
    public function getVehicle()
    {
        return view('cms.booking.vehicle');
    }

    public function getVehicleGrid()
    {
       $info_Bookings = $this->bookingRps->getBookingByTypeByUser(1, Auth::User()->id)->get();
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name;
        })
		->editColumn('vehicle_id', function ($info_Bookings) {
			return $info_Bookings->Vehicle()->First()->name;
        })
		->editColumn('place_of_departure_city_id', function ($info_Bookings) {
			return $info_Bookings->Place_of_departure_city()->First()->name;
        })
		->editColumn('place_of_arrival_city_id', function ($info_Bookings) {
			return $info_Bookings->Place_of_arrival_city()->First()->name;
        })
		->editColumn('insurances', function ($info_Bookings) {
			return $info_Bookings->insurances." (Valeur: ".$info_Bookings->value_product.")";
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getConstructionMachine()
    {
        return view('cms.booking.construction-machine');
    }

    public function getConstructionMachineGrid()
    {
       $info_Bookings = $this->bookingRps->getBookingByTypeByUser(2, Auth::User()->id)->get();
	   
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name;
        })
		->editColumn('contruction_machinary_id', function ($info_Bookings) {
			return $info_Bookings->ConstructionMachine()->First()->name;
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getWarehouse()
    {
        return view('cms.booking.warehouse');
    }

    public function getWarehouseGrid()
    {
       $info_Bookings = $this->bookingRps->getBookingByTypeByUser(3, Auth::User()->id)->get();
	   return Datatables::of($info_Bookings)
		->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name;
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getBulkBuy()
    {
        return view('cms.booking.bulk-buy');
    }

    public function getBulkBuyGrid()
    {
	   $info_UserOffers = $this->bookingRps->getUserOffersByUser(Auth::User()->id);
	   return Datatables::of($info_UserOffers)
	   	->editColumn('user_id', function ($info_UserOffers) {
			return $info_UserOffers->User()->First()->name." (".$info_UserOffers->User()->First()->phone_number.")";
        })
		->editColumn('offer_id', function ($info_UserOffers) {
			return $info_UserOffers->Offer()->First()->title;
        })
		->escapeColumns([])
 		->make(true);
    }
}
