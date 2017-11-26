@extends('partials.master')
@section('title', 'Edit Quotation')
@section('heading', 'Edit Quotation')

@section('content')

<div class="panel-body">
    <form action="{{ route('quotation.update', $quotation->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Quotation Name:</label>
                   <input type="text" name="quotation_name" class="form-control" value="{{ $quotation->name }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Quotation Date:</label>
                   <input type="date" name="quotation_date" class="form-control" value="{{ $quotation->date }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Type of Work:</label>
                    <select name="work_type" id="work_type" class="select2">
                        <option value="">-- Select an Option --</option>
                        @foreach($works as $work)
                            @php
                                $select = ($quotation->work_id == $work->id) ? "selected" : "";
                            @endphp
                            <option value="{{ $work->id }}" {{ $select }}> {{ $work->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Quantity:</label>
                   <input type="number" name="quantity" class="form-control" value="{{ $quotation->quantity }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Size:</label>
                   <input type="text" name="size" class="form-control" value="{{ $quotation->size }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <label> <h4> INNER Details </h4></label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Color:</label><br>
                    @foreach($colors as $color)
                        @php
                            $checked = ($innerDetails['color'] == $color->id) ? "checked" : "";
                        @endphp

                        <input type="radio" name="innercolor" value="{{ $color->id }}" {{ $checked }}> {{ $color->name }}
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Paper:</label>
                    <select name="innerpaper" class="select2">
                        <option value="">-- Select an Option --</option>
                        @foreach($papers as $paper)
                            @php
                                $select = ($innerDetails['paper'] == $paper->id) ? "selected" : "";
                            @endphp
                            <option value="{{ $paper->id }}" {{ $select }}> {{ $paper->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Quality:</label><br>
                    @foreach($qualities as $quality)
                        @php
                            $checked = ($innerDetails['quality'] == $quality->id) ? "checked" : "";
                        @endphp
                        <input type="radio" name="innerquality" value="{{ $quality->id }}" {{ $checked }}> {{ $quality->name }}
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <label> <h4> OUTER Details </h4></label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Color:</label><br>
                    @foreach($colors as $color)
                        @php
                            $checked = ($outerDetails['color'] == $color->id) ? "checked" : "";
                        @endphp

                        <input type="radio" name="outercolor" value="{{ $color->id }}" {{ $checked }}> {{ $color->name }}
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Paper:</label>
                    <select name="outerpaper" class="select2">
                        <option value="">-- Select an Option --</option>
                        @foreach($papers as $paper)
                            @php
                                $select = ($outerDetails['paper'] == $paper->id) ? "selected" : "";
                            @endphp
                            <option value="{{ $paper->id }}" {{ $select }}> {{ $paper->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Quality:</label><br>
                    @foreach($qualities as $quality)
                        @php
                            $checked = ($outerDetails['quality'] == $quality->id) ? "checked" : "";
                        @endphp
                        <input type="radio" name="outerquality" value="{{ $quality->id }}" {{ $checked }}> {{ $quality->name }}
                    @endforeach
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Binding:</label><br>
                    <select name="binding" class="select2">
                        <option value="">-- Select an Option --</option>
                        @foreach($bindings as $binding)
                            @php
                                $select = ($quotation->binding_id == $binding->id) ? "selected" : "";
                            @endphp
                            <option value="{{ $binding->id }}" {{ $select }}> {{ $binding->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
               <div class="form-group">
                   <label>Jobs Included:</label><br>
                   @foreach($jobs as $job)
                        @php
                            $checked = (in_array($job->id, $jobsArr)) ? "checked" : "";
                        @endphp
                        <input type="checkbox" name="jobs[]" value="{{ $job->id }}" {{ $checked }}>{{ $job->name }}
                   @endforeach
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
               <div class="form-group">
                   <label>Speed:</label><br>
                   <input type="text" name="speed" class="form-control" value="{{ $quotation->speed }}" required>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
               <div class="form-group">
                   <label>Delivery Charge:</label><br>
                   <input type="number" name="delivery_charge" class="form-control" value="{{ $quotation->delivery_charge }}" required>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Update Quotation</button>
                <button type="reset" class="btn btn-success">Reset Form</button>
            </div>
        </div>
    </form>
</div>


@stop