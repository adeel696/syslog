<?php
namespace App\Repositories;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;
class WarehouseRepository {
	
	/**
	 * @var App\Models\warehouse
	 */
	protected $db_warehouse;
		
    public function __construct(City $db_warehouse) 
    {
        $this->db_warehouse = $db_warehouse;
    }
	
	public function addWarehouse($inputs)
    {
        $db_warehouse = $this->storeWarehouse(new $this->db_warehouse ,  $inputs);
        return $db_warehouse;
    }
	public function updateWarehouse($inputs, $id)
	{
		$db_warehouse = $this->db_warehouse->findOrFail($id);
		$warehouse_id = $this->storeWarehouse($db_warehouse, $inputs, $id);
		return $warehouse;
	}
	
	function storeWarehouse($db_warehouse , $inputs, $id = null)
	{	
		$db_warehouse->name = $inputs['name'];
        $db_warehouse->address = $inputs['address'];
        $db_warehouse->space_available = $inputs['space_available'];
		$db_warehouse->fare = $inputs['fare'];
		$db_warehouse->user_id = $inputs['user_id'];
		$db_warehouse->save();
		return $db_warehouse;
	}
	
	public function getWarehouse($id = null)
    {
		if($id==null)
		{
			$info_Warehouse = $this->db_warehouse->select('id', 'name','address','space_available','fare','user_id')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Warehouse = $this->db_warehouse->select('id', 'name','address','space_available','fare','user_id')->findOrFail($id);
		}
        return $info_Warehouse;
    }
	
}