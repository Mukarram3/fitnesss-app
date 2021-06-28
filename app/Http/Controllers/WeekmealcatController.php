<?php

namespace App\Http\Controllers;

use App\Models\weekmealcat;
use App\Models\Mealcategory;
use App\Models\mealcatplan;
use Illuminate\Http\Request;

class WeekmealcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=weekmealcat::all();
        // return $data;
        // $category=Mealcategory::all();
        // return $category->hasmealweekcategories->title[0];
        return view('meal_category_weeks/index',compact('data'));
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
     * @param  \App\Models\weekmealcat  $weekmealcat
     * @return \Illuminate\Http\Response
     */
    public function show(weekmealcat $weekmealcat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\weekmealcat  $weekmealcat
     * @return \Illuminate\Http\Response
     */
    public function edit(weekmealcat $weekmealcat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\weekmealcat  $weekmealcat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, weekmealcat $weekmealcat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\weekmealcat  $weekmealcat
     * @return \Illuminate\Http\Response
     */
    public function destroy(weekmealcat $weekmealcat)
    {
        //
    }
}
