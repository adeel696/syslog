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

    public function getVehicleGrid($status)
    {
	   if($status != 0)
	   	$info_Bookings = $this->bookingRps->getBookingByType(1)->where('status',$status)->get();
	   else
	   	$info_Bookings = $this->bookingRps->getBookingByType(1)->get();
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name." (".$info_Bookings->User()->First()->phone_number.")";
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
			return $info_Bookings->insurances."(Valeur: ".$info_Bookings->value_product.")";
        })
		->addColumn('email', function ($info_Bookings) {
			return $info_Bookings->User()->First()->email;
        })
		->editColumn('status', function ($info_Bookings) {
			if($info_Bookings->status == "1")
			{
				return '<select class="form-control changeStatus" data-type="1" data-id="'.$info_Bookings->id.'">
					<option value="1" selected>En attente</option>
					<option value="2">'.utf8_encode("Fermé").'</option>
					<option value="3">Annuler</option>
				</select>
				';
			}
			if($info_Bookings->status == "2")
			{
				return utf8_encode("Fermé");
			}
			if($info_Bookings->status == "3")
			{
				return "Annuler";
			}
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getConstructionMachine()
    {
        return view('admin.booking.construction-machine');
    }

    public function getConstructionMachineGrid($status)
    {
	   if($status != 0)
	   	   $info_Bookings = $this->bookingRps->getBookingByType(2)->where('status',$status)->get();
	   else
		   $info_Bookings = $this->bookingRps->getBookingByType(2)->get();
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name." (".$info_Bookings->User()->First()->phone_number.")";
        })
		->editColumn('contruction_machinary_id', function ($info_Bookings) {
			return $info_Bookings->ConstructionMachine()->First()->name;
        })
		->addColumn('email', function ($info_Bookings) {
			return $info_Bookings->User()->First()->email;
        })
		->editColumn('delivery_place_city_id', function ($info_Bookings) {
			if($info_Bookings->delivery_place_city_id != "")
				return $info_Bookings->Delivery_place_city()->First()->name;
			else
				return "";
        })
		->editColumn('status', function ($info_Bookings) {
			if($info_Bookings->status == "1")
			{
				return '<select class="form-control changeStatus" data-type="2" data-id="'.$info_Bookings->id.'">
					<option value="1" selected>En attente</option>
					<option value="2">'.utf8_encode("Fermé").'</option>
					<option value="3">Annuler</option>
				</select>
				';
			}
			if($info_Bookings->status == "2")
			{
				return utf8_encode("Fermé");
			}
			if($info_Bookings->status == "3")
			{
				return "Annuler";
			}
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getWarehouse()
    {
        return view('admin.booking.warehouse');
    }

    public function getWarehouseGrid($status)
    {
	   if($status != 0)
	   	   $info_Bookings = $this->bookingRps->getBookingByType(3)->where('status',$status)->get();
	   else
	   	$info_Bookings = $this->bookingRps->getBookingByType(3)->get();
	   return Datatables::of($info_Bookings)
		->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name." (".$info_Bookings->User()->First()->phone_number.")";
        })
		->addColumn('email', function ($info_Bookings) {
			return $info_Bookings->User()->First()->email;
        })
		->editColumn('city_id', function ($info_Bookings) {
			return $info_Bookings->City()->First()->name;
        })
		->editColumn('status', function ($info_Bookings) {
			if($info_Bookings->status == "1")
			{
				return '<select class="form-control changeStatus" data-type="3" data-id="'.$info_Bookings->id.'">
					<option value="1" selected>En attente</option>
					<option value="2">'.utf8_encode("Fermé").'</option>
					<option value="3">Annuler</option>
				</select>
				';
			}
			if($info_Bookings->status == "2")
			{
				return utf8_encode("Fermé");
			}
			if($info_Bookings->status == "3")
			{
				return "Annuler";
			}
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
		->addColumn('description', function ($info_UserOffers) {
			return $info_UserOffers->Offer()->First()->description;
        })
		->addColumn('status', function ($info_UserOffers) {
			return '<select class="form-control changeStatus" data-type="4" data-id="'.$info_UserOffers->id.'">
					<option value="1">Souscrire</option>
					<option value="3">Annuler</option>
				</select>
				';
        })
		->escapeColumns([])
 		->make(true);
    }
	
	function updateBookingStatus(Request $request)
	{
		$booking_id = $request->booking_id;
		$status = $request->status;
		$type = $request->type;
		$this->bookingRps->updateBookingStatus($type, $booking_id, $status);
		
		return "Ok";
	}
}
