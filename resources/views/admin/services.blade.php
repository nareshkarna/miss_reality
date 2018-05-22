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
            
				<a href="{{backpack_url('create_service')}}" class="btn btn-primary">Create Service</a>
			
        </div>
    </div>
</div >
@endsection
