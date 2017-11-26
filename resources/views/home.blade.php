@extends('partials.master')
@section('title', 'Dashboard Page')
@section('heading', 'Dashboard Page')
@section('content')
<div class="well">
	Welcome To Dashboard
</div>

	<div class="row">
		<div class="col-lg-3 col-md-6">
	        <div class="card-box widget-box-two widget-two-success">
	            <i class="mdi mdi-account-convert widget-two-icon"></i>
	            <div class="wigdet-two-content">
	                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Users</p>
	                <h2><span data-plugin="counterup">45 </span></h2>
	            </div>
	        </div>
	    </div><!-- end col -->

	    <div class="col-lg-3 col-md-6">
	        <div class="card-box widget-box-two widget-two-primary">
	            <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
	            <div class="wigdet-two-content">
	                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Roles</p>
	                <h2><span data-plugin="counterup">55 </span></h2>
	            </div>
	        </div>
	    </div><!-- end col -->
	</div>
@endsection