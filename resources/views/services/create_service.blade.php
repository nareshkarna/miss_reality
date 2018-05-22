@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
         Create Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Services  </li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
		<div class="col-sm-12">
			<form method="post" action="{{backpack_url('save_service')}}">
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
				
				<label for="cost">Cost:</label>
				<input type="text" class="form-control" name="cost"/>
			</div>
			<input type ="hidden" name="parent" value="0" / >
			<input type ="hidden" name="user" value="{{ Auth::user()->id }}" / >
			<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
@endsection
