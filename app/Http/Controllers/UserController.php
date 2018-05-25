<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }
	public function mytransactions()
    {
        $this->data['title'] = 'My Transactions'; // set the page title

		$mytransactions = User::mytransactions_site();
		//return view('admin.jobs', compact('mytransactions'));		
        return view('site.mytransactions', compact('mytransactions'));
    }

    
}
