@extends('partials.master')
@section('title', 'Create New Order')
@section('heading', 'Create New Order')

@section('content')

<div class="panel-body">
    <form action="{{ route('order.store') }}" method="POST">
		{{csrf_field()}}
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Quotation Reference Number:</label>
                    <select name="quotation_ref" id="quotation_ref" class="select2">
                        <option value="">-- Select an Option --</option>
                            @foreach($allQuotations as $allQuotation)
                                @php
                                    $select = "";
                                    if(! empty($currentQuotation)){
                                        if($currentQuotation->reference_no == $allQuotation->reference_no){
                                            $select = "selected";
                                            $delivery_charge = $currentQuotation->delivery_charge;
                                        }
                                    }
                                @endphp

                                <option value="{{ $allQuotation->reference_no }}" {{ $select }} > {{ $allQuotation->reference_no }}</option>

                        @endforeach

                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Customer ID:</label>
                   <input type="text" name="customer_id" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Type of Work:</label>
                    <select name="work_type" id="work_type" class="select2">
                        <option value="">-- Select an Option --</option>
                        @foreach($allWorks as $allWork)
                            @php
                                $select = "";
                                if(! empty($currentQuotation)){
                                    if($currentQuotation->work_id == $allWork->id){
                                        $select = "selected";
                                    }
                                }
                            @endphp

                            <option value="{{ $allWork->id }}" {{ $select }}> {{ $allWork->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Delivery Date:</label>
                   <input type="date" name="delivery_date" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Delivery Charge:</label>
                   <input type="number" name="delivery_charge" value="{{ (! empty ($delivery_charge)) ? $delivery_charge : "" }}" class="form-control" required>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Total Amount<span> (inclusive of Delivery Charges):</span></label>
                   <input type="number" name="total_amt" id="total_amt" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Advance Amount:</label>
                   <input type="number" name="advance_amt" id="advance_amt" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label>Balance Amount:</label>
                   <input type="number" name="balance_amt" id="balance_amt" class="form-control" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Create Order</button>
                <button type="reset" class="btn btn-success">Reset Form</button>
            </div>
        </div>
    </form>
</div>


@stop

@section('page_scripts')

<script type="text/javascript">
    $('#total_amt').on('change', function() {
        var total_amt = $(this).val();
        var advance_amt = $("#advance_amt").val();
        var balance_amt = total_amt - advance_amt;
        $("#balance_amt").val(balance_amt);
    });

    $('#advance_amt').on('change', function() {
        var advance_amt = $(this).val();
        var total_amt = $("#total_amt").val();
        var balance_amt = total_amt - advance_amt;
        $("#balance_amt").val(balance_amt);
    });
</script>

@stop