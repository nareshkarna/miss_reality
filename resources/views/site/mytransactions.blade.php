@include('site.partials.header')
	
	<!-- page title -->
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-heading">
						<h1>Transactions History</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="#">My Transactions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page title -->

	<section class="single-page-container">
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
	</section>


@include('site.partials.footer')