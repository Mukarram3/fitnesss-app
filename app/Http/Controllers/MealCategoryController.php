<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mealcategory;
use Illuminate\Http\Request;

class MealCategoryController extends Controller
{
    function mealcategoryindex(){
        $data=Mealcategory::all();
        return view('meal_category/index',compact('data'));
    }
    function add_meal_category(){
        $data=Category::all();
        return view('meal_category/add_meal_category',compact('data'));
    }
    
    
    function  add_mealcat_data(Request $req){
         
        $req->validate([
    
            // 'title'=>'required',
            // 'image'=>'required',
           
    
        ]);
    
        
        
    
    $admin=new Mealcategory;
    $admin->cat_id=$req->cat_id;
    $admin->title=$req->title;
    $admin->description=$req->descr;
    $admin->type=$req->type;
    
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
        
        return redirect()->route('mealcategoryindex');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');
    
    }
    
    }
    
    function edit_mealcategory($id){
        $data=Mealcategory::find($id);
        return view('meal_category/edit_meal_category',['data'=>$data]);
    }
    
    
    function  update_meal_cat(Request $req){
         
        $req->validate([
    
            'title'=>'required',
            'descr'=>'required',
            'image'=>'required',
           
    
        ]);
    
        
        
    
    $admin=Mealcategory::find($req->id);
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
        
        return redirect()->route('mealcategoryindex');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');
    
    }
    
    }
    
}
