@extends('partials.master')
@section('title', 'List Orders')
@section('heading', 'Orders List')

@section('content')

<div class="pull-right">
    <a href="{{ route('order.create') }}" class="btn btn-primary">Create New Order</a>
</div>
<br><br><br>


<table class="table table-bordered dataTable">
    <thead>
        <th>Sl No</th>
        <th>Order ID</th>
        <th>Delivery Date</th>
        <th>Total Amount</th>
        <th>Balance Amount</th>
        <th>Actions</th>
    </thead>
    <tbody>

    @foreach($orders as $order)
        <tr>

            <td>
                {{ $loop->index+1}}
            </td>
            <td>
                {{ $order->orderID}}
            </td>
            <td>
                {{ $order->delivery_date }}
            </td>
            <td>
                Rs. {{ $order->total_amt }}
            </td>
            <td>
                Rs. {{ $order->balance_amt }}
            </td>
            <td>
                <a href="javascript:void(0);" class="btn btn-primary" disabled>Edit</a>
                <a href="javascript:void(0);" class="btn btn-info" disabled>Show Details</a>
                <form action="{{route('order.destroy', $order->id)}}" method="POST" style="display: inline;">
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