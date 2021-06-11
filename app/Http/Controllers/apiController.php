<?php
namespace App\Http\Controllers\API;
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Meal;
use App\Models\Exercise;
use App\Models\Workout;
use App\Models\Subscribed;
use App\Models\Subscription_history;
use App\Models\Subscription_plan;
use App\Models\Mealcat_meal;
use App\Http\Controllers\Controller; 
use App\Models\Mealcategory;
use App\Models\mealcatplan;
use App\Models\weekdaysmealcat;
use App\Models\day;
use App\Models\weekmealcat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Crypt;

class apiController extends Controller
{

   

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
    $admin->country=$request->country;
    $admin->state=$request->state;
    // $date=date($request->dob);
    $admin->dob = date('Y/m/d', $request->dob);
    $admin->weight=$request->weight;
    $admin->height=$request->height;
    $admin->gender=$request->gender;

    

    if($request->hasFile('file')){
        $image=$request->file('file');
            $path = 'public/images/';
            $extension=$image->getClientOriginalExtension();
            $image_name=uniqid().".".$extension;
            $image->storeAs($path,$image_name);
            $admin->image = $image_name;
    }
    $save=$admin->save();
    if($save){



        $success['token'] =  $admin->createToken('MyApp')-> accessToken; 
        // return "dfsdfc";
        return response()->json($success, 200);
// return response()->json(['success'=>'Record Has Saved']); 
    
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
            $success['country'] =auth()->user()->country;
            $success['state'] =auth()->user()->state;
            $success['dob'] =auth()->user()->dob;
            $success['height'] =auth()->user()->height;
            $success['weight'] =auth()->user()->weight;
            // $success['password']= Crypt::decrypt(auth()->user()->password); 
            $success['gender'] =auth()->user()->gender;
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



    function mealcategoryindex(){
        $mealcategory=Mealcategory::where('status',1)->get();
     
        return $mealcategory;
    }
    function mealcategorypaidindex(){
        $mealcategory=Mealcategory::where('status',1)->where('type','paid')->get();
       
        return $mealcategory;
    }
    function mealcategoryplanindex(Request $req){
        $mealcategory=Mealcategory::where('id',$req->id)->where('status',1)->where('type','paid')->get();
       $plan=mealcatplan::where('mealcat_id',$req->id)->where('status',1)->get();
        return ['mealcat' => $mealcategory, 'plan' => $plan];
    }


    function weekdaysmealcat(Request $req){
        $mealcatid=$req->mealcatid;
        $planid=$req->planid;
        $weeks=weekmealcat::where('mealcatid',$mealcatid)->where('planid',$planid)->get();

        $days=day::all();
        return ['weeks' => $weeks, 'day' => $days];
    }


    
    public function mealindex(Request $request){
        
       $id=$request['id'];
        $data=Meal::where('status',1)->where('meal_catid','=',$id)->get();
        // return $data->steps;
        return $data;
       
    }


    function workoutcategory_index(){
        $data=Workout::where('status',1)->get();
        return $data;
    }
    // function exercises(){
    //     $data=Exercise::with('hasWorkout')->where('status',1)->get();   
    //     return $data;
    // }


    public function exercises(Request $request){
        
        $id=$request['id'];
         $data=Exercise::where('status',1)->where('workout_catid','=',$id)->get();
         // return $data->steps;
         return $data;
        
     }



}
