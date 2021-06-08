<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exercise;
use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    function workoutcategory_index(){
        $data=Workout::all();
        return view('workout_category/index',compact('data'));
    }
    function add_workoutcategory(){
        $data=Category::all();
        return view('workout_category/add_workout_category',compact('data'));
    }

    function  add_workoutcat_data(Request $req){
         
        $req->validate([

            'title'=>'required',
            'image'=>'required',
           
    
        ]);

        
        

    $admin=new Workout;
    $admin->cat_id=$req->cat_id;
    $admin->title=$req->title;
    $admin->type=$req->type;
    $admin->description=$req->descr;

    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    // $admin->image=$req->image;
    $save=$admin->save();
    if($save){
        
        return redirect()->route('workoutcategory_index');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }


    function edit_workoutcategory($id){
       $data=Workout::find($id);
       $exercises=Exercise::all()->where('workout_catid','=',$id);
       
        return view('workout_category/edit_workout_category',compact('exercises'),['data'=>$data]);
    }

    function  update_workout_cat(Request $req){
         
        $req->validate([

            'title'=>'required',
            'image'=>'required',
           
    
        ]);

        
        

    $admin=Workout::find($req->id);
    $admin->title=$req->title;
    $admin->type=$req->type;
    $admin->description=$req->descr;
    $admin->status=$req->status;

    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    // $admin->image=$req->image;
    $save=$admin->save();
    if($save){
        
        return redirect()->route('workoutcategory_index');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }

}
