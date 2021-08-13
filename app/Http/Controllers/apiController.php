<?php
namespace App\Http\Controllers\API;
namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\category;
use App\Models\doctor;
class apiController extends Controller
{

    function comments(Request $request){

        $comment= new comment();
        $comment->title=$request->title;
        $comment->comment=$request->comment;
        $comment->author=$request->author;

        $save=$comment->save();


    }

    function categories(){
        $category=category::all();
        return $category;
    }

    function doctors(){
        $doctors=doctor::all()->where('status',1);
        return $doctors;
    }



    function signup(Request $request){
        // return $request;
        $request->validate([

            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:15',


        ]);




    $admin=new User();
    $admin->name=request('name');
    $admin->email=request('email');
    $admin->password=Hash::make(request('password'));
    $admin->address=request('address');
    $admin->city=request('city');
    $admin->Mobile=request('Mobile');
    $admin->age=$request->age;



    if($request->hasFile('image')){
        $image=$request->file('image');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    $save=$admin->save();
    if($save){



        $success['token'] =  $admin->createToken('MyApp')-> accessToken;
        $success['name'] = $admin->name;

        // return response()->json($success, 200);
        return response()->json(['success'=> $success],200);

    }
    else{
        return response()->json(['fail' => 'Unable to signup'],201);

    }



    }

    public function login(Request $req){



        $req->validate([

            'email'=>'required|email',
            'password'=>'required|min:5|max:20'


        ]);


        $credentail=$req->only('email','password');

        if(Auth::attempt($credentail)){


            // $data = ['loggeduserinfo'=>User::where('id','=', auth()->user()->id)->first()];

            if(auth()->user()->status==1){

                $user = Auth::user();

                $success=[];



            $success['name'] =auth()->user()->name;
            $success['email'] =auth()->user()->email;
            $success['address'] =auth()->user()->address;
            $success['city'] =auth()->user()->city;
            $success['Mobile'] =auth()->user()->Mobile;
            $success['age'] =auth()->user()->age;
            // $success['password']= Crypt::decrypt(auth()->user()->password);

            $success['token'] =  $user->createToken('MyApp')->accessToken;
            // $success['image'] =auth()->user()->image;
            return response()->json(['success' => $success], 200);


            // return response()->json(['success'=>'Logged in']);
            }
            else{
                return response()->json(['fail' => 'Unable to login'],201);
            }

        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }

            }




            public function details()
            {
                $user = Auth::user();
                return response()->json(['success' => $user], 200);
            }




}
