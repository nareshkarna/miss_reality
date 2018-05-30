@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
         Services
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Services  </li>
      </ol>
    </section>
@endsection


@section('content')
<div class="body">
	@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            
				<a href="{{url('/admin/create_service')}}" class="btn btn-primary">Create Service</a>
			
        </div>
    </div>
	<div class="row">
		<div class="col-sm-12">
			@if(isset($services) && count($services)>0)
				<table class="table table-striped">
					<thead>
						<tr>
						  <th> Image </th>
						  <th>Title</th>
						  <th>Description</th>
						   <th>cost</th>
						  <th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody>
						
					@foreach($services as $ser)
						<tr>
							<td>							
									
								<img src="{{action('ServiceController@getServiceImage',$ser->id)}}" width="50" /> 
								
							</td>
							<td>{{$ser->name}}</td>
							<td>{{$ser->description}}</td>
							<td>{{$ser->cost}}</td>
							<td><a href="{{action('ServiceController@subServices',$ser->id)}}" class="btn btn-info">add Sub-Service</a></td>
							<td><a href="{{action('ServiceController@editService',$ser->id)}}" class="btn btn-primary">Edit</a></td>
							<td> <a href="{{action('ServiceController@deleteService',$ser->id)}}" class="btn btn-danger">DELETE</a></td>
						</tr>
					@endforeach	
					</tbody>
				</table>
			
			@endif
		</div>
	</div>
</div >
@endsection
