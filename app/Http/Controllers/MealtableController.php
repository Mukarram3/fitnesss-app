<?php

namespace App\Http\Controllers;

use App\Models\mealtable;
use App\Models\Category;
use App\Models\Mealcategory;
use Illuminate\Http\Request;

class MealtableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function mealindex(){

        $data=mealtable::with('hasMealcategory')->get();
        // return $data;

        return view('meals/index',compact('data'));
    }
    function add_meal(){
        $data=Mealcategory::all();

        return view('meals/add_meal',compact('data'));
    }


    function  add_meal_data(Request $req){

        // return $req->all();


        $req->validate([

            'title'=>'required',
            'image'=>'required',


        ]);

        $id=$req->cat_id;
        for($i=0; $i<count($id); $i++){
            $admin=new mealtable;
            $admin->meal_catid=$id[$i];
            $admin->title=$req->title;
            if($req->hasFile('image')){
                $image=$req->file('image');
                    $path = 'public/images/';
                    $extension=$image->getClientOriginalExtension();
                    $image_name=uniqid().".".$extension;
                    $image->storeAs($path,$image_name);
                    $admin->image = $image_name;
            }
            if(!empty($req->ingredient)){
            $admin->ingredients=json_encode($req->ingredient);
            }
            if(!empty($req->step) ){
            $admin->steps=json_encode($req->step);
            }
            $admin->duration=$req->time;
            $admin->mealtime=$req->mealtime;
            $admin->calories=$req->calories;
            $admin->caloriesperc=$req->caloriesperc;
            $admin->carbo=$req->carbo;
            $admin->carboperc=$req->carboperc;
            $admin->proteins=$req->proteins;
            $admin->proteinsperc=$req->proteinsperc;
            $admin->fats=$req->fats;
            $admin->fatsperc=$req->fatsperc;
            $admin->complexity=$req->complexity;
        $save=$admin->save();

        }

    if($save){

        return redirect()->route('mealindex');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }


    function edit_meal($id){
        $data=mealtable::find($id);
        $category=Mealcategory::all();
        return view('meals/edit_meal',['data'=>$data],compact('category'));
    }



    function  update_meal_data(Request $req){

        $admin=mealtable::where('title',$req->title)->get();

    // return $admin;
           $cat_id=$req->cat_id;
        //    return count($cat_id);

            for($i=0;$i<count($cat_id);$i++){



                $admin[$i]->meal_catid=$req->cat_id[$i];

                $admin[$i]->title=$req->title;
                if($req->hasFile('image')){
                    $image=$req->file('image');
                        $path = 'public/images/';
                        $extension=$image->getClientOriginalExtension();
                        $image_name=uniqid().".".$extension;
                        $image->storeAs($path,$image_name);
                        $admin[$i]->image = $image_name;
                }
                if(!empty($req->ingredient)){
                    $admin[$i]->ingredients=json_encode($req->ingredient);
                }
                if(!empty($req->step) ){
                    $admin[$i]->steps=json_encode($req->step);
                }
                $admin[$i]->description=$req->descr;

                $admin[$i]->duration=$req->time;
            $admin[$i]->mealtime=$req->mealtime;
            $admin[$i]->calories=$req->calories;
            $admin[$i]->caloriesperc=$req->caloriesperc;
            $admin[$i]->carbo=$req->carbo;
            $admin[$i]->carboperc=$req->carboperc;
            $admin[$i]->proteins=$req->proteins;
            $admin[$i]->proteinsperc=$req->proteinsperc;
            $admin[$i]->fats=$req->fats;
            $admin[$i]->fatsperc=$req->fatsperc;
            $admin[$i]->complexity=$req->complexity;
                // $admin[$i]->status=$req->status;
                // return $admin;

                $save=$admin[$i]->save();
                // return $save;

            }



    // $admin->image=$req->image;


    if($save){

        return redirect()->route('mealindex');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }



    public function update_meal_status(Request $req){

        $admin=mealtable::find($req->id);
        $admin->status=$req->status;
        $save=$admin->save();

        if($save){

            return redirect()->route('mealindex');
        }
        else{
            return back()->with('fail','Smoething went wrong, try again...');

        }
    }




    function ingredients($id){

        $data=mealtable::find($id);

        return view('meals/ingredients',['dat2'=>$data]);
    }

    function steps($id){

        // $data=step::with('hasmeal')->get();
        $data=mealtable::find($id);
        // return $data;
        return view('meals/steps',['dat2'=>$data]);
    }
}
