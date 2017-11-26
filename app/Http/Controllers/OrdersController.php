<?php

namespace App\Http\Controllers;
use App\Quotation;
use App\Work;
use App\Order;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
    	$orders = Order::all();
    	return view('orders.ListOrders', compact('orders'));
    }

    public function create($quotationID = NULL)
    {
    	$allQuotations = Quotation::all();
    	$allWorks = Work::all();

    	if($quotationID){
    		$currentQuotation = Quotation::where('reference_no', $quotationID)->first();
    		return view('orders.CreateOrder', compact('allQuotations', 'currentQuotation', 'allWorks'));

    	} else {
    		return view('orders.CreateOrder', compact('allQuotations', 'allWorks'));
    	}

    }

    public function store(Request $request){

    	$order = new Order;
    	$order->quotation_ref = time();
    	$order->orderID = "OD" . str_random(6);
        $order->customerID = $request->customer_id;
        $order->work_id = $request->work_type;
        $order->delivery_date = $request->delivery_date;
        $order->delivery_charge = $request->delivery_charge;
        $order->total_amt = $request->total_amt;
        $order->advance_amt = $request->advance_amt;
        $order->balance_amt = $request->balance_amt;
        $order->save();

        return redirect()->route('order.index')->withSuccess('Order created successfully!');
    }

    public function edit($id)
    {

    }

    public function update(Request $request , $id)
    {

    }

    public function show($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findorfail($id);
        $order->delete();
        return redirect()->route('order.index')->withSuccess('Order deleted successfully!');
    }

}
