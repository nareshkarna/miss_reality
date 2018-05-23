<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services;

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

		$services = Services::all();

        return view('admin.services',  $this->data)->with(compact('services'));
    }
	public function add_service()
    {
        $this->data['title'] ='Services'; // set the page title

        return view('admin.create_service', $this->data);
    } 
	public function saveService(Request $request)
    {
     
        $service = new Services();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required',
			'cost'=> 'nullable|numeric'
        ]);
       
        $id =$service->saveServices($request->all());
        return redirect('/admin/services')->with('success', 'Services has been added successfully.');
   
    }
	public function editService($id)
    {
        $service = Services::where('id', $id)->first();
        return view('admin.edit_service', compact('service', 'id'));
    }
	public function updateService(Request $request, $id)
    {
        $service = new Services();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required',
			'cost'=> 'nullable|numeric'
        ]);
    }
    
}