<?php

namespace App\Http\Controllers;

use App\Models\subscribed;
use Illuminate\Http\Request;

class SubscribedController extends Controller
{
    public function subscribeds(){

        $id=subscribed::with('hasMeal')->where('user_id',"=",1)->get();
        return $id;
        // $data=Meal::all()->where('meal_catid ','=',$id);
        // return $data;

    }

    public function subscribed(){
        $data=subscribed::with('hasMealcategory','hasWorkout','hassubscrption_plan','hasuser','hasCategory')->get();
        return view('subscribed/subscribed',compact('data'));
                
    }
    public function edit_subscribed($id){
        $data2=subscribed::find($id);
        return view('subscribed/edit_subscribed_pack',['data2'=>$data2]);
    }
    public function update_subscribed(Request $req){
        $admin=subscribed::find($req->id);
        $admin->start_date=$req->start_date;
        $admin->end_date=$req->end_date;
        $admin->status=$req->status;
        $save=$admin->save();
        if($save){
            return redirect()->route('subscribed');
        }
        
    }
}
