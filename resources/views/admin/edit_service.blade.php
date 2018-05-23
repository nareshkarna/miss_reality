@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
         Edit Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Services  </li>
      </ol>
    </section>
@endsection


@section('content')
	@if ($errors->any())
	<div class="alert alert-danger">
        <ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	</div><br />
	@endif
    <div class="row">
		<div class="col-sm-12">
			<form method="post" action="{{action('ServiceController@updateService',$id)}}">
			{{csrf_field()}}
			<div class="form-group">
				<input type="hidden" value="{{csrf_token()}}" name="_token" />
				<label for="title">Service Title:</label>
				<input type="text" class="form-control" name="title" value="{{$service->name}}" />
			</div>
			<div class="form-group">
			
				<label for="description">Description:</label>
				<textarea name="description" class="form-control" >{{$service->description}}</textarea>
			</div>
			<div class="form-group">
				
				<label for="cost">Cost:</label>
				<input type="text" class="form-control" name="cost" value="{{$service->cost}}"/>
			</div>
			<input type ="hidden" name="parent" value="{{$service->parent}}" / >
			<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
@endsection
