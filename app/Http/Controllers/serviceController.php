<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function services()
    {
        $this->data['title'] = 'Services'; // set the page title

        return view('services.services', $this->data);
    }
	public function add_service()
    {
        $this->data['title'] ='Services'; // set the page title

        return view('services.create_service', $this->data);
    } 
    
}
