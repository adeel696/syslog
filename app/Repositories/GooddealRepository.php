<?php

namespace App\Repositories;

use App\Models\Gooddeal;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Repositories\ImageRepository;
use DB;


class GooddealRepository {
	
	/**
	 * @var App\Models\gooddeal
	 */
	protected $db_gooddeal;
	protected $imageRps;
		
    public function __construct(Gooddeal $db_gooddeal, ImageRepository $imageRps) 
    {
        $this->db_gooddeal = $db_gooddeal;
		$this->imageRps = $imageRps;
    }
	
	public function addGooddeal($inputs)
    {
        $db_gooddeal = $this->storeGooddeal(new $this->db_gooddeal ,  $inputs);
        return $db_gooddeal;
    }
	
	public function updateGooddeal($inputs, $id)
	{
		$db_gooddeal = $this->db_gooddeal->findOrFail($id);
		$gooddeal_id = $this->storeGooddeal($db_gooddeal, $inputs, $id);
		return $db_gooddeal;
	}
	
	public function deleteGooddeal($db_gooddeal)
    {
		$this->imageRps->delete($db_gooddeal->image, '/media/gooddeals/', '500', '500');
        $db_gooddeal->delete();
    }
	
	function storeGooddeal($db_gooddeal , $inputs, $id = null)
	{	
		$imageName = "";
		if($id == null)
		{
			if(isset($inputs['image']))
				$imageName = $this->imageRps->upload($inputs['image'], '/media/gooddeals/', '500', '500');
		}
		else
		{
			if(isset($inputs['image']))
			{
				$this->imageRps->delete($db_gooddeal->image, '/media/gooddeals/', '500', '500');
				$imageName = $this->imageRps->upload($inputs['image'], '/media/gooddeals/', '500', '500');
			}
		}
		$db_gooddeal->title = (isset($inputs['title']) ? $inputs['title'] : "");	
		$db_gooddeal->description  = (isset($inputs['description']) ? $inputs['description'] : "");
		$db_gooddeal->image = $imageName;
		$db_gooddeal->user_id  = (isset($inputs['user_id']) ? $inputs['user_id'] : "");
		$db_gooddeal->is_publish = 0;
			
		$db_gooddeal->save();
		return $db_gooddeal;
	}
	
	public function getGooddeal($id = null)
    {
		if($id==null)
		{
			$info_Gooddeal = $this->db_gooddeal->select('id', 'title','description','image','user_id', 'is_publish')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Gooddeal = $this->db_gooddeal->select('id', 'title','description','image','user_id', 'is_publish')->findOrFail($id);
		}
        return $info_Gooddeal;
    }
	
}

