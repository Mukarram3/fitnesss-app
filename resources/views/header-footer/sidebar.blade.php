<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('storage/images/sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->

  <div class="logo"><a href="" class="simple-text logo-normal">
    <img style="width: 105px;height: 100px;border-radius: 100px;" src="{{asset('storage/images/'.auth()->user()->image)}}" alt="" srcset="">
   </a></div>
   
 <div class="sidebar-wrapper">
   <ul class="nav">
        
     
     <li class="nav-item ">
       <a class="nav-link" href="{{route('user_page')}}">
         <i class="material-icons">person</i>
         <p>Users</p>
       </a>
     </li>   
     
     <li class="nav-item ">
       <a class="nav-link" href="{{route('subscribed')}}">
         <i class="material-icons">person</i>
         <p>Subscribed</p>
       </a>
     </li>
     
     <li class="nav-item ">
       <a class="nav-link" href="{{route('subscribe_history')}}">
         <i class="material-icons">person</i>
         <p>Subscription History</p>
       </a>
     </li>
     
     <li class="nav-item ">
       <a class="nav-link" href="{{route('plans')}}">
         <i class="material-icons">notifications</i>
         <p>Subscription Plans</p>
       </a>
     </li>
     <li class="nav-item ">
       <a class="nav-link" href="{{route('catgory_index')}}">
         <i class="material-icons">content_paste</i>
         <p>Catogories</p>
       </a>
     </li>
   
      <li class="nav-item ">
       <a class="nav-link" href="{{route('workoutcategory_index')}}">
         <i class="material-icons">library_books</i>
         <p>Workout Category</p>
       </a>
     </li>

     <li class="nav-item ">
       <a class="nav-link" href="{{route('exercises')}}">
         <i class="material-icons">bubble_chart</i>
         <p>Exercises</p>
       </a>
     </li> 
     <li class="nav-item ">
       <a class="nav-link" href="{{route('mealcategoryindex')}}">
         <i class="material-icons">location_ons</i>
         <p>Meal Category</p>
       </a>
     </li>
     <li class="nav-item ">
       <a class="nav-link" href="{{route('mealindex')}}">
         <i class="material-icons">notifications</i>
         <p>Meals</p>
       </a>
     </li>
     
     {{--
     <li class="nav-item ">
       <a class="nav-link" href="{{route('steps')}}">
         <i class="material-icons">notifications</i>
         <p>Meal Steps</p>
       </a>
     </li> --}}
      {{--
     <li class="nav-item ">
       <a class="nav-link" href="{{route('subscribed')}}">
         <i class="material-icons">notifications</i>
         <p>Subscribed Packages</p>
       </a>
     </li>
     
     <li class="nav-item ">
       <a class="nav-link" href="{{route('subscr_history')}}">
         <i class="material-icons">notifications</i>
         <p>Subscription History</p>
       </a>
     </li> --}}
     
      
     {{-- <li class="nav-item active-pro ">
       <a class="nav-link" href="./upgrade.html">
         <i class="material-icons">unarchive</i>
         <p>Upgrade to PRO</p>
       </a>
     </li> --}}
   </ul>
 </div>

</div>