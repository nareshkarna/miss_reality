@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
         Sub Services
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Services  </li>
      </ol>
    </section>
@endsection


@section('content')
<div class="body">
	@if(isset($success))
        <div class="alert alert-success">
            {{$success}}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            
				<a href="{{action('ServiceController@addSubService',$id)}}" class="btn btn-primary">Create Sub Service</a>
			
        </div>
    </div>
	<div class="row">
		<div class="col-sm-12">
			@if(isset($services) && count($services)>0)
				<table class="table table-striped">
					<thead>
						<tr>
						  <th>Title</th>
						  <th>Description</th>
						   <th>cost</th>
						  <th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						
					@foreach($services as $ser)
						<tr>
							<td>{{$ser->name}}</td>
							<td>{{$ser->description}}</td>
							<td>{{$ser->cost}}</td>
							<td><a href="{{action('ServiceController@editService',$ser->id)}}" class="btn btn-primary">Edit</a> </td>
							<td> <a href="{{action('ServiceController@deleteService',$ser->id)}}" class="btn btn-danger">DELETE</a> </td>
						</tr>
					@endforeach	
					</tbody>
				</table>
			
			@endif

		</div>
	</div>
</div >
@endsection
