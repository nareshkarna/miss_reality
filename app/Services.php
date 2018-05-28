<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Services extends Model
{
   protected $fillable = ['name', 'parent','added_by','description','cost','created_on','is_visible','image'];
   public function saveServices($data)
	{
		$is_visible = isset($data['visible'])?$data['visible']:0;
		$image_name = '';
		if(isset($data['image'])){
			$original_name = $data['image']->getClientOriginalName();
			$exe =  pathinfo($original_name, PATHINFO_EXTENSION);
			$image_name = 'service_'.uniqid().'.'.$exe;
			$data['image']->storeAs('services', $image_name);
			
		}
		$id = DB::table('services')->insertGetId(
			['name'=>$data['title'], 'parent'=>$data['parent'],'added_by'=>$data['user'],'description'=>$data['description'],'cost'=>$data['cost'],'is_visible'=>$is_visible,'image'=>$image_name,'created_on'=>date('Y-m-d H:i:s')]
		);
		return $id;
	}
	public function updateServices($data,$id){
		DB::table('services')
            ->where('id', $id)
            ->update(['name'=>$data['title'], 'parent'=>$data['parent'],'description'=>$data['description'],'cost'=>$data['cost']]);
	}
}
?>