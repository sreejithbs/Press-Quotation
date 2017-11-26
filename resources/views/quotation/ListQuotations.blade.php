@extends('partials.master')
@section('title', 'List Quotations')
@section('heading', 'Quotations List')

@section('content')

<div class="pull-right">
	<a href="{{ route('quotation.create') }}" class="btn btn-primary">Create New Quotation</a>
</div>
<br><br><br>


<table class="table table-bordered dataTable">
	<thead>
		<th>Sl No</th>
		<th>Quotation Name</th>
		<th>Reference No.</th>
		<th>Quotation Date</th>
		<th>Quantity</th>
		<th>Speed</th>
		<th>Actions</th>
	</thead>
	<tbody>

	@foreach($quotations as $quotation)
		<tr>

			<td>
				{{ $loop->index+1}}
			</td>
			<td>
				{{ $quotation->name}}
			</td>
			<td>
				{{ $quotation->reference_no }}
			</td>
			<td>
				{{ $quotation->date }}
			</td>
			<td>
				{{ $quotation->quantity }}
			</td>
			<td>
				{{ $quotation->speed }}
			</td>
			<td>
				<a href="{{route('quotation.edit', $quotation->id)}}" class="btn btn-primary">Edit</a>
				<a href="{{route('quotation.show', $quotation->id)}}" class="btn btn-info">Show Details</a>
				<form action="{{route('quotation.destroy', $quotation->id)}}" method="POST" style="display: inline;">
					{{method_field('DELETE')}}
					{{csrf_field()}}
				<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection