<?php

namespace App\Http\Controllers;

use App\Tip;
use App\Company;
use Exception;
use Illuminate\Http\Request;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Tip::with('company')->orderBy('tip_date','desc')->paginate(5);
        return view('tip.index', compact('records'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::select('id', 'name')->orderBy('name')->limit(3)->get()->toArray();
        $days = [];
        for ($i = 0; $i < 7; $i++) {
            $dayValue = date("Y-m-d", strtotime(date('Y-m-d') . " +$i days"));
            $days[$dayValue] = $dayValue;
        }
        return view('tip.create', compact('companies','days'));
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
            $newRecord = new Tip;
            $newRecord->company_id = $request->get('company_id');
            $newRecord->tip_date = $request->get('tip_date');
            $newRecord->details = $request->get('details');
            $newRecord->save();
            return redirect()->route('tip.index')
                        ->with('success','Record created successfully.');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function show(Tip $tip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        $companies = Company::select('id', 'name')->orderBy('name')->limit(3)->get()->toArray();
        $days = [];
        for ($i = 0; $i < 7; $i++) {
            $dayValue = date("Y-m-d", strtotime(date('Y-m-d') . " +$i days"));
            $days[$dayValue] = $dayValue;
        }
        return view ('tip.edit',compact('tip','companies','days'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tip $tip)
    {
        try{            
            $dbData = Tip::findOrFail($tip->id);
            $input = $request->all();
            $dbData->fill($input)->save();

            return redirect()->route('tip.index')
                        ->with('success','Record updated successfully.');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tip $tip)
    {
        //
    }
}
