<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    function signup_page(){


        return view('auth/signup');
    }
    function signup(Request $req){
        $req->validate([

            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:15',


        ]);




    $admin=new User;
    $admin->name=$req->name;
    $admin->email=$req->email;
    $admin->password=Hash::make($req->password);
    $admin->address=$req->address;
    $admin->city=$req->city;
    $admin->Mobile=$req->Mobile;
    $admin->age=$req->age;



    if($req->hasFile('file')){
        $image=$req->file('file');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    // $admin->image=$req->image;
    $save=$admin->save();
    if($save){

        return redirect()->route('login_page')->with('success','You are Sign Up... Please Login');

    }
    else{
        return back()->with('fail','Smoething went wrong, try again...');

    }
    }
    function login_page(){
        return view('auth/login');
    }
    public function login(Request $req){

        $req->validate([

            'email'=>'required|email',
            'password'=>'required|min:5|max:20'


        ]);

        // $remember_me = $req->has('remember_me') ? true : false;
        $credentail=$req->only('email','password');

        if(Auth::attempt($credentail)){
            // $data = ['loggeduserinfo'=>User::where('id','=', auth()->user()->id)->first()];
            if(auth()->user()->status==1){
                return redirect()->route('user_page');
            }
            else{
                return back()->with('error','Please Wait for approval By Admin');
            }

        }
        else{
            return back()->with('error','Wrong email or password');
        }

            }

            public function logout(){

                if(Auth::check()){
                    Auth::logout();
                    return redirect()->route('login_page')->with('error','You are Logged Out.. Please Login');
                }else{
                    // return redirect()->route('login_page');

                }
            }

}
