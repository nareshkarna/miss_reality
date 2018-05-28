@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
		@if(isset($id))
		  Create Sub Service
		@else
         Create Service
		@endif
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
			<form method="post" action="{{backpack_url('save_service')}}" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" value="{{csrf_token()}}" name="_token" />
				<label for="title">Service Title:</label>
				<input type="text" class="form-control" name="title"/>
			</div>
			<div class="form-group">
			
				<label for="description">Description:</label>
				<textarea name="description" class="form-control" ></textarea>
			</div>
			<div class="form-group">
				
				<label for="image">Image:</label>
				<input type="file" class="form-control" name="image" />
			</div>
			<div class="form-group">
				
				<label for="cost">Cost:</label>
				<input type="text" class="form-control" name="cost"/>
			</div>
			
			<div class="form-group">
				
				<label for="visible">Visible:</label>
				<input type="checkbox"  name="visible" value="1" />
			</div>
			@if(isset($id))
			 <input type ="hidden" name="parent" value="{{$id}}" / >
			@else
			 <input type ="hidden" name="parent" value="0" / >
			@endif
			
			<input type ="hidden" name="user" value="{{ Auth::user()->id }}" / >
			<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
@endsection
