<?php

namespace App\Http\Controllers;

use App\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Calculator::orderBy('id','DESC')->limit(5)->get();
        return view('calculator.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $cal = new Calculator();
            $cal->input=$request->exp;
            $cal->output=$request->result;
            $cal->save();
            return response()->json(['cal'=>$cal]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function show(Calculator $calculator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculator $calculator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculator $calculator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculator $calculator)
    {
        //
    }
}
