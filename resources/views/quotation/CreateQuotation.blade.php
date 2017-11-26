@extends('partials.master')
@section('title', 'Create New Quotation')
@section('heading', 'Create New Quotation')

@section('content')

<div class="panel-body">
    <form action="{{ route('quotation.store') }}" method="POST">
		{{csrf_field()}}
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Quotation Name:</label>
                   <input type="text" name="quotation_name" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Quotation Date:</label>
                   <input type="date" name="quotation_date" class="form-control" required>
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
                            <option value="{{ $work->id }}"> {{ $work->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="hiddenDiv">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="form-group">
                        <label>Quantity:</label>
                       <input type="number" name="quantity" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="form-group">
                        <label>Size:</label>
                       <input type="text" name="size" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- First Row -->
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="panel panel-color panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">INNER Details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Color:</label><br>
                                        @foreach($colors as $color)
                                            <input type="radio" name="innercolor" value="{{ $color->id }}"> {{ $color->name }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Paper:</label>
                                        <select name="innerpaper" id="innerpaper" class="select2">
                                            <option value="">-- Select an Option --</option>
                                            @foreach($papers as $paper)
                                                <option value="{{ $paper->id }}"> {{ $paper->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Quality:</label><br>
                                        @foreach($qualities as $quality)
                                            <input type="radio" name="innerquality" value="{{ $quality->id }}"> {{ $quality->name }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="panel panel-color panel-teal">
                        <div class="panel-heading">
                            <h3 class="panel-title">OUTER Details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Color:</label><br>
                                        @foreach($colors as $color)
                                            <input type="radio" name="outercolor" value="{{ $color->id }}"> {{ $color->name }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Paper:</label>
                                        <select name="outerpaper" id="outerpaper" class="select2">
                                            <option value="">-- Select an Option --</option>
                                            @foreach($papers as $paper)
                                                <option value="{{ $paper->id }}"> {{ $paper->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Quality:</label><br>
                                        @foreach($qualities as $quality)
                                            <input type="radio" name="outerquality" value="{{ $quality->id }}"> {{ $quality->name }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="form-group">
                        <label>Binding:</label><br>
                        <select name="binding" id="binding" class="select2">
                            <option value="">-- Select an Option --</option>
                            @foreach($bindings as $binding)
                                <option value="{{ $binding->id }}"> {{ $binding->name }}</option>
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
                            <input type="checkbox" name="jobs[]" value="{{ $job->id }}">{{ $job->name }}
                       @endforeach
                   </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                   <div class="form-group">
                       <label>Speed:</label><br>
                       <input type="text" name="speed" class="form-control" required>
                   </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                   <div class="form-group">
                       <label>Delivery Charge:</label><br>
                       <input type="number" name="delivery_charge" class="form-control" required>
                   </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <button type="submit" class="btn btn-primary">View Quotation</button>
                <button type="reset" class="btn btn-success">Reset Form</button>
            </div>
        </div>
    </form>
</div>


@stop

@section('page_scripts')

<script type="text/javascript">
    $('#work_type').on('change', function() {
      if (this.selectedIndex > 0) {
        $(".hiddenDiv").css('display', 'block');
      }
    });
</script>

@stop