<?php

namespace App\Http\Controllers;

use App\Models\Mealcategory;
use App\Models\subscription_plan;
use App\Models\Workout;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    public function plans(){
        $data=subscription_plan::with('hasWorkout','hasMealcategory')->get();
        // return $data;
       
        return view('subscription_plans/index',compact('data'));
    }
    public function add_plan(){

        $workouts_cat=Workout::where('status',1)->get();
        $meal_cat=Mealcategory::where('status',1)->get();
        return view('subscription_plans/add_plans',['workouts_cat'=>$workouts_cat,'meal_cat'=>$meal_cat]);
        
    }


    function  add_plan_data(Request $req){
        
        // return $req->all();  

        $admin=new subscription_plan();

        $admin->workout_catid=$req->workout_cat;
        $admin->meal_catid =$req->meal_cat;
        $admin->name=$req->package_name;
        $admin->duration=$req->duration;
        $admin->price=$req->price;
        $admin->description=$req->desc;
        $save=$admin->save();

        
    
    if($save){
        
        return redirect()->route('plans');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }

    public function edit_plan($id){
        
        $data=subscription_plan::find($id);
        $workouts_cat=Workout::where('status',1)->get();
        $meal_cat=Mealcategory::where('status',1)->get();
        return view('subscription_plans/editplan',['data'=>$data,'meal_cat'=>$meal_cat],compact('workouts_cat'));
    }


    
    function  update_plan(Request $req){
        
        // return $req->all();  

        $admin=subscription_plan::find($req->id);

        $admin->workout_catid=$req->workout_cat;
        $admin->meal_catid =$req->meal_cat;
        $admin->name=$req->package_name;
        $admin->duration=$req->duration;
        $admin->price=$req->price;
        $admin->description=$req->desc;
        $admin->status=$req->status;
        $save=$admin->save();

        
    
    if($save){
        
        return redirect()->route('plans');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }
}
