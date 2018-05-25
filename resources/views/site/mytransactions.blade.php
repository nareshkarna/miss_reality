@include('site.partials.header')


<!-- slider -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 slider">
				<image src="<?php echo URL::to('dist/image/55.jpg');?>" alt="banner"   class="img-responsive" style="width:100%;" />
			</div>
		</div>
	</div>
	<!-- / slider -->

	<div class="container">
		
		<div class="heading find">
			<h2>My Transactions</h2>
		</div>
		<div class="row">
			<div class=" col-sm-8 col-xs-12 col-md-offset-2">
				<table class="table-responsive table">
					<thead>
					<tr><th>Id</th><th>Request Id</th><th>Amount</th><th>Status</th><th>Created On</th></tr>
					</thead>
					<tbody>
					@foreach ($mytransactions as $transaction)
					<tr><td>{{ $transaction->id }}</td><td>{{ $transaction->request_id }}</td><td>{{ $transaction->amount }}</td><td>{{ $transaction->status }}</td><td>{{ $transaction->created_on }}</td></tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>


@include('site.partials.footer')