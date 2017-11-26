<?php

namespace App\Http\Controllers;
use App\Quotation;
use App\Work;
use App\Color;
use App\Paper;
use App\Quality;
use App\Binding;
use App\Job;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index()
    {
    	$quotations = Quotation::all();
    	return view('quotation.ListQuotations', compact('quotations'));
    }

    public function create()
    {
    	$works = Work::all();
        $colors = Color::all();
        $papers = Paper::all();
        $qualities = Quality::all();
        $bindings = Binding::all();
        $jobs = Job::all();
    	return view('quotation.CreateQuotation', compact('works', 'colors', 'papers', 'qualities', 'bindings', 'jobs'));
    }

    public function store(Request $request)
    {
        $quotation = new Quotation;
        $quotation->reference_no = time();
        $quotation->date = $request->quotation_date;
        $quotation->name = $request->quotation_name;
        $quotation->work_id = $request->work_type;
        $quotation->quantity = $request->quantity;
        $quotation->size = $request->size;

        $innerArr = array();
        $innerArr['color'] = $request->innercolor;
        $innerArr['paper'] = $request->innerpaper;
        $innerArr['quality'] = $request->innerquality;
        $quotation->innerDetails = json_encode($innerArr);

        $outerArr = array();
        $outerArr['color'] = $request->outercolor;
        $outerArr['paper'] = $request->outerpaper;
        $outerArr['quality'] = $request->outerquality;
        $quotation->outerDetails = json_encode($outerArr);

        $quotation->binding_id = $request->binding;
        $quotation->included_jobs = json_encode($request->jobs);
        $quotation->speed = $request->speed;
        $quotation->delivery_charge = $request->delivery_charge;
        $quotation->save();

        return redirect()->route('quotation.index')->withSuccess('Quotation created successfully!');
    }

    public function edit($id)
    {
        $quotation = Quotation::find($id);
        $works = Work::all();
        $colors = Color::all();
        $papers = Paper::all();
        $qualities = Quality::all();
        $bindings = Binding::all();
        $jobs = Job::all();
        $jobsArr = json_decode($quotation->included_jobs, TRUE);
        $innerDetails = json_decode($quotation->innerDetails, TRUE);
        $outerDetails = json_decode($quotation->outerDetails, TRUE);
        return view('quotation.EditQuotation', compact('quotation', 'works', 'colors', 'papers', 'qualities', 'bindings', 'jobs', 'jobsArr', 'innerDetails', 'outerDetails'));
    }

    public function update(Request $request , $id)
    {
        $quotation = Quotation::find($id);
        $quotation->date = $request->quotation_date;
        $quotation->name = $request->quotation_name;
        $quotation->work_id = $request->work_type;
        $quotation->quantity = $request->quantity;
        $quotation->size = $request->size;

        $innerArr = array();
        $innerArr['color'] = $request->innercolor;
        $innerArr['paper'] = $request->innerpaper;
        $innerArr['quality'] = $request->innerquality;
        $quotation->innerDetails = json_encode($innerArr);

        $outerArr = array();
        $outerArr['color'] = $request->outercolor;
        $outerArr['paper'] = $request->outerpaper;
        $outerArr['quality'] = $request->outerquality;
        $quotation->outerDetails = json_encode($outerArr);

        $quotation->binding_id = $request->binding;
        $quotation->included_jobs = json_encode($request->jobs);
        $quotation->speed = $request->speed;
        $quotation->delivery_charge = $request->delivery_charge;
        $quotation->save();

        return redirect()->route('quotation.index')->withSuccess('Quotation updated successfully!');
    }

    public function show($id)
    {
        $quotation = Quotation::find($id);
        $work = Work::find($quotation->work_id);
        $binding = Binding::find($quotation->binding_id);

        $jobsArr = json_decode($quotation->included_jobs, TRUE);
        $jobsNames = array();
        foreach ($jobsArr as $singleJob) {
            $jobsNames[] = Job::find($singleJob);
        }

        $innerDetails = json_decode($quotation->innerDetails, TRUE);
        $innerColor = Color::find($innerDetails['color']);
        $innerPaper = Paper::find($innerDetails['paper']);
        $innerQuality = Quality::find($innerDetails['quality']);

        $outerDetails = json_decode($quotation->outerDetails, TRUE);
        $outerColor = Color::find($outerDetails['color']);
        $outerPaper = Paper::find($outerDetails['paper']);
        $outerQuality = Quality::find($outerDetails['quality']);

        return view('quotation.ViewQuotation', compact('quotation', 'work', 'binding', 'jobsNames', 'innerColor', 'innerPaper', 'innerQuality', 'outerColor', 'outerPaper', 'outerQuality'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quotation = Quotation::findorfail($id);
        $quotation->delete();
        return redirect()->route('quotation.index')->withSuccess('Quotation deleted successfully!');
    }

}
