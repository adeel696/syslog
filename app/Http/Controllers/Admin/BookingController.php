<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;
use DataTables;

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
		$this->middleware('admin');
        $this->bookingRps = $bookingRps;
    }
	
    public function getVehicle()
    {
        return view('admin.booking.vehicle');
    }

    public function getVehicleGrid()
    {
	   $info_Bookings = $this->bookingRps->getBookingByType(1)->join('vehicle_bookings', 'vehicle_bookings.booking_id', '=', 'bookings.id')
       ->select('bookings.*', 'vehicle_bookings.*')
       ->get();
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name." (".$info_Bookings->User()->First()->phone_number.")";
        })
		->addColumn('email', function ($info_Bookings) {
			return $info_Bookings->User()->First()->email;
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getConstructionMachine()
    {
        return view('admin.booking.construction-machine');
    }

    public function getConstructionMachineGrid()
    {
	   $info_Bookings = $this->bookingRps->getBookingByType(2)
	   ->join('contruction_machinaries_bookings', 'contruction_machinaries_bookings.booking_id', '=', 'bookings.id')
       ->select('bookings.*', 'contruction_machinaries_bookings.*')
       ->get();
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name." (".$info_Bookings->User()->First()->phone_number.")";
        })
		->addColumn('email', function ($info_Bookings) {
			return $info_Bookings->User()->First()->email;
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getWarehouse()
    {
        return view('admin.booking.warehouse');
    }

    public function getWarehouseGrid()
    {
	   $info_Bookings = $this->bookingRps->getBookingByType(1)
	   ->join('warehouse_bookings', 'warehouse_bookings.booking_id', '=', 'bookings.id')
       ->select('bookings.*', 'warehouse_bookings.*')
       ->get();
	   return Datatables::of($info_Bookings)
		->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name." (".$info_Bookings->User()->First()->phone_number.")";
        })
		->addColumn('email', function ($info_Bookings) {
			return $info_Bookings->User()->First()->email;
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getBulkBuy()
    {
        return view('admin.booking.bulk-buy');
    }

    public function getBulkBuyGrid()
    {
	   $info_UserOffers = $this->bookingRps->getUserOffers();
	   return Datatables::of($info_UserOffers)
	   	->editColumn('user_id', function ($info_UserOffers) {
			return $info_UserOffers->User()->First()->name." (".$info_UserOffers->User()->First()->phone_number.")";
        })
		->addColumn('email', function ($info_UserOffers) {
			return $info_UserOffers->User()->First()->email;
        })
		->editColumn('offer_id', function ($info_UserOffers) {
			return $info_UserOffers->Offer()->First()->title;
        })
		->escapeColumns([])
 		->make(true);
    }
}
