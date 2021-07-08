<?php

namespace App\Http\Controllers;

use App\Models\mealday;
use Illuminate\Http\Request;

class MealdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mealday::all();
        return view('meal_category_days/index',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mealday  $mealday
     * @return \Illuminate\Http\Response
     */
    public function show(mealday $mealday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mealday  $mealday
     * @return \Illuminate\Http\Response
     */
    public function edit(mealday $mealday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mealday  $mealday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mealday $mealday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mealday  $mealday
     * @return \Illuminate\Http\Response
     */
    public function destroy(mealday $mealday)
    {
        //
    }
}
