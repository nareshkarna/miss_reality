<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type','block_status','social_provider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	function scopemytransactions_site(){
		/* $whereData = [
			['j.status', '<>', '0']
		]; */
		$returndata = DB::table('transactions as t')->select('t.*')->orderBy('t.id','desc')->get();
		if($returndata){
				return $returndata;
		} else {
				return false;
		}
	}
}
