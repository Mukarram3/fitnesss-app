<?php

namespace App\Http\Controllers;

use App\Models\mealcatplan;
use App\Models\Mealcategory;
use Illuminate\Http\Request;

class MealcatplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mealcatplan::all();
        return view('meal-category-plans/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Mealcategory::all();
        return view('meal-category-plans/store',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $req->validate([
            'mealcat_id' => 'required',
            'price' =>'required',
            'duration' =>'required',
            'descr' =>'required',
            'status' =>'required'
        ]);

        $admin= new mealcatplan();
        
                    $admin->mealcat_id=$req->mealcat_id;
                    $admin->price=$req->price;
                    $admin->duration=$req->duration;
                    $admin->description=$req->descr;
                    $admin->status=$req->status;
                    $save=$admin->save();
               
        if($save){
            
            return redirect()->route('mealcategoryplanindex');
        }
        else{
            return back()->with('fail','Smoething went wrong, try again...');
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mealcatplan  $mealcatplan
     * @return \Illuminate\Http\Response
     */
    public function show(mealcatplan $mealcatplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mealcatplan  $mealcatplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data=mealcatplan::find($request->id);
        $category=Mealcategory::all();
        return view('meal-category-plans/edit', compact('category'), ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mealcatplan  $mealcatplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $admin=mealcatplan::find($req->id);
   
// return $admin;

            $admin->mealcat_id=$req->mealcat_id;
            $admin->price=$req->price;
            $admin->duration=$req->duration;
            $admin->description=$req->descr;
            $admin->status=$req->status;
            $save=$admin->save();
       
if($save){
    
    return redirect()->route('mealcategoryplanindex');
}
else{
    return back()->with('fail','Smoething went wrong, try again...');

}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mealcatplan  $mealcatplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(mealcatplan $mealcatplan)
    {
        //
    }
}
