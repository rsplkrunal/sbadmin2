<?php

namespace App\Http\Controllers;

use App\StockOfMonth;
use Illuminate\Http\Request;
use App\Company;
use Exception;

class StockOfMonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = StockOfMonth::with('company')->orderBy('tip_date','desc')->paginate(5);
        return view('monthstock.index', compact('records'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::select('id', 'name')->orderBy('name')->limit(3)->get()->toArray();
        $months = [];
        for ($i = 0; $i < 3; $i++) {
            $monthValue = date("Y-m-01", strtotime(date('Y-m-01') . " +$i months"));
            $months[$monthValue] = $monthValue;
        }
        return view('monthstock.create', ['companies' => $companies, 'months' => $months]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $newRecord = new StockOfMonth;
            $newRecord->company_id = $request->get('company_id');
            $newRecord->tip_date = $request->get('tip_date');
            $newRecord->save();
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockOfMonth  $stockOfMonth
     * @return \Illuminate\Http\Response
     */
    public function show(StockOfMonth $stockOfMonth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockOfMonth  $stockOfMonth
     * @return \Illuminate\Http\Response
     */
    public function edit(StockOfMonth $stockOfMonth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockOfMonth  $stockOfMonth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockOfMonth $stockOfMonth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockOfMonth  $stockOfMonth
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockOfMonth $stockOfMonth)
    {
        //
    }
}
