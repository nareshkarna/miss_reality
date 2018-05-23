<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Services extends Model
{
   protected $fillable = ['name', 'parent','added_by','description','cost','created_on'];
   public function saveServices($data)
	{
			
		$id = DB::table('services')->insertGetId(
			['name'=>$data['title'], 'parent'=>$data['parent'],'added_by'=>$data['user'],'description'=>$data['description'],'cost'=>$data['cost'],'created_on'=>date('Y-m-d H:i:s')]
		);
		return $id;
	}
}
?>