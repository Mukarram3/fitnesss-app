<?php

namespace App\Http\Controllers;

use App\Models\mealcatweek;
use Illuminate\Http\Request;

class MealcatweekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mealcatweek::all();
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
     * @param  \App\Models\mealcatweek  $mealcatweek
     * @return \Illuminate\Http\Response
     */
    public function show(mealcatweek $mealcatweek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mealcatweek  $mealcatweek
     * @return \Illuminate\Http\Response
     */
    public function edit(mealcatweek $mealcatweek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mealcatweek  $mealcatweek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mealcatweek $mealcatweek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mealcatweek  $mealcatweek
     * @return \Illuminate\Http\Response
     */
    public function destroy(mealcatweek $mealcatweek)
    {
        //
    }
}
