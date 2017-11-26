@extends('partials.master')
@section('title', 'View Quotation')
@section('heading', 'View Quotation Details')

@section('content')

<div class="pull-right">
	<a href="{{ route('quotation.index') }}" class="btn btn-primary">Back To Quotation Page</a>
</div>
<br><br><br>

<div class="alert alert-success">
	<strong>QUOTATION DETAILS</strong>
</div>
<table class="table table-bordered">
	<thead>
		<th><h4>Quotation Reference No.</h4></th>
		<th><h4>Quotation Name</h4></th>
		<th><h4>Quotation Date</h4></th>
	</thead>
	<tbody>
		<tr>
			<td>
				{{$quotation->reference_no}}
			</td>
			<td>
				{{$quotation->name}}
			</td>
			<td>
				{{$quotation->date}}
			</td>
		</tr>
	</tbody>
</table>


<div class="alert alert-success">
	<strong>WORK DETAILS</strong>
</div>
<table class="table table-bordered">
	<thead>
		<th><h4>Work Type</h4></th>
		<th><h4>Quantity</h4></th>
		<th><h4>Size</h4></th>
		<th><h4>Binding</h4></th>
		<th><h4>Jobs Included</h4></th>
		<th><h4>Speed</h4></th>
		<th><h4>Delivery Charge</h4></th>
	</thead>
	<tbody>
		<tr>
			<td>
				{{ $work->name }}
			</td>
			<td>
				{{ $quotation->quantity }}
			</td>
			<td>
				{{ $quotation->size }}
			</td>
			<td>
				{{ $binding->name }}
			</td>
			<td>
				@foreach($jobsNames as $singleJob)
					{{ $singleJob->name }} ,
				@endforeach
			</td>
			<td>
				{{ $quotation->speed }}
			</td>
			<td>
				{{ $quotation->delivery_charge }}
			</td>
		</tr>
	</tbody>
</table>

<div class="alert alert-success">
	<strong>INNER PAGE DETAILS</strong>
</div>
<table class="table table-bordered">
	<thead>
		<th><h4>Color</h4></th>
		<th><h4>Paper</h4></th>
		<th><h4>Quality</h4></th>
	</thead>
	<tbody>
		<tr>
			<td>
				{{ $innerColor->name }}
			</td>
			<td>
				{{ $innerPaper->name }}
			</td>
			<td>
				{{ $innerQuality->name }}
			</td>
		</tr>
	</tbody>
</table>

<div class="alert alert-success">
	<strong>OUTER PAGE DETAILS</strong>
</div>
<table class="table table-bordered">
	<thead>
		<th><h4>Color</h4></th>
		<th><h4>Paper</h4></th>
		<th><h4>Quality</h4></th>
	</thead>
	<tbody>
		<tr>
			<td>
				{{ $outerColor->name }}
			</td>
			<td>
				{{ $outerPaper->name }}
			</td>
			<td>
				{{ $outerQuality->name }}
			</td>
		</tr>
	</tbody>
</table>

<div class="alert alert-success">
	<strong>RATES</strong>
</div>
<table class="table table-bordered">
	<thead>
		<!-- <th>Printing Charges</th> -->
		<th><h4>Delivery Charges</h4></th>
		<!-- <th>Taxes</th> -->
		<!-- <th>Total Amount Payable</th> -->

	</thead>
	<tbody>
		<tr>
			<!-- <td>
				Rs. 5000
			</td> -->
			<td>
				Rs. {{$quotation->delivery_charge}}
			</td>
			<!-- <td>
				Rs. 56.36
			</td> -->
			<!-- <td>
				Rs. 5555.36 /-
			</td> -->
		</tr>
	</tbody>
</table>

<div class="row">
	<div class="col-md-4  col-md-offset-4">
		<a href="{{ route('order.create', $quotation->reference_no) }}" class="btn btn-primary">Mark this Quotation as Order</a>
	</div>
</div>

@endsection