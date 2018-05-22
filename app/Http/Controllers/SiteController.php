<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Site;

class SiteController extends Controller
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
	public function index()
    {
        $this->data['title'] = 'Home'; // set the page title

        return view('site.index', $this->data);
    }

    
}
