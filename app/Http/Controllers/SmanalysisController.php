<?php

namespace App\Http\Controllers;

use App\Smanalysis;
use App\StockOfMonth;
use Exception;
use Illuminate\Http\Request;

class SmanalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($smId)
    {
        $details = StockOfMonth::with('Company')->where('id','=',$smId)->first()->toArray();
        $records = Smanalysis::paginate(5);
        return view('smanalysis.index', compact('details','records'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($smId)
    {
        return view('smanalysis.create',compact('smId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$smId)
    {
        try{
            $newRecord = new Smanalysis();
            $newRecord->stock_of_month_id = $smId;
            $newRecord->type = $request->get('type');
            $newRecord->details = $request->get('details');
            $newRecord->save();
            return redirect()->route('smanalysis.index',$smId)
                        ->with('success','Record created successfully.');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Smanalysis  $smanalysis
     * @return \Illuminate\Http\Response
     */
    public function show(Smanalysis $smanalysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Smanalysis  $smanalysis
     * @return \Illuminate\Http\Response
     */
    public function edit(Smanalysis $smanalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Smanalysis  $smanalysis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smanalysis $smanalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Smanalysis  $smanalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smanalysis $smanalysis)
    {
        //
    }
}
