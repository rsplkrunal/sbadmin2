<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Tip;
use App\StockOfMonth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function myHome()
    {
       $data = Tip::with('Company')->whereDate('tip_date', '=', Carbon::now()->toDateString())
                ->get();
        if($data->isEmpty()){
            $data = Tip::with('Company')->orderBy('tip_date','desc')->limit(3)->get();
        }            
        if($data){
            $data = $data->toArray();
        }
        $stockMonth =  StockOfMonth::with('Company')->whereMonth('tip_date', '=', Carbon::now()->month)
        ->get()->first();
        if(!$stockMonth){
            $stockMonth =  StockOfMonth::with('Company')->latest('tip_date')->first();
        }  
        if($stockMonth){
            $stockMonth = $stockMonth->toArray(); 
        }
        
        return view('myHome',compact('data','stockMonth'));
    }

    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */

    public function myUsers()
    {
        return view('myUsers');
    }

}
