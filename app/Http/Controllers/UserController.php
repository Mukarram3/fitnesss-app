<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{





    function add_user_data(Request $req){

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
    $admin->Mobile=$req->mobile;
    $admin->age=$req->age;

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
    if(!$save){
        return response()->json(['code'=>0,'msg'=>'Something went wrong']);
    }else{
        return response()->json(['code'=>1,'msg'=>'New User has been successfully saved']);
    }
    }
    function user(){
        $user_data=user::all();
        return view('user/user',compact('user_data'));
    }


    public function userprofile(){
        return view('user.profile');
    }

    public function getUserList(Request $request){
        $users = User::all();
        return DataTables::of($users)
                            ->addIndexColumn()
                            ->addColumn('actions', function($row){
                                return '<div class="btn-group">
                                              <button class="btn btn-sm btn-primary" data-id="'.$row['id'].'" id="editCountryBtn">Update</button>
                                              <button class="btn btn-sm btn-danger" data-id="'.$row['id'].'" id="deleteUserBtn">Delete</button>
                                        </div>';
                            })
                            ->addColumn('checkbox', function($row){
                                return '<input type="checkbox" name="country_checkbox" data-id="'.$row['id'].'"><label></label>';
                            })

                            ->rawColumns(['actions','checkbox'])
                            ->make(true);
  }


    function getUserDetails(Request $request){
        $user_id = $request->user_id;
        $userDetails = User::find($user_id);
        return response()->json(['details'=>$userDetails]);
    }
    function updateuserdetails(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:15',


        ]);



        $userid = $request->id;

            $user = User::find($userid);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->Mobile = $request->mobile;
            $user->type = $request->type;
            $user->age = $request->age;
            if($request->hasFile('image')){
                $image=$request->file('image');
                    $path = 'public/images/';
                    $extension=$image->getClientOriginalExtension();
                    $image_name=uniqid().".".$extension;
                    $image->storeAs($path,$image_name);
                    $user->image = $image_name;
            }
            $query = $user->save();

            if($query){
                return response()->json(['code'=>1, 'msg'=>'User Details have Been updated']);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
            }

    }

    public function del_user(Request $request){
        $user_id = $request->user_id;
        $query = User::find($user_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'User has been deleted from database']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }

    public function delall_user(Request $request){
        $users_ids = $request->users_ids;
       User::whereIn('id', $users_ids)->delete();
       return response()->json(['code'=>1, 'msg'=>'Users have been deleted from database']);
    }





    // To get all users of a role
    public function getUsers($role_id)
    {
        $data=role::with('users')->where('id','=',$role_id)->get();
        return view('manytomany',compact('data'));
    }

    // To get all roles by user
    public function getRoles($user_id)
    {
        $data=User::with('roles')->where('id','=',$user_id)->get();
        return view('manytomany',compact('data'));
    }




}
