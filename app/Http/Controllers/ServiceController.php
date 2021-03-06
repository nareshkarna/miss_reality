<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;
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

		$services = Services::where('parent',0)->get();

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
		$parent=$request->input('parent');
		
		$service->updateServices($request->all(),$id);
		if($parent>0){
			$success = 'Service has been updated successfully.';
			$services = Services::where('parent', $parent)->get();
			return view('admin.sub_services',['id'=> $parent,'services'=>$services,'success'=>$success]);
		} else {
			return redirect('/admin/services')->with('success', 'Service has been updated successfully.');
		}
    }
	public function deleteService($id)
    {
        $service = Services::find($id);
        $service->delete();

        return redirect('/admin/services')->with('success', 'Service has been deleted!!');
    }
	public function subServices($id){
		$this->data['title'] ='Services'; // set the page title

		$services = Services::where('parent', $id)->get();

        return view('admin.sub_services', $this->data)->with(compact('services','id'));
	}
	public function addSubService($id){
		$this->data['title'] ='Services'; // set the page title

        return view('admin.create_service', $this->data)->with(compact('id'));
	}
	public function getServiceImage($id){
		$service = Services::find($id);
		if($service->image !=''){
			$path = storage_path('app/public/services/') . $service->image;
		} else {
			$path = storage_path('app/public/services/') . 'no-img.jpg';
		}
        if(!File::exists($path)){ 
            $path = storage_path('app/public/services/') . 'no-img.jpg';
		}

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
	}
    
}
