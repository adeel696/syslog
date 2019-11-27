<?php

namespace App\Repositories;

use App\Models\Offer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Repositories\ImageRepository;
use DB;


class OfferRepository {
	
	/**
	 * @var App\Models\offer
	 */
	protected $db_offer;
	protected $imageRps;
		
    public function __construct(Offer $db_offer, ImageRepository $imageRps) 
    {
        $this->db_offer = $db_offer;
		$this->imageRps = $imageRps;
    }
	
	public function addOffer($inputs)
    {
        $db_offer = $this->storeOffer(new $this->db_offer ,  $inputs);
        return $db_offer;
    }
	
	public function updateOffer($inputs, $id)
	{
		$db_offer = $this->db_offer->findOrFail($id);
		$offer_id = $this->storeOffer($db_offer, $inputs, $id);
		return $db_offer;
	}
	
	public function deleteOffer($db_offer)
    {
		$this->imageRps->delete($db_offer->image, '/media/offers/', '500', '500');
        $db_offer->delete();
    }
	
	function storeOffer($db_offer , $inputs, $id = null)
	{	
		if($id == null)
		{
			$imageName = $this->imageRps->upload($inputs['image'], '/media/offers/', '500', '500');
		}
		else
		{
			$this->imageRps->delete($db_offer->image, '/media/offers/', '500', '500');
			$imageName = $this->imageRps->upload($inputs['image'], '/media/offers/', '500', '500');
		}
		$db_offer->title = $inputs['title'];
        $db_offer->description = $inputs['description'];
		$db_offer->image = $imageName;
		$db_offer->save();
		return $db_offer;
	}
	
	public function getOffer($id = null)
    {
		if($id==null)
		{
			$info_Offer = $this->db_offer->select('id', 'title','description', 'image')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Offer = $this->db_offer->select('id', 'title','description', 'image')->findOrFail($id);
		}
        return $info_Offer;
    }
	
}

