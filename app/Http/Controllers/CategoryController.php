<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $data=Category::all();
        return view('category/index',compact('data'));
    }
    function add_category(){
        return view('category/add_category');
    }
   
    function  add_category_data(Request $req){
         
        $req->validate([

            'title'=>'required',
            'image'=>'required',
           
    
        ]);

        
        

    $admin=new Category;
    $admin->title=$req->title;
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
        
        return redirect()->route('catgory_index');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }

    function edit_category($id){
        $data=Category::find($id);
        return view('category/edit_category',['data'=>$data]);
    }

    function  update_category(Request $req){
         
        $req->validate([

            'title'=>'required',
            'descr'=>'required',
            'image'=>'required',
           
    
        ]);

        
        

    $admin=Category::find($req->id);
    $admin->title=$req->title;
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
        
        return redirect()->route('catgory_index');
    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }

    }
}
