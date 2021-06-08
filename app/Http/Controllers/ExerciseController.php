<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Workout;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    
    function exercises(){
        $data=Exercise::with('hasWorkout')->get();
        
        return view('workout_category/exercises',compact('data'));
    }
    function add_exercise(){
        $data=Workout::all();
        return view('workout_category/add_exercises',compact('data'));

    }


    function  add_exercise_data(Request $req){
        
        // return $req->all();
        

        $req->validate([

            'name'=>'required',
            'image'=>'required',
           
    
        ]);

        $id=$req->cat_id;
        for($i=0; $i<count($id); $i++){
            $admin=new Exercise();
            $admin->name=$req->name;
            $admin->workout_catid=$id[$i];
            $admin->sets=$req->sets;
    $admin->reps=$req->reps;
    $admin->duration=$req->duration;
    $admin->description=$req->descr;

    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    if($req->hasFile('video')){
        $image=$req->file('video');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->video_animat = $image_name;
    }
        $save=$admin->save();

        }
    
    if($save){
        
        return redirect()->route('exercises');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }


    function edit_exercise($id){
        $data=Exercise::find($id);
        $data2=Workout::all();
        return view('workout_category/edit_exercise',['data'=>$data],compact('data2'));
    }


    function  update_exercise(Request $req){
       

    $admin=Exercise::where('name',$req->name)->get();

           $cat_id=$req->cat_id;

        
            for($i=0;$i<count($cat_id);$i++){

    $admin[$i]->name=$req->name;
    $admin[$i]->workout_catid=$req->cat_id[$i];
    $admin[$i]->sets=$req->sets;
    $admin[$i]->reps=$req->reps;
    $admin[$i]->duration=$req->duration;
    $admin[$i]->description=$req->descr;
    if($req->hasFile('image')){
        $image=$req->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin[$i]->image = $image_name;
    }
    if($req->hasFile('video')){
        $image=$req->file('video');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin[$i]->video_animat = $image_name;
    }

 
    $save=$admin[$i]->save();


}
                
                if($save){
        
                    return redirect()->route('exercises');
                }
                else{
                    return back()->with('fail','Smoething went wrong, try again...');
            
                }

    }


    public function update_exercise_status(Request $req){


        $admin=Exercise::find($req->id);
        $admin->status=$req->status;
        $save=$admin->save();

        if($save){
        
            return redirect()->route('exercises');
        }
        else{
            return back()->with('fail','Smoething went wrong, try again...');
    
        }
    }

}
